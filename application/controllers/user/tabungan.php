<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class tabungan extends CI_Controller {
    
        public function _construct()
        {
            //digunakan untuk menjalankan fungsi construct pada class parrent_controller;
            parent::_construct();
            $this->load->model('user/tabungan_model');
            $this->load->model('admin/user_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level') != "user"){
                redirect('login', 'refresh');
            }
        }
        
        public function index()
        {
            $this->load->model('user/tabungan_model');
            $this->load->model('admin/user_model');
            //modul untuk load database
            //$this->load->database();
            $data ['title']     = 'Money Manager | Tabungan';
            $data ['tabungan']    = $this->tabungan_model->gettabunganUserByID($this->session->userdata('id_user'));
            $data ['user']      = $this->user_model->getUser($this->session->userdata('id_user')); 
            $data ['tabungan2']       = $this->tabungan_model->NilaiTerbesar($this->session->userdata('id_user'));
            $data ['tabungan3']       = $this->tabungan_model->NilaiTerkecil($this->session->userdata('id_user'));
            $data ['tabungan4']       = $this->tabungan_model->NilaiRataRata($this->session->userdata('id_user'));
            //$data ['tabungan5']       = $this->tabungan_model->jumlah($this->session->userdata('id_user'));
            $data ['tabungan6']       = $this->tabungan_model->NilaiSum($this->session->userdata('id_user'));
            $data ['tabungan7']       = $this->tabungan_model->FieldCountKeterangan($this->session->userdata('id_user'));
            
            $this->load->view('template/user/header', $data);
            $this->load->view('user/tabungan/index', $data);
            $this->load->view('template/user/footer');
            $this->load->view('template/user/footer_user',$data);
        }

        public function tambah(){
            $this->load->library('form_validation');
            $this->load->model('user/tabungan_model');
            $this->load->model('admin/user_model');
            $data ['title']     = 'Form Menambahkan Data Tabungan';
            $data ['tabungan']    = $this->tabungan_model->gettabunganUserByID($this->session->userdata('id_user'));
            $data ['user']              = $this->user_model->getUser($this->session->userdata('id_user')); 
            $data ['user1']             = $this->user_model->tampilUser();
            $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
            $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/user/header', $data);
                $this->load->view('user/tabungan/tambah', $data);
                $this->load->view('template/user/footer');
            }
            else{
                $this->load->model('user/tabungan_model');
                $this->tabungan_model->tambahdatatabungan();
                $this->session->set_flashdata('pesan', 'Data Berhasil di tambah');
                redirect('user/tabungan','refresh');
                
            }
        }

        public function hapus($id){
            $this->load->library('session');
            $this->load->model('user/tabungan_model');
            $this->tabungan_model->hapusdatatabungan($id);
            $this->session->set_flashdata('pesan2','Data berhasil di hapus');
            redirect('user/tabungan','refresh');
        }

        public function edit($id){
            $this->load->library('form_validation');
            $this->load->model('user/tabungan_model');
            $this->load->model('admin/user_model');
            $data ['title']     = 'Form Edit Data Tabungan';
            $data ['tabungan']    = $this->tabungan_model->gettabunganByID($id);
            $data ['user']              = $this->user_model->getUser($this->session->userdata('id_user')); 
            $data ['user1']             = $this->user_model->tampilUser();
            $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
            $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/user/header', $data);
                $this->load->view('user/tabungan/edit', $data);
                $this->load->view('template/user/footer');
            }
            else{
                $this->load->model('user/tabungan_model');
                $this->load->library('session');
                $this->tabungan_model->ubahdatatabungan();
                $this->session->set_flashdata('pesan3','Data Berhasil di edit');
                redirect('user/tabungan','refresh');
                
            }
        }
    
}
    
    /* End of file tabungan.php */
?>