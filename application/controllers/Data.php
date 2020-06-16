 <?php
 defined('BASEPATH') or exit('No direct script access allowed');

 class Data extends CI_Controller
 {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_model');
    }

    public function index()
    {
        $data['title'] = 'Data Inventaris Fiber Optic';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Data_model', 'data');
        // $data['data'] = $this->data->data();
        $data['data'] = $this->Data_model->datainv();
        $data['data_cluster'] = $this->Data_model->cluster_tampil();
        $data['data_opd'] = $this->Data_model->opd_tampil();

        $this->form_validation->set_rules('opd', 'Opd', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'opd' => $this->input->post('opd'),
            ];
            $this->db->insert('data', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                New data inventaris added</div>');
            redirect('data');
        }
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Inventaris Fiber Optic';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'required');
        $this->form_validation->set_rules('opd', 'opd', 'required');
        // $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('cluster', 'cluster', 'required');
        $this->form_validation->set_rules('kondisi', 'kondisi', 'required');
        $this->form_validation->set_rules('jenis_konverter', 'jenis_konverter', 'required');
        $this->form_validation->set_rules('jointing', 'jointing', 'required');
        // $this->form_validation->set_rules('jointing2', 'jointing2', 'required');
        // $this->form_validation->set_rules('jointing3', 'jointing3', 'required');
        $this->form_validation->set_rules('ip', 'ip', 'required');

        $this->form_validation->set_rules('latitude', 'latitude', 'required');
        $this->form_validation->set_rules('longitude', 'longitude', 'required');

        $data['data_kecamatan'] = $this->Data_model->kecamatan_tampil();
        $data['data_cluster'] = $this->Data_model->cluster_tampil();
        $data['jointing'] = $this->Data_model->jointing_tampil();
        $data['data_opd'] = $this->Data_model->opd_tampil();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('data/tambahdata', $data);
            $this->load->view('templates/footer');
        } else {
           $data = [
            'id_kecamatan' => $this->input->post('id_kecamatan'),
            'opd' => $this->input->post('opd'),
            // 'alamat' => $this->input->post('alamat'),
            'kondisi' => $this->input->post('kondisi'),
            'jenis_konverter' => $this->input->post('jenis_konverter'),
            'cluster' => $this->input->post('cluster'),
            'jointing' => $this->input->post('jointing'),
            // 'jointing2' => $this->input->post('jointing2'),
            // 'jointing3' => $this->input->post('jointing3'),
            'ip' => $this->input->post('ip')
        ];

        $data2 = [
            'latitude' => $this->input->post('latitude'),
            'longitude' => $this->input->post('longitude')
        ];
        $this->db->insert('data', $data);
        $this->db->insert('data2', $data2);
        $this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
        redirect('data/tambah');
    }
}

public function tambahmanual()
{
    $data['title'] = 'Tambah Data Inventaris Fiber Optic Manual';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'required');
    $this->form_validation->set_rules('opd', 'opd', 'required');
    $this->form_validation->set_rules('cluster', 'cluster', 'required');
    $this->form_validation->set_rules('kondisi', 'kondisi', 'required');
    $this->form_validation->set_rules('jenis_konverter', 'jenis_konverter', 'required');
    $this->form_validation->set_rules('jointing', 'jointing', 'required');
    $this->form_validation->set_rules('ip', 'ip', 'required');

    $this->form_validation->set_rules('latitude', 'latitude', 'required');
    $this->form_validation->set_rules('longitude', 'longitude', 'required');

    $data['data_kecamatan'] = $this->Data_model->kecamatan_tampil();
    $data['data_cluster'] = $this->Data_model->cluster_tampil();
    $data['jointing'] = $this->Data_model->jointing_tampil();
    $data['data_opd'] = $this->Data_model->opd_tampil();

    if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/tambahmanual', $data);
        $this->load->view('templates/footer');
    } else {
       $data = [
        'id_kecamatan' => $this->input->post('id_kecamatan'),
        'opd' => $this->input->post('opd'),
        'kondisi' => $this->input->post('kondisi'),
        'jenis_konverter' => $this->input->post('jenis_konverter'),
        'cluster' => $this->input->post('cluster'),
        'jointing' => $this->input->post('jointing'),
        'ip' => $this->input->post('ip')
    ];

    $data2 = [
        'latitude' => $this->input->post('latitude'),
        'longitude' => $this->input->post('longitude')
    ];
    $this->db->insert('data', $data);
    $this->db->insert('data2', $data2);
    $this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
    redirect('data/tambahmanual');
}
}

