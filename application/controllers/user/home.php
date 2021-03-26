<?php
defined('BASEPATH') OR exit('No direct scipt access allowes');
/**
 * 
 */
class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/user_model');
		$this->load->model('user/pemasukan_model');
		$this->load->model('user/pengeluaran_model');

        if($this->session->userdata('level') != "user"){
            redirect('login', 'refresh');
        }
	}

	public function index(){
		$data['title'] = 'Money Manager | Dashboard User ';
		$data['user']      = $this->user_model->getUser($this->session->userdata('id_user'));
		$data ['pemasukan7'] = $this->pemasukan_model->pemasukan_hari($this->session->userdata('id_user'));
		$data ['pengeluaran7'] = $this->pengeluaran_model->pengeluaran_hari($this->session->userdata('id_user'));

		$data ['pemasukan8'] = $this->pemasukan_model->pemasukan_bulan($this->session->userdata('id_user'));
		$data ['pengeluaran8'] = $this->pengeluaran_model->pengeluaran_bulan($this->session->userdata('id_user'));

		$data ['pemasukan9'] = $this->pemasukan_model->pemasukan_tahun($this->session->userdata('id_user'));
		$data ['pengeluaran9'] = $this->pengeluaran_model->pengeluaran_tahun($this->session->userdata('id_user'));
		 
		$data ['pemasukan6']       = $this->pemasukan_model->NilaiSum($this->session->userdata('id_user'));
		$data ['pengeluaran6']       = $this->pengeluaran_model->NilaiSum($this->session->userdata('id_user'));
		$this->load->view('template/user/header', $data);
		$this->load->view('user/home/index', $data);
		$this->load->view('template/user/footer', $data); 
	}
        
          
}
?>