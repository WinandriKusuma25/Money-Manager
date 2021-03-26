<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class laporan extends CI_Controller {
    
        public function _construct()
        {
            //digunakan untuk menjalankan fungsi construct pada class parrent_controller;
            parent::_construct();
            $this->load->model('user/pemasukan_model');
            $this->load->model('user/pengeluaran_model');
            $this->load->model('admin/user_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level') != "user"){
                redirect('login', 'refresh');
            }
        }

        public function index(){
            $this->load->model('user/pemasukan_model');
            $this->load->model('user/pengeluaran_model');
            $this->load->model('admin/user_model');
            
            $data['title'] = "Money Manager | Laporan";
            $data['datafilter'] = $this->pemasukan_model->tampilpemasukan();
            $data['datafilter2'] = $this->pengeluaran_model->tampilpengeluaran();
            $data['user'] = $this->user_model->getUser($this->session->userdata('id_user'));

            $this->load->view('template/user/header', $data);
            $this->load->view('user/laporan/index', $data);
            $this->load->view('template/user/footer');
            $this->load->view('template/user/footer_user',$data);
        }

        public function filter_cetak(){
            $this->load->model('user/pemasukan_model');
            $this->load->model('user/pengeluaran_model');
            $this->load->model('admin/user_model');
            $data['title'] = "Filter Cetak Laporan";
            $data['tahun'] = $this->pemasukan_model->gettahun();
            $data['tahun2'] = $this->pengeluaran_model->gettahun();
            $data['user'] = $this->user_model->getUser($this->session->userdata('id_user')); 

            $this->load->view('template/user/header', $data);
            $this->load->view('user/laporan/filter_cetak', $data);
            $this->load->view('template/user/footer');
            
        }

        public function filter(){
            $tanggalawal = $this->input->post('tanggalawal');
            $tanggalakhir = $this->input->post('tanggalakhir');
            $tahun1 = $this->input->post('tahun1');
            $bulanawal = $this->input->post('bulanawal');
            $bulanakhir = $this->input->post('bulanakhir');
            $tahun2 = $this->input->post('tahun2');
            $nilaifilter = $this->input->post('nilaifilter');
    
    
            if ($nilaifilter == 1) {
                $data['title'] = "Laporan Keuangan By Tanggal";

                $this->load->model('user/pemasukan_model');
                $this->load->model('user/pengeluaran_model');
                $data['subtitle'] = "Dari tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
                $data['datafilter'] = $this->pemasukan_model->filterbytanggal($this->session->userdata('id_user'), $tanggalawal,$tanggalakhir);
                $data['datafilter2'] = $this->pengeluaran_model->filterbytanggal($this->session->userdata('id_user'), $tanggalawal,$tanggalakhir);
                $this->load->library('pdf');
                $this->pdf->setPaper('A4', 'potrait');
                $this->pdf->filename = "Laporan keuangan.pdf";
                $this->pdf->load_view('user/laporan/laporan', $data);
    
            }elseif ($nilaifilter == 2) {
                
                $data['title'] = "Laporan Keuangan By Bulan";
                $this->load->model('user/pemasukan_model');
                $this->load->model('user/pengeluaran_model');

                $data['subtitle'] = "Dari bulan : ".$bulanawal.' Sampai bulan : '.$bulanakhir.' Tahun : '.$tahun1;
                $data['datafilter'] = $this->pemasukan_model->filterbybulan($this->session->userdata('id_user'), $tahun1,$bulanawal,$bulanakhir);
                $data['datafilter2'] = $this->pengeluaran_model->filterbybulan($this->session->userdata('id_user'), $tahun1,$bulanawal,$bulanakhir);
                $this->load->library('pdf');
                $this->pdf->setPaper('A4', 'potrait');
                $this->pdf->filename = "Laporan keuangan.pdf";
                $this->pdf->load_view('user/laporan/laporan', $data);
    
            }elseif ($nilaifilter == 3) {
                
                $data['title'] = "Laporan Keuangan By Tahun";
                $this->load->model('user/pemasukan_model');
                $this->load->model('user/pengeluaran_model');
                $data['subtitle'] = ' Tahun : '.$tahun2;
                $data['datafilter'] = $this->pemasukan_model->filterbytahun($this->session->userdata('id_user'), $tahun2);
                $data['datafilter2'] = $this->pengeluaran_model->filterbytahun($this->session->userdata('id_user'), $tahun2);

                $this->load->library('pdf');
                $this->pdf->setPaper('A4', 'potrait');
                $this->pdf->filename = "Laporan keuangan.pdf";
                $this->pdf->load_view('user/laporan/laporan', $data);
    
            }
        }        
    
}
    
?>