<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class hutang extends CI_Controller {
    
        public function _construct()
        {
            //digunakan untuk menjalankan fungsi construct pada class parrent_controller;
            parent::__construct();
            $this->load->model('user/hutang_model');
            $this->load->model('admin/user_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level') != "user"){
                redirect('login', 'refresh');
            }
        }
        
        public function index()
        {
            $this->load->model('user/hutang_model');
            $this->load->model('admin/user_model');
            //modul untuk load database
            //$this->load->database();
            $data ['title']     = 'Money Manager | Hutang';
            $data ['hutang']    = $this->hutang_model->getHutangUserByID($this->session->userdata('id_user'));
            $data ['user']      = $this->user_model->getUser($this->session->userdata('id_user')); 
            $data ['hutang2']       = $this->hutang_model->NilaiTerbesar($this->session->userdata('id_user'));
            $data ['hutang3']       = $this->hutang_model->NilaiTerkecil($this->session->userdata('id_user'));
            $data ['hutang4']       = $this->hutang_model->NilaiRataRata($this->session->userdata('id_user'));
            //$data ['hutang5']       = $this->hutang_model->jumlah($this->session->userdata('id_user'));
            $data ['hutang6']       = $this->hutang_model->NilaiSum($this->session->userdata('id_user'));
            $data ['hutang7']       = $this->hutang_model->FieldCountKeterangan($this->session->userdata('id_user'));
            
            $this->load->view('template/user/header', $data);
            $this->load->view('user/hutang/index', $data);
            $this->load->view('template/user/footer');
            $this->load->view('template/user/footer_user',$data);
        }

        public function tambah(){
            $this->load->library('form_validation');
            $this->load->model('user/hutang_model');
            $this->load->model('admin/user_model');
            $data ['title']     = 'Form Menambahkan Data Hutang';
            $data ['hutang']    = $this->hutang_model->getHutangUserByID($this->session->userdata('id_user'));
            $data ['user']              = $this->user_model->getUser($this->session->userdata('id_user')); 
            $data ['user1']             = $this->user_model->tampilUser();
            $this->form_validation->set_rules('tgl_hutang', 'tgl_hutang', 'required');
            $this->form_validation->set_rules('nominal', 'nominal', 'required');
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/user/header', $data);
                $this->load->view('user/hutang/tambah', $data);
                $this->load->view('template/user/footer');
            }
            else{
                $this->load->model('user/hutang_model');
                $this->hutang_model->tambahdatahutang();
                $this->session->set_flashdata('pesan', 'Data Berhasil di tambah');
                redirect('user/hutang','refresh');
                
            }
        }

        public function hapus($id){
            $this->load->library('session');
            $this->load->model('user/hutang_model');
            $this->hutang_model->hapusdatahutang($id);
            $this->session->set_flashdata('pesan2','Data berhasil di hapus');
            redirect('user/hutang','refresh');
        }

        public function edit($id){
            $this->load->library('form_validation');
            $this->load->model('user/hutang_model');
            $this->load->model('admin/user_model');
            $data ['title']     = 'Form Edit Data Hutang';
            $data ['hutang']    = $this->hutang_model->getHutangByID($id);
            $data ['user']              = $this->user_model->getUser($this->session->userdata('id_user')); 
            $data ['user1']             = $this->user_model->tampilUser();
            $this->form_validation->set_rules('tgl_hutang', 'tgl_hutang', 'required');
            $this->form_validation->set_rules('nominal', 'nominal', 'required');
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/user/header', $data);
                $this->load->view('user/hutang/edit', $data);
                $this->load->view('template/user/footer');
            }
            else{
                $this->load->model('user/hutang_model');
                $this->load->library('session');
                $this->hutang_model->ubahdatahutang();
                $this->session->set_flashdata('pesan3','Data Berhasil di edit');
                redirect('user/hutang','refresh');
            }
        }
    
    }
    
    /* End of file Controllername.php */