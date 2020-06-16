<?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpdfall extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('M_details');
        $this->load->model('Report_model');
    }

    public function index()    
    {
    	$mpdf['data'] = $this->Report_model->mpdfall();
    	$html['data'] = $this->Report_model->mpdfall();
    	$html = $this->load->view('report/mpdfall',[],true);
        $mpdf = new \Mpdf\Mpdf(['format' => 'legal']);
        $mpdf->AddPage('L'); // Adds a new page in Landscape orientation
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser

    }
}