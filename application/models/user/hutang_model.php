<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class hutang_model extends CI_Model {

        public function tampilHutang(){
            $this->db->select('hutang.*, user.nama');
            $this->db->join('user', 'hutang.id_user = user.id_user');
            return $this->db->get('hutang')->result();
        }

        public function getHutangByID($id){
            return $this->db->get_where('hutang',['id_hutang' => $id])->row_array();
        }
    
        public function getHutangUserByID($id)
        {

            $this->db->select('hutang.*, user.nama');
            $this->db->join('user', 'hutang.id_user = user.id_user');
            $this->db->where('hutang.id_user', $id);
            return $this->db->get('hutang')->result();
        }

        public function NilaiTerbesar($id_user)
        {
            
            $this->db->select_max('nominal');
            $this->db->where('hutang.id_user', $id_user);
            return $this->db->get('hutang')->result();
        }

        public function NilaiTerkecil($id_user)
        {
            
            $this->db->select_min('nominal');
            $this->db->where('hutang.id_user', $id_user);
            return $this->db->get('hutang')->result();
        }

        public function NilaiRataRata($id_user)
        {
            $this->db->select_avg('nominal');
            $this->db->where('hutang.id_user', $id_user);
            return $this->db->get('hutang')->result();
        }

        public function NilaiSum($id_user)
        {
            $this->db->select_sum('nominal');
            $this->db->where('hutang.id_user', $id_user);
            return $this->db->get('hutang')->result();
        }

        public function FieldCountKeterangan($id_user){
            $query = $this->db->query("SELECT keterangan FROM hutang WHERE hutang.id_user = '$id_user' GROUP BY keterangan ORDER BY COUNT(keterangan) DESC LIMIT 1 ");
            return $query->result();
        }

        public function tambahdatahutang()
        {
            $data=[
                'id_hutang'     =>$this->input->post('id_hutang', true),
                'id_user'       =>$this->session->userdata('id_user'),
                'tgl_hutang'    =>$this->input->post('tgl_hutang', true),
                'nominal'       =>$this->input->post('nominal', true),
                'keterangan'    =>$this->input->post('keterangan', true)
            ];
            $this->db->insert('hutang',$data);
            $this->db->where('id_user',$this->input->post('username', true));
        }

        public function hapusdatahutang($id){
            $this->db->where('id_hutang',$id);
            $this->db->delete('hutang');
        }

        public function ubahdatahutang(){
            $data=[
                'tgl_hutang'    =>$this->input->post('tgl_hutang', true),
                'nominal'       =>$this->input->post('nominal', true),
                'keterangan'    =>$this->input->post('keterangan', true)
            ];
            $this->db->where('id_hutang', $this->input->post('id_hutang'));
            $this->db->update('hutang', $data);
        }

    }
    
    /* End of file hutang_model.php */
?>
    