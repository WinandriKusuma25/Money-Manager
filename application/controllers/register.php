<?php
defined('BASEPATH') or exit('No direct script access allowed');

class register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('admin/user_model');
        $this->load->model('register_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Money Manager | Regitrasi User';
        $this->load->view('register/index', $data);
    }

    public function proses_register()
    {

        if (isset($_POST['submit'])) {
            $this->load->library('form_validation');
            $data['user'] = $this->user_model->tampilUser();

            $this->form_validation->set_rules(
                'nama',
                'nama',
                'required|trim',
                array('required' => 'Nama harus di isi !')
            );

            $this->form_validation->set_rules(
                'email',
                'email',
                'required|trim|valid_email|is_unique[user.email]',
                array(
                    'required' => 'Email harus di isi !',
                    'valid_email' => 'Email harus valid !',
                    'is_unique' => 'Email sudah pernah registrasi !'
                )
            );

            $this->form_validation->set_rules(
                'no_telp',
                'no_telp',
                'required|trim',
                array('required' => 'No Telp harus di isi !')
            );

            /*$this->form_validation->set_rules('foto_profil', 'foto_profil', 'required|trim',  
            array('required' => 'Foto Profil harus di isi, maks file 3 mb !'
            ));

            $this->form_validation->set_rules('foto_ktp', 'foto_ktp', 'required|trim',  
            array('required' => 'Foto KTP harus di isi, maks file 3 mb !'
            )); */

            $this->form_validation->set_rules(
                'username',
                'username',
                'required|trim|min_length[3]|is_unique[user.username]',
                array(
                    'required' => 'Username harus di isi !',
                    'min_length' => 'Username telalu pendek !',
                    'is_unique' => 'Username sudah pernah regsitrasi!'
                )
            );

            $this->form_validation->set_rules(
                'password',
                'password',
                'required|trim|min_length[3]',
                array(
                    'required' => 'password harus di isi !',
                    'min_length' => 'password terlalu pendek !'
                )
            );

            $config['upload_path']          = './asset/upload/user';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 3048;
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
                        'status' => 'pasif',
                        'level' => 'user',
                        'username' => $this->input->post('username', true),
                        'password' => $this->input->post('password', true),
                    ];
                    $insert =  $this->db->insert('user', $data);
                    if ($insert) {
                        $this->session->set_flashdata('pesan', '<center>Selamat Registrasi Berhasil!<br>Tunggu Validasi Admin</center>');
                        redirect('login', 'refresh');
                    }
                } else {
                    $data['title'] = 'Money Manager | Regitrasi User';
                    $this->load->view('register/index', $data);
                }
            } else {
                $data['title'] = 'Money Manager | Regitrasi User';
                $this->load->view('register/index', $data);
            }
        }
    }

    public function tabel_register()
    {
        $this->load->model('register_model');
        $data['title']      = 'Data User';
        $data['Registered'] = $this->register_model->datatabeluserReg();
        $data['Unreg']      = $this->register_model->datatabeluserUnreg();
        // $data['username']   = $this->input->post('username');
        // $data['nama']       = $this->input->post('nama');
        // $data['email']      = $this->input->post('email');
        // $data['foto_ktp']   = $this->input->post('foto_ktp');
        // $data['level']      = $this->input->post('level');
        $data2['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
        $this->load->view('template/admin/header_admin', $data);
        $this->load->view('template/admin/sidebar_admin', $data2);
        $this->load->view('register/tabeluser', $data);
        $this->load->view('template/admin/footer_admin');
    }

    public function tabel_register_aktif()
    {
        $this->load->model('register_model');
        $data['title']      = 'Data User';
        $data['Registered'] = $this->register_model->datatabeluserReg();
        // $data['Unreg']      = $this->register_model->datatabeluserUnreg();
        // $data['username']   = $this->input->post('username');
        // $data['nama']       = $this->input->post('nama');
        // $data['email']      = $this->input->post('email');
        // $data['foto_ktp']   = $this->input->post('foto_ktp');
        // $data['level']      = $this->input->post('level');
        $data2['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
        $this->load->view('template/admin/header_admin', $data);
        $this->load->view('template/admin/sidebar_admin', $data2);
        $this->load->view('register/tabeluseraktif', $data);
        $this->load->view('template/admin/footer_admin');
    }

    public function editStatus()
    {
        $this->load->library('form_validation');
        // $this->load->model('register_model');
        $this->load->library('session');
        $data['title']      = 'Form Registrasi User';
        // $data['username']   = $this->session->userdata('username');
        // $data['nama']       = $this->session->userdata('nama');
        // $data['tgl_lahir']  = $this->session->userdata('tgl_lahir');
        // $data['email']      = $this->session->userdata('email');
        // $data['foto_ktp']   = $this->session->userdata('foto_ktp');
        // $data['level']      = $this->session->userdata('level');
        // $data['Registered'] = $this->register_model->datatabeluserReg();
        // $data['Unreg']      = $this->register_model->datatabeluserUnreg();
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/admin/header_admin', $data);
            $this->load->view('template/admin/sidebar_admin', $data);
            $this->load->view('register/tabeluser', $data);
            $this->load->view('template/admin/footer_admin');
        } else {
            // $this->load->model('register_model');
            $this->session->set_flashdata('pesan', 'User berhasil di Aktifkan ! ');
            $this->register_model->ubahstatus();
            redirect('register/tabel_register_aktif', 'refresh');
        }
    }
}