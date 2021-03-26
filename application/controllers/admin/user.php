<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/user_model');

        if ($this->session->userdata('level') != "admin") {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['user'] = $this->user_model->tampilUserSaja();
        $data['title'] = 'Money Manager | Data User';
        $data2['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
        $this->load->view('template/admin/header_admin', $data);
        $this->load->view('template/admin/sidebar_admin', $data2);
        $this->load->view('admin/user/index', $data);
        $this->load->view('template/admin/footer_admin');
    }

    public function detail($id_user)
    {
        $data['title'] = 'Money Manager | Detail User';
        $data['user'] = $this->user_model->getUser($id_user);
        $data2['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
        $this->load->view('template/admin/header_admin', $data);
        $this->load->view('template/admin/sidebar_admin', $data2);
        $this->load->view('admin/user/detail', $data);
        $this->load->view('template/admin/footer_admin');
    }

    public function tambah()
    {
        $data['title'] = 'Money Manager | Tambah User';
        $data4['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
        $this->load->view('template/admin/header_admin', $data);
        $this->load->view('template/admin/sidebar_admin', $data4);
        $this->load->view('admin/user/tambah', $data);
        $this->load->view('template/admin/footer_admin');

        if (isset($_POST['submit'])) {
            $this->load->library('form_validation');
            $data['user'] = $this->user_model->tampilUser();
            $this->form_validation->set_rules(
                'nama',
                'nama',
                'required',
                array('required' => '*Nama berita harus di isi !')
            );
            $config['upload_path']          = './asset/upload/user';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);

            //file 1
            if (!empty($_FILES['foto_profil'])) {
                $this->upload->do_upload('foto_profil');
                $data1 = $this->upload->data();
                $foto_profil = $data1['file_name'];

                //file 2
                if (!empty($_FILES['foto_ktp'])) {
                    $this->upload->do_upload('foto_ktp');
                    $data2 = $this->upload->data();
                    $foto_ktp = $data2['file_name'];
                }

                if ($this->form_validation->run()) {
                    $data = [
                        'id_user' => $this->input->post('user', true),
                        'nama' => $this->input->post('nama', true),
                        'email' => $this->input->post('email', true),
                        'no_telp' => $this->input->post('no_telp', true),
                        'foto_profil' => $foto_profil,
                        'foto_ktp' => $foto_ktp,
                        'status' => $this->input->post('status', true),
                        'level' => $this->input->post('level', true),
                        'username' => $this->input->post('username', true),
                        'password' => $this->input->post('password', true),
                    ];
                    $insert =  $this->db->insert('user', $data);
                    if ($insert) {
                        $this->session->set_flashdata('pesan', 'Data Berhasil Di tambah');
                        redirect('admin/user', 'refresh');
                    }
                } else {
                    $this->load->view('template/admin/header_admin', $data);
                    $this->load->view('template/admin/sidebar_admin');
                    $this->load->view('admin/user/tambah', $data);
                    $this->load->view('template/admin/footer_admin');
                }
            } else {
                $this->load->view('template/admin/header_admin', $data);
                $this->load->view('template/admin/sidebar_admin');
                $this->load->view('admin/user/tambah', $data);
                $this->load->view('template/admin/footer_admin');
            }
        }
    }

    public function detail_aktif($id_user)
    {
        $data['title'] = 'Money Manager | Detail User';
        $data['user'] = $this->user_model->getUser($id_user);
        $data2['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
        $this->load->view('template/admin/header_admin', $data);
        $this->load->view('template/admin/sidebar_admin', $data2);
        $this->load->view('admin/user/detail_aktif', $data);
        $this->load->view('template/admin/footer_admin');
    }
}
    
    /*public function tambah(){
        $data ['title'] = 'Money Manager | Tambah User';
        $data ['user'] = $this->user_model->tampilUser();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required',  
        array('required' => '*Nama berita harus di isi !'));
        $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required',  
        array('required' => '*Tanggal lahir harus di isi!'));
        //$this->form_validation->set_rules('foto_berita', 'foto_berita', 'required',  
        //array('required' => '*Foto berita harus di isi!'));
        $this->form_validation->set_rules('status', 'status', 'required',  
        array('required' => '*Status berita harus di isi!'));
        
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('template/admin/header_admin',$data);
            $this->load->view('template/admin/sidebar_admin');
            $this->load->view('admin/user/tambah', $data);
            $this->load->view('template/admin/footer_admin');
            
        }
        else{
            $upload = $this->user_model->upload();
                if ($upload['result'] == 'success') {
                    $this->user_model->tambahDataUser($upload);
                    $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
            redirect('admin/user','refresh');
        }else{
            echo $upload['error'];
        }
    }
}*/