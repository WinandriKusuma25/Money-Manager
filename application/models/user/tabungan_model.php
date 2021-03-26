<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class tabungan_model extends CI_Model {

        public function tampiltabungan(){
            $this->db->select('tabungan.*, user.nama');
            $this->db->join('user', 'tabungan.id_user = user.id_user');
            return $this->db->get('tabungan')->result();
        }

        public function gettabunganByID($id){
            return $this->db->get_where('tabungan',['id_tabungan' => $id])->row_array();
        }
    
        public function gettabunganUserByID($id)
        {

            $this->db->select('tabungan.*, user.nama');
            $this->db->join('user', 'tabungan.id_user = user.id_user');
            $this->db->where('tabungan.id_user', $id);
            return $this->db->get('tabungan')->result();
        }

        public function NilaiTerbesar($id_user)
        {
            
            $this->db->select_max('jumlah');
            $this->db->where('tabungan.id_user', $id_user);
            return $this->db->get('tabungan')->result();
        }

        public function NilaiTerkecil($id_user)
        {
            
            $this->db->select_min('jumlah');
            $this->db->where('tabungan.id_user', $id_user);
            return $this->db->get('tabungan')->result();
        }

        public function NilaiRataRata($id_user)
        {
            $this->db->select_avg('jumlah');
            $this->db->where('tabungan.id_user', $id_user);
            return $this->db->get('tabungan')->result();
        }

        public function NilaiSum($id_user)
        {
            $this->db->select_sum('jumlah');
            $this->db->where('tabungan.id_user', $id_user);
            return $this->db->get('tabungan')->result();
        }

        public function FieldCountKeterangan($id_user){
            $query = $this->db->query("SELECT deskripsi FROM tabungan WHERE tabungan.id_user = '$id_user' GROUP BY deskripsi ORDER BY COUNT(deskripsi) DESC LIMIT 1 ");
            return $query->result();
        }

        public function tambahdatatabungan()
        {
            $data=[
                'id_tabungan'   =>$this->input->post('id_tabungan', true),
                'id_user'       =>$this->session->userdata('id_user'),
                'tanggal'       =>$this->input->post('tanggal', true),
                'jumlah'        =>$this->input->post('jumlah', true),
                'deskripsi'     =>$this->input->post('deskripsi', true)
            ];
            $this->db->insert('tabungan',$data);
            $this->db->where('id_user',$this->input->post('username', true));
        }

        public function hapusdatatabungan($id){
            $this->db->where('id_tabungan',$id);
            $this->db->delete('tabungan');
        }

        public function ubahdatatabungan(){
            $data=[
                'tanggal'       =>$this->input->post('tanggal', true),
                'jumlah'        =>$this->input->post('jumlah', true),
                'deskripsi'     =>$this->input->post('deskripsi', true)
            ];
            $this->db->where('id_tabungan', $this->input->post('id_tabungan'));
            $this->db->update('tabungan', $data);
        }
        

    }
    
    /* End of file tabungan_model.php */
?>
    