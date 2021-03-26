<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class berita extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/berita_model');
        $this->load->model('admin/user_model');
        if($this->session->userdata('level') != "admin"){
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['berita'] = $this->berita_model->tampilBerita(); 
        $data['title'] = 'Money Manager | Data Berita';
        $data['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
        $this->load->view('template/admin/header_admin',$data);
        $this->load->view('template/admin/sidebar_admin');
        $this->load->view('admin/berita/index', $data);
        $this->load->view('template/admin/footer_admin');
    }

    public function detail($id_berita){
            $data['title']='Money Manager | Detail Berita';
            $data['berita']=$this->berita_model->tampilBeritaOne($id_berita);
            $data['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
            $this->load->view('template/admin/header_admin',$data);
            $this->load->view('template/admin/sidebar_admin', $data);
            $this->load->view('admin/berita/detail', $data);
            $this->load->view('template/admin/footer_admin',$data);   
    }

    public function tambah(){
        $data ['title'] = 'Money Manager | Tambah Berita';
        $data['berita'] = $this->berita_model->tampilBerita();
        $data['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'judul', 'required',  
        array('required' => '*Judul berita harus di isi !'));
        $this->form_validation->set_rules('tgl_berita', 'tgl_berita', 'required',  
        array('required' => '*Tanggal berita harus di isi!'));
        //$this->form_validation->set_rules('foto_berita', 'foto_berita', 'required',  
        //array('required' => '*Foto berita harus di isi!'));
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required',  
        array('required' => '*Deskripsi berita harus di isi!'));
        
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('template/admin/header_admin',$data);
            $this->load->view('template/admin/sidebar_admin');
            $this->load->view('admin/berita/tambah', $data);
            $this->load->view('template/admin/footer_admin');
            
        }
        else{
            $upload = $this->berita_model->upload();
                if ($upload['result'] == 'success') {
                    $this->berita_model->tambahDataBerita($upload);
                    $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
            redirect('admin/berita','refresh');
        }else{
            echo $upload['error'];
        }
    }
}

    public function hapus($id_berita)
    {
        $this->berita_model->hapusDataBerita($id_berita);
        $this->load->library('session');
        $this->session->set_flashdata('flashdata', 'dihapus');
        $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
        redirect('admin/berita','refresh');
    }

    public function edit($id_berita){
        $data ['title'] = 'Money Manager | Edit Berita';
        $this->load->library('form_validation');
        $data ['berita'] = $this->berita_model->tampilBeritaOne($id_berita);
        $data ['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
        $this->form_validation->set_rules('id_berita', 'id_berita', 'required|numeric');
        $this->form_validation->set_rules('judul', 'judul', 'required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('template/admin/header_admin',$data);
            $this->load->view('template/admin/sidebar_admin');
            $this->load->view('admin/berita/edit', $data);
            $this->load->view('template/admin/footer_admin');
        }
        else{
                $upload = $this->berita_model->upload();
                    if ($upload['result'] == 'success') {
                        $this->berita_model->ubahDataBerita($id_berita, $upload);
                        $this->session->set_flashdata('pesan3','Data Berhasil Di edit');
                        $this->load->library('session');
                redirect('admin/berita','refresh');
            }else{
                echo $upload['error'];
            }	
        }	
    }
    	
}

?>    