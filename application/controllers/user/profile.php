<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class profile extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('admin/user_model');
            if ($this->session->userdata('level')!= "user") {
                redirect('login', 'refresh');
            }
        }
        
        public function index()
        {
           $data['title'] = 'Money Manager | Profile User';
           $data['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
           
            $this->load->view('template/user/header', $data);
            $this->load->view('user/profile/index', $data);
            $this->load->view('template/user/footer');
            $this->load->view('template/user/footer_user',$data);
        }

        public function edit(){
            $data ['title'] = 'Edit Profile User';
            $this->load->library('form_validation');
            $data ['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
            $this->form_validation->set_rules('nama', 'nama', 'required|trim',  
            array('required' => 'Nama harus di isi !'));

            $this->form_validation->set_rules('no_telp', 'no_telp', 'required|trim',  
            array('required' => 'No Telp harus di isi !'
            ));
            
            $this->form_validation->set_rules('password', 'password','required|trim|min_length[3]',
            array('required' => 'password harus di isi !',
                  'min_length' => 'password terlalu pendek !'
            ));

            $config['upload_path']          = './asset/upload/user';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 3048;
            $this->load->library('upload', $config);
             
            //file 1
            if(!empty($_FILES['foto_profil'])){
                $this->upload->do_upload('foto_profil');
                $data1 = $this->upload->data();
                $foto_profil = $data1['file_name'];
            
            
                if($this->form_validation->run()){
                    $data=[     
                    'nama'=>$this->input->post('nama', true),
                    'no_telp'=>$this->input->post('no_telp', true),
                    'foto_profil'=> $foto_profil,
                    'password'=> $this->input->post('password', true),	
                    ];
                    $insert = $this->db->where('id_user', $this->input->post('id_user'));
                    $insert = $this->db->update('user', $data);
                    if($insert){
                        $this->session->set_flashdata('pesan','<center>Selamat Data Anda Berhasil Diedit!</center>');
                        redirect('user/profile/index','refresh');
                    }  
                }else{
                    $data ['title'] = 'Edit Profile User';
                    $this->load->view('template/user/header', $data);
                    $this->load->view('user/profile/edit', $data);
                    $this->load->view('template/user/footer');
                }
            }
            else{
                $data ['title'] = 'Edit Profile User';
                $this->load->view('template/user/header', $data);
                $this->load->view('user/profile/edit', $data);
                $this->load->view('template/user/footer');
            }
        }
    

        public function logout(){
            $this->session->sess_destroy();
            redirect('login', 'refresh');
        }
    }
        /* End of fils user.php */
?>