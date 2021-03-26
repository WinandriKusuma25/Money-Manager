<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class berita_model extends CI_Model {
    public function tampilBerita()
    {
        return $this->db->get('berita')->result();
    }

    public function getBerita($id_berita){
		return $this->db->get_where('berita',['id_berita'=>$id_berita])->row();
    }

    public function tampilBeritaOne($id_berita)
    {
        $this->db->select('berita.*');
        $this->db->where('id_berita', $id_berita);
        return $this->db->get('berita')->result();
    }
    
    public function tambahDataBerita($upload){
		$data=[
            
            'id_berita'=>$this->input->post('berita', true),
            'judul'=>$this->input->post('judul', true),
            'tgl_berita'=>$this->input->post('tgl_berita', true),
            'foto_berita'=>$upload['file']['file_name'],
            'deskripsi'=>$this->input->post('deskripsi', true),			
        ];
	    $this->db->insert('berita', $data);
    }

    public function upload(){    
        $config['upload_path'] = './asset/upload/berita';    
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('foto_berita')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }

    public function hapusDataBerita($id_berita)
	{
        $this->_deleteImage($id_berita);
		$this->db->where('id_berita', $id_berita);
		$this->db->delete('berita');
    }

    private function _deleteImage($id_berita)
    {
        $berita = $this->getBerita($id_berita);
        $filename = $berita->foto_berita;
        unlink(FCPATH."asset/upload/berita/".$filename);
    }

    public function ubahDataBerita($id_berita, $upload){
        $data=
        array(
            'id_berita'     =>$this->input->post('id_berita', true),
            'judul'         =>$this->input->post('judul', true),
            'tgl_berita'    =>$this->input->post('tgl_berita', true),
            'foto_berita'   =>$upload['file']['file_name'],
            'deskripsi'     =>$this->input->post('deskripsi', true),
            );
        $this->_deleteImage($id_berita);
        $this->db->where('id_berita', $id_berita);	
        $this->db->update('berita', $data);
      
    }


}