<?php
defined('BASEPATH') OR exit('No direct scipt access allowes');
/**
 * 
 */
class login_model extends CI_Model
{
	public function login($username, $password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->where('status','aktif');
		$this->db->limit(1);

		$query=$this->db->get();
		if ($query->num_rows()==1) {
			return $query->result();
		}
		else{
			return false;
		}
	}

        /**public function register(){
            $data= [
                "nama" => $this->input->post('nama','true'),
                "tgl_lahir" => $this->input->post('tgl_lahir','true'),
                "jenis_kelamin" => $this->input->post('jenis_kelamin','true'),   
                "email" => $this->input->post('email','true'),
                "no_telp" => $this->input->post('no_telp','true'),
                "foto_profil" => $this->input->post('foto_profil','true'),
                "foto_ktp" => $this->input->post('foto_ktp','true'),
                "username" => $this->input->post('username', 'true'),
                "password" => $this->input->post('password', 'true')
               ];
            
            $this->db->insert('user', $data);   
        }**/
    }
    
    /* End of file login_model.php */