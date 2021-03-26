<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class pengeluaran extends CI_Controller {
    
        public function _construct()
        {
            //digunakan untuk menjalankan fungsi construct pada class parrent_controller;
            parent::_construct();
            $this->load->model('user/pengeluaran_model');
            $this->load->model('admin/user_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level') != "user"){
                redirect('login', 'refresh');
            }
        }
        
        public function index()
        {
            $this->load->model('user/pengeluaran_model');
            $this->load->model('admin/user_model');
            //modul untuk load database
            //$this->load->database();
            $data ['title']     = 'Money Manager | Pengeluaran';
            $data ['pengeluaran']    = $this->pengeluaran_model->getpengeluaranUserByID($this->session->userdata('id_user'));
            $data ['user']      = $this->user_model->getUser($this->session->userdata('id_user')); 
            $data ['pengeluaran2']       = $this->pengeluaran_model->NilaiTerbesar($this->session->userdata('id_user'));
            $data ['pengeluaran3']       = $this->pengeluaran_model->NilaiTerkecil($this->session->userdata('id_user'));
            $data ['pengeluaran4']       = $this->pengeluaran_model->NilaiRataRata($this->session->userdata('id_user'));
            //$data ['pengeluaran5']       = $this->pengeluaran_model->jumlah($this->session->userdata('id_user'));
            $data ['pengeluaran6']       = $this->pengeluaran_model->NilaiSum($this->session->userdata('id_user'));
            $data ['pengeluaran7']       = $this->pengeluaran_model->FieldCountKeterangan($this->session->userdata('id_user'));
            
            $this->load->view('template/user/header', $data);
            $this->load->view('user/pengeluaran/index', $data);
            $this->load->view('template/user/footer');
            $this->load->view('template/user/footer_user',$data);
        }

        public function tambah(){
            $this->load->library('form_validation');
            $this->load->model('user/pengeluaran_model');
            $this->load->model('admin/user_model');
            $data ['title']             = 'Form Menambahkan Data Pengeluaran';
            $data ['pengeluaran']       = $this->pengeluaran_model->getpengeluaranUserByID($this->session->userdata('id_user'));
            $data ['user']              = $this->user_model->getUser($this->session->userdata('id_user')); 
            $data ['user1']             = $this->user_model->tampilUser();
            $this->form_validation->set_rules('tgl_pengeluaran', 'tgl_pengeluaran', 'required');
            $this->form_validation->set_rules('nominal', 'nominal', 'required');
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/user/header', $data);
                $this->load->view('user/pengeluaran/tambah', $data);
                $this->load->view('template/user/footer');
            }
            else{
                $this->load->model('user/pengeluaran_model');
                $this->pengeluaran_model->tambahdatapengeluaran();
                $this->session->set_flashdata('pesan', 'Data Berhasil di tambah');
                redirect('user/pengeluaran','refresh');
                
            }
        }

        public function hapus($id){
            $this->load->library('session');
            $this->load->model('user/pengeluaran_model');
            $this->pengeluaran_model->hapusdatapengeluaran($id);
            $this->session->set_flashdata('pesan2','Data berhasil di hapus');
            redirect('user/pengeluaran','refresh');
        }

        public function edit($id){
            $this->load->library('form_validation');
            $this->load->model('user/pengeluaran_model');
            $this->load->model('admin/user_model');
            $data ['title']     = 'Form Edit Data Pengeluaran';
            $data ['pengeluaran']    = $this->pengeluaran_model->getpengeluaranByID($id);
            $data ['user']              = $this->user_model->getUser($this->session->userdata('id_user')); 
            $data ['user1']             = $this->user_model->tampilUser();
            $this->form_validation->set_rules('tgl_pengeluaran', 'tgl_pengeluaran', 'required');
            $this->form_validation->set_rules('nominal', 'nominal', 'required');
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/user/header', $data);
                $this->load->view('user/pengeluaran/edit', $data);
                $this->load->view('template/user/footer');
            }
            else{
                $this->load->model('user/pengeluaran_model');
                $this->load->library('session');
                $this->pengeluaran_model->ubahdatapengeluaran();
                $this->session->set_flashdata('pesan3','Data Berhasil di edit');
                redirect('user/pengeluaran','refresh');
                
            }
        }
}
    
    /* End of file pengeluaran.php */
?>