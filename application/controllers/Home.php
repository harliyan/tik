<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['title'] = 'Geographical Information System  <br> Information Technology Kota Pekalongan';
        $data['desc'] = $this->db->get_where('desc')->row_array();
        $data['view']   = $this->Home_model->peta();  
        $data['kecamatan']    = "home";

        $data['get_barat_count']  = $this->Home_model->get_barat_count();
        $data['get_utara_count']  = $this->Home_model->get_utara_count();
        $data['get_timur_count']  = $this->Home_model->get_timur_count();
        $data['get_selatan_count']  = $this->Home_model->get_selatan_count();
        $data['get_all_count']  = $this->Home_model->get_all_count();

        $data['get_cluster_count']  = $this->Home_model->get_cluster_count();
        $data['get_jointing_count']  = $this->Home_model->get_jointing_count();

        $data['active_view']    = "home/index";
        $this->load->view('templates/frontend/peta', $data);

    }

    public function telecenter()
    {
        $data['title'] = 'Geographical Information System  <br> Information Technology Kota Pekalongan';
        $data['desc'] = $this->db->get_where('desc')->row_array();
        $data['view']   = $this->Home_model->telecenterPeta();  
        $data['kecamatan']    = "home";

        $data['get_barat_count']  = $this->Home_model->get_barat_count();
        $data['get_utara_count']  = $this->Home_model->get_utara_count();
        $data['get_timur_count']  = $this->Home_model->get_timur_count();
        $data['get_selatan_count']  = $this->Home_model->get_selatan_count();
        $data['get_all_count']  = $this->Home_model->get_all_count();

        $data['get_cluster_count']  = $this->Home_model->get_cluster_count();
        $data['get_jointing_count']  = $this->Home_model->get_jointing_count();

        $data['active_view']    = "home/index";
        $this->load->view('templates/frontend/peta', $data);

    }

    public function fo()
    {
        $data['title'] = 'Geographical Information System  <br> Information Technology Kota Pekalongan';
        $data['desc'] = $this->db->get_where('desc')->row_array();
        $data['view']   = $this->Home_model->foPeta();  
        $data['kecamatan']    = "home";

        $data['get_barat_count']  = $this->Home_model->get_barat_count();
        $data['get_utara_count']  = $this->Home_model->get_utara_count();
        $data['get_timur_count']  = $this->Home_model->get_timur_count();
        $data['get_selatan_count']  = $this->Home_model->get_selatan_count();
        $data['get_all_count']  = $this->Home_model->get_all_count();

        $data['get_cluster_count']  = $this->Home_model->get_cluster_count();
        $data['get_jointing_count']  = $this->Home_model->get_jointing_count();

        $data['active_view']    = "home/index";
        $this->load->view('templates/frontend/peta', $data);

    }

    public function warnet()
    {
        $data['title'] = 'Geographical Information System  <br> Information Technology Kota Pekalongan';
        $data['desc'] = $this->db->get_where('desc')->row_array();
        $data['view']   = $this->Home_model->warnetPeta();  
        $data['kecamatan']    = "home";

        $data['get_barat_count']  = $this->Home_model->get_barat_count();
        $data['get_utara_count']  = $this->Home_model->get_utara_count();
        $data['get_timur_count']  = $this->Home_model->get_timur_count();
        $data['get_selatan_count']  = $this->Home_model->get_selatan_count();
        $data['get_all_count']  = $this->Home_model->get_all_count();

        $data['get_cluster_count']  = $this->Home_model->get_cluster_count();
        $data['get_jointing_count']  = $this->Home_model->get_jointing_count();

        $data['active_view']    = "home/index";
        $this->load->view('templates/frontend/peta', $data);

    }

    public function sarpras()
    {
        $data['title'] = 'Geographical Information System  <br> Information Technology Kota Pekalongan';
        $data['desc'] = $this->db->get_where('desc')->row_array();
        $data['view']   = $this->Home_model->sarprasPeta();  
        $data['kecamatan']    = "home";

        $data['get_barat_count']  = $this->Home_model->get_barat_count();
        $data['get_utara_count']  = $this->Home_model->get_utara_count();
        $data['get_timur_count']  = $this->Home_model->get_timur_count();
        $data['get_selatan_count']  = $this->Home_model->get_selatan_count();
        $data['get_all_count']  = $this->Home_model->get_all_count();

        $data['get_cluster_count']  = $this->Home_model->get_cluster_count();
        $data['get_jointing_count']  = $this->Home_model->get_jointing_count();

        $data['active_view']    = "home/index";
        $this->load->view('templates/frontend/peta', $data);

    }

}