public function inputstatus()
{
    $data['title'] = 'Input Status Perangkat';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['status'] = $this->db->get('status_perangkat')->result_array();

    $this->form_validation->set_rules('status', 'Status', 'required');
    $this->form_validation->set_rules('flag', 'Flag', 'required');

    if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/inputstatus', $data);
        $this->load->view('templates/footer');
    } else {
       $data = [
        'status' => $this->input->post('status'),
        'flag' => $this->input->post('flag'),
    ];
    $this->db->insert('status_perangkat', $data);
    $this->session->set_flashdata('success', 'Data Status Berhasil ditambahkan');
    redirect('data/inputstatus');
}
}

public function cluster()
{
    $data['title'] = 'Cluster';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['cluster'] = $this->db->get('cluster')->result_array();

    $this->form_validation->set_rules('cluster', 'Cluster', 'required');

    if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/cluster', $data);
        $this->load->view('templates/footer');
    } else {
       $data = [
        'cluster' => $this->input->post('cluster'),
    ];
    $this->db->insert('cluster', $data);
    $this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
    redirect('data/cluster');
}
}

public function jointing()
{
    $data['title'] = 'Jointing';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['jointing'] = $this->db->get('jointing')->result_array();

    $this->form_validation->set_rules('jointing', 'Jointing', 'required');

    if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/jointing', $data);
        $this->load->view('templates/footer');
    } else {
       $data = [
        'jointing' => $this->input->post('jointing'),
    ];
    $this->db->insert('jointing', $data);
    $this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
    redirect('data/jointing');
}
}

public function opd()
{
    $data['title'] = 'Master OPD';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['opd'] = $this->db->get('opd')->result_array();

    $this->form_validation->set_rules('opd', 'opd', 'required');
    $this->form_validation->set_rules('opd_nama', 'opd_nama', 'required');
    $this->form_validation->set_rules('alamat', 'alamat', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('kontak', 'kontak', 'required');

    if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/opd', $data);
        $this->load->view('templates/footer');
    } else {
       $data = [
        'opd' => $this->input->post('opd'),
        'opd_nama' => $this->input->post('opd_nama'),
        'alamat' => $this->input->post('alamat'),
        'email' => $this->input->post('email'),
        'kontak' => $this->input->post('kontak')
    ];
    $this->db->insert('opd', $data);
    $this->session->set_flashdata('success', 'Data OPD Berhasil ditambahkan');
    redirect('data/opd');
}
}

public function edit_cluster(){
    $id=$this->input->post('id');
    $cluster=$this->input->post('cluster');
    $this->Data_model->edit_cluster($id,$cluster);
    $this->session->set_flashdata('success', 'Data Berhasil diedit');
    redirect('data/cluster');
}

public function edit_jointing(){
    $id=$this->input->post('id');
    $jointing=$this->input->post('jointing');
    $this->Data_model->edit_jointing($id,$jointing);
    $this->session->set_flashdata('success', 'Data Berhasil diedit');
    redirect('data/jointing');
}

public function edit_status(){
    $id_status=$this->input->post('id_status');
    $status=$this->input->post('status');
    $this->Data_model->edit_status($id_status,$status);
    $this->session->set_flashdata('success', 'Data Berhasil diedit');
    redirect('data/inputstatus');
}

public function edit_opd(){
    $id=$this->input->post('id');
    $opd=$this->input->post('opd');
    $opd_nama=$this->input->post('opd_nama');
    $alamat=$this->input->post('alamat');
    $email=$this->input->post('email');
    $kontak=$this->input->post('kontak');
    $this->Data_model->edit_opd($id,$opd,$opd_nama, $alamat, $email, $kontak);
    $this->session->set_flashdata('success', 'Data Berhasil diedit');
    redirect('data/opd');
}

public function hapus($id)
{
$this->Data_model->hapus($id);
$this->session->set_flashdata('success', 'Data Status Berhasil dihapus');
    redirect('data/inputstatus'); //redirect
}

public function hapusdata($id)
{
    $this->Data_model->hapusdata($id);
    $this->session->set_flashdata('success', 'Data Berhasil dihapus');
    redirect('data'); //redirect
}

public function hapuscluster($id)
{
    $this->Data_model->hapuscluster($id);
    $this->session->set_flashdata('success', 'Data Cluster Point Berhasil dihapus');
    redirect('data/cluster'); //redirect
}

public function hapusjointing($id)
{
    $this->Data_model->hapusjointing($id);
    $this->session->set_flashdata('success', 'Data Jointing Point Berhasil dihapus');
    redirect('data/jointing'); //redirect
}

public function hapusopd($id)
{
    $this->Data_model->hapusopd($id);
    $this->session->set_flashdata('success', 'Data OPD Berhasil dihapus');
    redirect('data/opd'); //redirect
}
}
