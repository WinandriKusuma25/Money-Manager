<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class profile extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/user_model');
            $this->load->helper('url');
            if ($this->session->userdata('level')!= "admin") {
                redirect('login', 'refresh');
            }  
        }
        
        public function index()
        {
           $data['title'] = 'Money Manager | Profile Admin';
           $data['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
           $this->load->view('template/admin/header_admin',$data);
           $this->load->view('template/admin/sidebar_admin');
           $this->load->view('admin/profile/index', $data);
           $this->load->view('template/admin/footer_admin');  
        }

        public function edit(){
            $data ['title'] = 'Money Manager | Edit Profile Admin';
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

            $config['upload_path']          = './asset/upload/admin';
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
                        redirect('admin/profile/index','refresh');
                    }  
                }else{
                    $data ['title'] = 'Money Manager | Edit Profile Admin';
                    $this->load->view('template/admin/header_admin',$data);
                    $this->load->view('template/admin/sidebar_admin');
                    $this->load->view('admin/profile/edit', $data);
                    $this->load->view('template/admin/footer_admin'); 
                }
            }
            else{
                $data ['title'] = 'Money Manager | Edit Profile Admin';
                $this->load->view('template/admin/header_admin',$data);
                $this->load->view('template/admin/sidebar_admin');
                $this->load->view('admin/profile/edit', $data);
                $this->load->view('template/admin/footer_admin'); 
            }
        }

        public function logout(){
            $this->session->sess_destroy();
            redirect('login', 'refresh');
        }
    }
        /* End of fils admin.php */
?>