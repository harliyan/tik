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
        $data['title'] = 'Peta Persebaran Kabel FO Kota Pekalongan';
        $data['desc'] = $this->db->get_where('desc')->row_array();
        $data['view']   = $this->Home_model->peta();  
        $data['kecamatan']    = "home";
  

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

        $data['active_view']    = "home/index";
        $this->load->view('templates/frontend/peta', $data);

    }

}
