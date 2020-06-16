<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        // $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login User';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
            // echo 'auth/index';
        } else {
            // validasinya sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email =  $this->input->post('email');
        $password =  $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            // usernya ada
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {

                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
               Wrong password</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            This Email has not been Activated</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered</div>');
            redirect('auth');
        }
    }

    public function registration()
    {

        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]', [
            'is_unique' => 'This user already registered'
        ]);
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[3]|matches[password2]',
            [
                'matches' => 'password dont match',
                'min_lenght' => 'password too short'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration User';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpeg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);

            // $this->sendEmail();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Congratulation! your account has been registered, Please login</div>');
            redirect('auth');
        }
    }

    public function sendEmail()
    {
        $config = [
            'protocol' => 'smtp',
            'smpt_host' => 'ssl://smtp.googlemail.com',
            'smpt_user' => 'htmardian@gmail.com',
            'smpt_pass' => 'pisang123',
            'smpt_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->to('harliyan321@gmail.com');
        $this->email->from('htmardian@gmail.com', 'Harliyan Tri Mardian');
        $this->email->subject('Testing');
        $this->email->message('Hello');
        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }

        $from_email = "harliyan321@gmail.com";
        $to_email = "htmardian@gmail.com";

        //Load email library 
        // $config = array(
        //     'protocol' => 'smtp',
        //     'smtp_host' => 'ssl://smtp.googlemail.com',
        //     'smtp_port' => 465,
        //     'smtp_user' => 'htmardian@gmail.com',
        //     'smtp_pass' => 'pisang123',
        //     'mailtype'  => 'html',
        //     'charset'   => 'iso-8859-1'
        // );


        // $this->load->library('email', $config);

        // $this->email->initialize($config);
        // $this->email->from('htmardian@gmail.com');
        // $this->email->to('harliyan321@gmail.com');
        // $this->email->subject('Registration Success');
        // $this->email->message('Hello');



        // if ($this->email->send()) {
        //     return true;
        // } else {
        //     show_error($this->email->print_debugger());
        // }
        // $this->email->send();
        //Send mail 


    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
     You have been logout</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
