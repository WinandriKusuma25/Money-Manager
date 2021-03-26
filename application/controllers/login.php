<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    
    //method untuk memnaggil helper dan model
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');        
    }

    //method memanggil views
    public function index()
    {
        $data2['title'] = 'Login';
        $this->load->view('login/index',$data2);
    }

    //method proses untuk login
    public function proses_login(){

        $this->load->model("login_model");
        
        //untuk menggunakaan Recaptha
		$form_response = $this->input->post('g-recaptcha-response');
		$url = "https://www.google.com/recaptcha/api/siteverify";
		$secretkey = "6LcMctIZAAAAADtuXb8MoNM-K9qr515p9swAdIKL";
		$response = file_get_contents($url."?secret=".$secretkey."&response=".$form_response."&remoteip=".$_SERVER["REMOTE_ADDR"]);
		$data = json_decode($response);
		print_r($data);

        //untuk post username dan password
		$username=htmlspecialchars($this->input->post('username'));
        $password=htmlspecialchars($this->input->post('password'));
        
        //untuk chek login
		$ceklogin=$this->login_model->login($username, $password);
		if(isset($data->success) && $data->success=="true"){
			if ($ceklogin != false) {
				foreach ($ceklogin as $row) {
				$this->load->library('session');
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('id_user', $row->id_user );
				$this->session->set_userdata('level', $row->level);
				$this->session->set_userdata('nama', $row->nama );
				$this->session->set_userdata('foto_profil', $row->profil );
				}	
				if($this->session->userdata('level')=='admin'){
				redirect('admin/home/index');
				}
				else if($this->session->userdata('level')=='user'){
				redirect('user/home/index');
				}
			}
			else{
				$data2['title'] = 'Login';
				$this->load->view('login/index');
				$this->session->set_flashdata('pesan','Username dan Password Anda salah');
				redirect('login');
			}		
		}
		else{
			$data2['title'] = 'Login';
			$this->load->view('login/index');
			$this->session->set_flashdata('errorRecaptcha', 'ReCAPTCHA not solved/an error occured'.$status);
			redirect('login');
		}
	}
    
    public function logout(){
		$this->session->sess_destroy();
		redirect('login', 'refresh');
	}


}
/* End of file Controllername.php */