<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{
    public function tampilUser()
    {
        return $this->db->get('user')->result();
    }

    public function getUser($id_user)
    {
        return $this->db->get_where('user', ['id_user' => $id_user])->result();
    }

    public function tampilUserSaja()
    {
        $usersaja = 'user';
        $query = $this->db->order_by('id_user', 'DESC')->get_where('user', array('level' => $usersaja));
        return $query->result();
    }

    /*public function tambahDataUser($upload){
      $data=[
              
              'id_user'=>$this->input->post('user', true),
              'nama'=>$this->input->post('nama', true),
              'tgl_lahir'=>$this->input->post('tgl_lahir', true),
              'jenis_kelamin'=>$this->input->post('jenis_kelamin', true),
              'email'=>$this->input->post('email', true),
              'no_telp'=>$this->input->post('no_telp', true),
              'foto_profil'=>$upload['file']['file_name'],
              'foto_ktp'=>$upload['file']['file_name'],
              'status'=>$this->input->post('status', true),
              'username'=>$this->input->post('username', true),
              'password'=>$this->input->post('password', true),			
          ];
        $this->db->insert('user', $data);
      }
  
      public function upload(){    
          $config['upload_path'] = './asset/upload/user';    
          $config['allowed_types'] = 'jpg|png|jpeg';
          $this->load->library('upload', $config);
          if($this->upload->do_upload('foto_profil && foto_ktp')){
              $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
              return $return;
          }else{    
              $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      
              return $return;   
          }  
      }

      /*public function upload_ktp(){    
        $config['upload_path'] = './asset/upload/user';    
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('foto_ktp')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }*/
}