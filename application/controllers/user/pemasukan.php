<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class pemasukan extends CI_Controller {
    
        public function _construct()
        {
            //digunakan untuk menjalankan fungsi construct pada class parrent_controller;
            parent::_construct();
            $this->load->model('user/pemasukan_model');
            $this->load->model('admin/user_model');
            $this->load->library('form_validation');

            if($this->session->userdata('level') != "user"){
                redirect('login', 'refresh');
            }
        }
        
        public function index()
        {
            $this->load->model('user/pemasukan_model');
            $this->load->model('admin/user_model');
            //modul untuk load database
            //$this->load->database();
            $data ['title']     = 'Money Manager | Pemasukan';
            $data ['pemasukan']    = $this->pemasukan_model->getpemasukanUserByID($this->session->userdata('id_user'));
            $data ['user']      = $this->user_model->getUser($this->session->userdata('id_user')); 
            $data ['pemasukan2']       = $this->pemasukan_model->NilaiTerbesar($this->session->userdata('id_user'));
            $data ['pemasukan3']       = $this->pemasukan_model->NilaiTerkecil($this->session->userdata('id_user'));
            $data ['pemasukan4']       = $this->pemasukan_model->NilaiRataRata($this->session->userdata('id_user'));
            //$data ['pemasukan5']       = $this->pemasukan_model->jumlah($this->session->userdata('id_user'));
            $data ['pemasukan6']       = $this->pemasukan_model->NilaiSum($this->session->userdata('id_user'));
            $data ['pemasukan7']       = $this->pemasukan_model->FieldCountKeterangan($this->session->userdata('id_user'));
            
            $this->load->view('template/user/header', $data);
            $this->load->view('user/pemasukan/index', $data);
            $this->load->view('template/user/footer');
            $this->load->view('template/user/footer_user',$data);
        }

        public function tambah(){
            $this->load->library('form_validation');
            $this->load->model('user/pemasukan_model');
            $this->load->model('admin/user_model');
            $data ['title']     = 'Form Menambahkan Data Pemasukan';
            $data ['pemasukan']    = $this->pemasukan_model->getpemasukanUserByID($this->session->userdata('id_user'));
            $data ['user']              = $this->user_model->getUser($this->session->userdata('id_user')); 
            $data ['user1']             = $this->user_model->tampilUser();
            $this->form_validation->set_rules('tgl_pemasukan', 'tgl_pemasukan', 'required');
            $this->form_validation->set_rules('nominal', 'nominal', 'required');
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/user/header', $data);
                $this->load->view('user/pemasukan/tambah', $data);
                $this->load->view('template/user/footer');
            }
            else{
                $this->load->model('user/pemasukan_model');
                $this->pemasukan_model->tambahdatapemasukan();
                $this->session->set_flashdata('pesan', 'Data Berhasil di tambah');
                redirect('user/pemasukan','refresh');
                
            }
        }

        public function hapus($id){
            $this->load->library('session');
            $this->load->model('user/pemasukan_model');
            $this->pemasukan_model->hapusdatapemasukan($id);
            $this->session->set_flashdata('pesan2','Data berhasil di hapus');
            redirect('user/pemasukan','refresh');
        }

        public function edit($id){
            $this->load->library('form_validation');
            $this->load->model('user/pemasukan_model');
            $this->load->model('admin/user_model');
            $data ['title']     = 'Form Edit Data Pemasukan';
            $data ['pemasukan']    = $this->pemasukan_model->getpemasukanByID($id);
            $data ['user']              = $this->user_model->getUser($this->session->userdata('id_user')); 
            $data ['user1']             = $this->user_model->tampilUser();
            $this->form_validation->set_rules('tgl_pemasukan', 'tgl_pemasukan', 'required');
            $this->form_validation->set_rules('nominal', 'nominal', 'required');
            $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/user/header', $data);
                $this->load->view('user/pemasukan/edit', $data);
                $this->load->view('template/user/footer');
            }
            else{
                $this->load->model('user/pemasukan_model');
                $this->load->library('session');
                $this->pemasukan_model->ubahdatapemasukan();
                $this->session->set_flashdata('pesan3','Data Berhasil di edit');
                redirect('user/pemasukan','refresh');
                
            }
        }
}
    
    /* End of file pemasukan.php */
?>