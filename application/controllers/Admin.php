    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Admin extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            // if (!$this->session->userdata('email')) {
            //     redirect('auth');
            // }
            is_logged_in();
            $this->load->model('User_model');
            $this->load->model('Home_model');
        }

        public function index()
        {
            $data['title'] = 'Dashboard Admin';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $data['get_konverter_s']  = $this->Home_model->get_konverter_s();
            $data['get_konverter_d']  = $this->Home_model->get_konverter_d();
            $data['get_up']  = $this->Home_model->get_up();
            $data['get_down']  = $this->Home_model->get_down();

            $data['get_barat_count']  = $this->Home_model->get_barat_count();
            $data['get_utara_count']  = $this->Home_model->get_utara_count();
            $data['get_timur_count']  = $this->Home_model->get_timur_count();
            $data['get_selatan_count']  = $this->Home_model->get_selatan_count();
            $data['get_all_count']  = $this->Home_model->get_all_count();

            $data['get_cluster_count']  = $this->Home_model->get_cluster_count();
            $data['get_jointing_count']  = $this->Home_model->get_jointing_count();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        }

        public function role()
        {
            $data['title'] = 'Role';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['role'] = $this->db->get('user_role')->result_array();

            $this->form_validation->set_rules('role', 'Role', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('admin/role', $data);
                $this->load->view('templates/footer');
            } else {
               $data = [
                'role' => $this->input->post('role'),
            ];
            $this->db->insert('user_role', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                New menu added</div>');
            redirect('admin/role');
        }
    }


    // BELUM SELESAI
    public function roleEdit()
    {
        $data['title'] = 'Edit Rolesss';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = $this->db->get_where('user_role', 'id')->row_array();
        var_dump($where);
        die();
        // $data['role'] = $this->db->get_where('user_role', $where)->row_array();

        $this->form_validation->set_rules('role', 'Role', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role-edit', $data);
            $this->load->view('templates/footer');
        } else {
            $role = $this->input->post('role');


            $this->db->set('role', $role);
            $this->db->where('id', $id);
            $this->db->update('user_role');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Your profile has been updated</div>');
            redirect('admin/role');
        }
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Access Changes</div>');
    }

    public function userlist()
    {
        $data['title'] = 'User List';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['userlist'] = $this->User_model->getUser();
        $data['userlists'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('role_id', 'Role_id', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/user-list', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'role_id' => $this->input->post('role_id'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user', $data);
                // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                //     New User added</div>');
            redirect('admin/userlist');
        }
    }

    public function hapus($id)
    {
        $this->User_model->hapus_user($id);
        $this->session->set_flashdata('success', 'Data Berhasil dihapus');
            redirect('admin/userlist'); //redirect
        }

        public function hapusRole($id)
        {
            $this->User_model->hapusRole($id);
            $this->session->set_flashdata('success', 'Data Berhasil dihapus');
            redirect('admin/role'); //redirect
        }
    }
