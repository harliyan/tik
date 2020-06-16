<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['title'] = 'About';
        $data['icon'] = '<i class="fas fa-fw fa-info"></i>';
        $data['desc'] = $this->db->get_where('desc')->row_array();
        $data['cluster']   = $this->Home_model->cluster();  
        $data['active_view']    = "home/about";
        $this->load->view('templates/frontend/index', $data);
    }

    public function edit_cluster(){
        $id=$this->input->post('id');
        $cluster=$this->input->post('cluster');
        $this->Home_model->edit_cluster($id, $cluster);
        redirect('netstatus');
    }

    public function delete_cluster($id)
    {
        $this->Home_model->delete_cluster($id);
        $this->session->set_flashdata('success', 'Data Cluster Berhasil dihapus');
        redirect('netstatus'); //redirect
    }

}
