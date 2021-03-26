<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class home extends CI_Controller {
    
        
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
        //$this->admin_model->index();
           $data['title'] = 'Money Manager | Dashboard Admin';
           $data['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
           $this->load->view('template/admin/header_admin',$data);
           $this->load->view('template/admin/sidebar_admin');
           $this->load->view('admin/home/index', $data);
           $this->load->view('template/admin/footer_admin');  
        }

        public function logout(){
            $this->session->sess_destroy();
            redirect('login', 'refresh');
        }
    }
        /* End of fils admin.php */
?>