<?php
defined('BASEPATH') OR exit('No direct scipt access allowes');
/**
 * 
 */
class berita extends CI_Controller
{
	public function __construct(){
		parent::__construct();
        $this->load->model('admin/user_model');
        $this->load->model('admin/berita_model');
        $this->load->helper('text');

        if($this->session->userdata('level') != "user"){
            redirect('login', 'refresh');
        }
	}

	public function index(){
        $data['title'] = 'Money Manager | Artikel Berita ';
        $data['berita'] = $this->berita_model->tampilBerita(); 
		$data['user']      = $this->user_model->getUser($this->session->userdata('id_user')); 
		$this->load->view('template/user/header', $data);
        $this->load->view('user/berita/index', $data);
        $this->load->view('template/user/footer', $data); 
    }
    
    public function detail($id_berita){
        $data['title']='Detail Artikel Berita';
        $data['berita']=$this->berita_model->tampilBeritaOne($id_berita);
        $data['user'] = $this->user_model->getUser($this->session->userdata('id_user'));
        $this->load->view('template/user/header', $data);
        $this->load->view('user/berita/detail', $data);
        $this->load->view('template/user/footer', $data);   
    }
        
          
}
?>