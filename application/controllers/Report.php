<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Report_model');
        $this->load->model('Home_model');
        $this->load->library('pdf');
    }

    public function index()
    {
        $data['title'] = 'Report Persebaran Kabel FO Kota Pekalongan';
        $data['desc'] = $this->db->get_where('desc')->row_array();
        $data['download'] = 'cetakpdf';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['report']   = $this->Report_model->getReport();  
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('report/index', $data);
        $this->load->view('templates/footer');
    }

     public function utara()
    {
        $data['title'] = 'Report Persebaran Kabel FO Kota Pekalongan (Kec. Utara)';
        $data['download'] = 'cetakpdfutara';
        $data['desc'] = $this->db->get_where('desc')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['report']   = $this->Report_model->getReportUtara();  
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('report/index', $data);
        $this->load->view('templates/footer');
    }

        public function timur()
    {
        $data['title'] = 'Report Persebaran Kabel FO Kota Pekalongan (Kec. Timur)';
        $data['download'] = 'cetakpdftimur';
        $data['desc'] = $this->db->get_where('desc')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['report']   = $this->Report_model->getReportTimur();  
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('report/index', $data);
        $this->load->view('templates/footer');
    }

        public function selatan()
    {
        $data['title'] = 'Report Persebaran Kabel FO Kota Pekalongan (Kec. Selatan)';
        $data['download'] = 'cetakpdfselatan';
        $data['desc'] = $this->db->get_where('desc')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['report']   = $this->Report_model->getReportSelatan();  
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('report/index', $data);
        $this->load->view('templates/footer');
    }

        public function barat()
    {
        $data['title'] = 'Report Persebaran Kabel FO Kota Pekalongan (Kec. Barat)';
        $data['download'] = 'cetakpdfbarat';
        $data['desc'] = $this->db->get_where('desc')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['report']   = $this->Report_model->getReportBarat();  
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('report/index', $data);
        $this->load->view('templates/footer');
    }

     public function cetakpdf(){
        $this->pdf->SetMargins(2,1,1);
        $this->pdf->AliasNbPages();
        $this->pdf->AddPage("p","letter", "mm");
        $this->pdf->SetFont('Arial','B',16);
        // Insert a logo in the top-left corner at 300 dpi
        $this->pdf->Image('assets/img/1.png',0.5,0.5,-300);
        $this->pdf->Cell(13.3,0.2,"Report Persebaran Kabel FO Kota Pekalongan",0,2,'C');
        $this->pdf->SetFont('Arial','B',14);
        $this->pdf->Cell(8.5,1.1,"Dinas Kominfo Kota Pekalongan",0,2,'C');
        $this->pdf->SetFont('Arial','B',10);
        $this->pdf->Cell(16.3,0.2,"Jl. Majapahit No.5, Podosugih, Kec. Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51111",0,2,'C');

        $this->pdf->ln(1);
        $this->pdf->SetFont('Arial','B',10);
        $this->pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
        $this->pdf->ln(1);
        $this->pdf->SetFont('Arial','B',10);

        $this->pdf->Cell(0.8,0.8,'NO','LTR',0,'C',0);   // empty cell with left,top, and right borders
        $this->pdf->Cell(6,0.8,'Perangkat/OPD','LTR',0,'C',0);
        $this->pdf->Cell(2,0.8,'Cluster','LTR',0,'C',0);
        $this->pdf->Cell(4,0.8,'Jenis Konverter','LTR',0,'C',0);
        $this->pdf->Cell(5,0.8,'IP Adress','LTR',0,'C',0);
        $this->pdf->SetFont('Arial','',10);

        $report = $this->db->query("SELECT `data` .*, `opd`.* FROM `data` JOIN `opd` ON `data`. `opd` = `opd`.`id`")->result();
        foreach ($report as $row){
            $this->pdf->ln();
            $this->pdf->Cell(0.8,0.8, $row->id,'LTR',0,'C',0);   
            $this->pdf->Cell(6,0.8, $row->opd,'LTR',0,'L',0);   
            $this->pdf->Cell(2,0.8, $row->cluster,'LTR',0,'C',0);   
            $this->pdf->Cell(4,0.8, $row->jenis_konverter,'LTR',0,'C',0);   
            $this->pdf->Cell(5,0.8, $row->ip,'LTR',0,'C',0);   
        }
        $this->pdf->Output();
    }

    public function cetakpdfutara(){
        $this->pdf->SetMargins(2,1,1);
        $this->pdf->AliasNbPages();
        $this->pdf->AddPage("p","letter", "mm");
        $this->pdf->SetFont('Arial','B',16);
        // Insert a logo in the top-left corner at 300 dpi
        $this->pdf->Image('assets/img/1.png',0.5,0.5,-300);
        $this->pdf->Cell(16.6,0.2,"Report Persebaran Kabel FO Kota Pekalongan (Kec. Utara)",0,2,'C');
        $this->pdf->SetFont('Arial','B',14);
        $this->pdf->Cell(8.5,1.1,"Dinas Kominfo Kota Pekalongan",0,2,'C');
        $this->pdf->SetFont('Arial','B',10);
        $this->pdf->Cell(16.3,0.2,"Jl. Majapahit No.5, Podosugih, Kec. Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51111",0,2,'C');

        $this->pdf->ln(1);
        $this->pdf->SetFont('Arial','B',10);
        $this->pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
        $this->pdf->ln(1);
        $this->pdf->SetFont('Arial','B',10);

        $this->pdf->Cell(0.8,0.8,'NO','LTR',0,'C',0);   // empty cell with left,top, and right borders
        $this->pdf->Cell(6,0.8,'Perangkat/OPD','LTR',0,'C',0);
        $this->pdf->Cell(2,0.8,'Cluster','LTR',0,'C',0);
        $this->pdf->Cell(4,0.8,'Jenis Konverter','LTR',0,'C',0);
        $this->pdf->Cell(5,0.8,'IP Adress','LTR',0,'C',0);
        $this->pdf->SetFont('Arial','',10);

        $report = $this->db->query("SELECT `data` .*, `opd`.* FROM `data` JOIN `opd` ON `data`. `opd` = `opd`.`id` WHERE `data`. `id_kecamatan` = '1' ")->result();
        // $report = $this->db->query("SELECT `data` .*, `opd`.* FROM `data` JOIN `opd` ON `data`. `opd` = `opd`.`id`")->result();
        foreach ($report as $row){
            $this->pdf->ln();
            $this->pdf->Cell(0.8,0.8, $row->id,'LTR',0,'C',0);   
            $this->pdf->Cell(6,0.8, $row->opd,'LTR',0,'L',0);   
            $this->pdf->Cell(2,0.8, $row->cluster,'LTR',0,'C',0);   
            $this->pdf->Cell(4,0.8, $row->jenis_konverter,'LTR',0,'C',0);   
            $this->pdf->Cell(5,0.8, $row->ip,'LTR',0,'C',0);   
        }
        $this->pdf->Output();
    }

      public function cetakpdftimur(){
        $this->pdf->SetMargins(2,1,1);
        $this->pdf->AliasNbPages();
        $this->pdf->AddPage("p","letter", "mm");
        $this->pdf->SetFont('Arial','B',16);
        // Insert a logo in the top-left corner at 300 dpi
        $this->pdf->Image('assets/img/1.png',0.5,0.5,-300);
        $this->pdf->Cell(16.6,0.2,"Report Persebaran Kabel FO Kota Pekalongan (Kec. Timur)",0,2,'C');
        $this->pdf->SetFont('Arial','B',14);
        $this->pdf->Cell(8.5,1.1,"Dinas Kominfo Kota Pekalongan",0,2,'C');
        $this->pdf->SetFont('Arial','B',10);
        $this->pdf->Cell(16.3,0.2,"Jl. Majapahit No.5, Podosugih, Kec. Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51111",0,2,'C');

        $this->pdf->ln(1);
        $this->pdf->SetFont('Arial','B',10);
        $this->pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
        $this->pdf->ln(1);
        $this->pdf->SetFont('Arial','B',10);

        $this->pdf->Cell(0.8,0.8,'NO','LTR',0,'C',0);   // empty cell with left,top, and right borders
        $this->pdf->Cell(6,0.8,'Perangkat/OPD','LTR',0,'C',0);
        $this->pdf->Cell(2,0.8,'Cluster','LTR',0,'C',0);
        $this->pdf->Cell(4,0.8,'Jenis Konverter','LTR',0,'C',0);
        $this->pdf->Cell(4,0.8,'IP Adress','LTR',0,'C',0);
        $this->pdf->SetFont('Arial','',10);

       $report = $this->db->query("SELECT `data` .*, `opd`.* FROM `data` JOIN `opd` ON `data`. `opd` = `opd`.`id` WHERE `data`. `id_kecamatan` = '2' ")->result();
        // $report = $this->db->get('data')->result();
        foreach ($report as $row){
            $this->pdf->ln();
            $this->pdf->Cell(0.8,0.8, $row->id,'LTR',0,'C',0);   
            $this->pdf->Cell(6,0.8, $row->opd,'LTR',0,'L',0);   
            $this->pdf->Cell(2,0.8, $row->cluster,'LTR',0,'C',0);   
            $this->pdf->Cell(4,0.8, $row->jenis_konverter,'LTR',0,'C',0);   
            $this->pdf->Cell(4,0.8, $row->ip,'LTR',0,'C',0);   
        }
        $this->pdf->Output();
    }

      public function cetakpdfselatan(){
        $this->pdf->SetMargins(2,1,1);
        $this->pdf->AliasNbPages();
        $this->pdf->AddPage("p","letter", "mm");
        $this->pdf->SetFont('Arial','B',16);
        // Insert a logo in the top-left corner at 300 dpi
        $this->pdf->Image('assets/img/1.png',0.5,0.5,-300);
        $this->pdf->Cell(16.6,0.2,"Report Persebaran Kabel FO Kota Pekalongan (Kec. Selatan)",0,2,'C');
        $this->pdf->SetFont('Arial','B',14);
        $this->pdf->Cell(8.5,1.1,"Dinas Kominfo Kota Pekalongan",0,2,'C');
        $this->pdf->SetFont('Arial','B',10);
        $this->pdf->Cell(16.3,0.2,"Jl. Majapahit No.5, Podosugih, Kec. Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51111",0,2,'C');

        $this->pdf->ln(1);
        $this->pdf->SetFont('Arial','B',10);
        $this->pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
        $this->pdf->ln(1);
        $this->pdf->SetFont('Arial','B',10);

        $this->pdf->Cell(0.8,0.8,'NO','LTR',0,'C',0);   // empty cell with left,top, and right borders
        $this->pdf->Cell(6,0.8,'Perangkat/OPD','LTR',0,'C',0);
        $this->pdf->Cell(2,0.8,'Cluster','LTR',0,'C',0);
        $this->pdf->Cell(4,0.8,'Jenis Konverter','LTR',0,'C',0);
        $this->pdf->Cell(5,0.8,'IP Adress','LTR',0,'C',0);
        $this->pdf->SetFont('Arial','',10);

        // $report = $this->db->get_where('data', array('id_kecamatan' => 3))->result();
         $report = $this->db->query("SELECT `data` .*, `opd`.* FROM `data` JOIN `opd` ON `data`. `opd` = `opd`.`id` WHERE `data`. `id_kecamatan` = '3' ")->result();
        // $report = $this->db->get('data')->result();
        foreach ($report as $row){
            $this->pdf->ln();
            $this->pdf->Cell(0.8,0.8, $row->id,'LTR',0,'C',0);   
            $this->pdf->Cell(6,0.8, $row->opd,'LTR',0,'L',0);   
            $this->pdf->Cell(2,0.8, $row->cluster,'LTR',0,'C',0);   
            $this->pdf->Cell(4,0.8, $row->jenis_konverter,'LTR',0,'C',0);   
            $this->pdf->Cell(5,0.8, $row->ip,'LTR',0,'C',0);   
        }
        $this->pdf->Output();
    }

      public function cetakpdfbarat(){
        $this->pdf->SetMargins(2,1,1);
        $this->pdf->AliasNbPages();
        $this->pdf->AddPage("p","letter", "mm");
        $this->pdf->SetFont('Arial','B',16);
        // Insert a logo in the top-left corner at 300 dpi
        $this->pdf->Image('assets/img/1.png',0.5,0.5,-300);
        $this->pdf->Cell(16.6,0.2,"Report Persebaran Kabel FO Kota Pekalongan (Kec. Barat)",0,2,'C');
        $this->pdf->SetFont('Arial','B',14);
        $this->pdf->Cell(8.5,1.1,"Dinas Kominfo Kota Pekalongan",0,2,'C');
        $this->pdf->SetFont('Arial','B',10);
        $this->pdf->Cell(16.3,0.2,"Jl. Majapahit No.5, Podosugih, Kec. Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51111",0,2,'C');

        $this->pdf->ln(1);
        $this->pdf->SetFont('Arial','B',10);
        $this->pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
        $this->pdf->ln(1);
        $this->pdf->SetFont('Arial','B',10);

        $this->pdf->Cell(0.8,0.8,'NO','LTR',0,'C',0); 
        $this->pdf->Cell(6,0.8,'Perangkat/OPD','LTR',0,'C',0);
        $this->pdf->Cell(2,0.8,'Cluster','LTR',0,'C',0);
        $this->pdf->Cell(4,0.8,'Jenis Konverter','LTR',0,'C',0);
        $this->pdf->Cell(5,0.8,'IP Adress','LTR',0,'C',0);
        $this->pdf->SetFont('Arial','',10);

        // $report = $this->db->get_where('data', array('id_kecamatan' => 4))->result();
       $report = $this->db->query("SELECT `data` .*, `opd`.* FROM `data` JOIN `opd` ON `data`. `opd` = `opd`.`id` WHERE `data`. `id_kecamatan` = '4' ")->result();
        // $report = $this->db->get('data')->result();
        foreach ($report as $row){
            $this->pdf->ln();
            $this->pdf->Cell(0.8,0.8, $row->id,'LTR',0,'C',0);   
            $this->pdf->Cell(6,0.8, $row->opd,'LTR',0,'L',0);   
            $this->pdf->Cell(2,0.8, $row->cluster,'LTR',0,'C',0);   
            $this->pdf->Cell(4,0.8, $row->jenis_konverter,'LTR',0,'C',0);   
            $this->pdf->Cell(5,0.8, $row->ip,'LTR',0,'C',0);   
        }
        $this->pdf->Output();
    }

    public function cetakpdf2(){
        $pdf = new FPDF('l','mm','letter');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // Insert a logo in the top-left corner at 300 dpi
        $pdf->Image('assets/img/1.png',5,5,-300);
        // mencetak string 
        $pdf->Cell(155,0,'Report Persebaran Kabel FO Kota Pekalongan',0,1,'C');
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(107,13,'Dinas Kominfo Kota Pekalongan',0,1,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(185,0,'Jl. Majapahit No.5, Podosugih, Kec. Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51111',0,0,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,12,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'NO',1,0);
        $pdf->Cell(70,6,'PERANGKAT/OPD',1,0);
        $pdf->Cell(25,6,'Cluster',1,0);
        $pdf->Cell(30,6,'Jenis Konverter',1,1);
        $pdf->Cell(40,6,'Jenis Konverter',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('data')->result();
        foreach ($mahasiswa as $row){
            $this->pdf->Ln();
            $pdf->Cell(10,6,1,1,0);
            $pdf->Cell(70,6,$row->opd,1,0);
            $pdf->Cell(25,6,$row->cluster,1,0);
            $pdf->Cell(30,6,$row->jenis_konverter,1,0);
            $pdf->Cell(30,6,$row->jenis_konverter,1,0);
        }
        $pdf->Output();
    }

      public function mpdfall()    
    {
        $mpdf['mpdfall']    = $this->Report_model->mpdfall();
        $html['mpdfall']    = $this->Report_model->mpdfall();
        $html = $this->load->view('report/mpdfall',[],true);
        $mpdf = new \Mpdf\Mpdf(['format' => 'legal']);
        $mpdf->AddPage('L'); // Adds a new page in Landscape orientation
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser

    }

}
