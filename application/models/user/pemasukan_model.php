<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class pemasukan_model extends CI_Model {

        public function tampilpemasukan(){
            $this->db->select('pemasukan.*, user.nama');
            $this->db->join('user', 'pemasukan.id_user = user.id_user');
            return $this->db->get('pemasukan')->result();
        }

        public function getpemasukanByID($id){
            return $this->db->get_where('pemasukan',['id_pemasukan' => $id])->row_array();
        }
    
        public function getpemasukanUserByID($id)
        {

            $this->db->select('pemasukan.*, user.nama');
            $this->db->join('user', 'pemasukan.id_user = user.id_user');
            $this->db->where('pemasukan.id_user', $id);
            return $this->db->get('pemasukan')->result();
        }

        public function NilaiTerbesar($id_user)
        {
            
            $this->db->select_max('nominal');
            $this->db->where('pemasukan.id_user', $id_user);
            return $this->db->get('pemasukan')->result();
        }

        public function NilaiTerkecil($id_user)
        {
            
            $this->db->select_min('nominal');
            $this->db->where('pemasukan.id_user', $id_user);
            return $this->db->get('pemasukan')->result();
        }

        public function NilaiRataRata($id_user)
        {
            $this->db->select_avg('nominal');
            $this->db->where('pemasukan.id_user', $id_user);
            return $this->db->get('pemasukan')->result();
        }

        public function NilaiSum($id_user)
        {
            $this->db->select_sum('nominal');
            $this->db->where('pemasukan.id_user', $id_user);
            return $this->db->get('pemasukan')->result();
        }

        public function FieldCountKeterangan($id_user){
            $query = $this->db->query("SELECT keterangan FROM pemasukan WHERE pemasukan.id_user = '$id_user' GROUP BY keterangan ORDER BY COUNT(keterangan) DESC LIMIT 1 ");
            return $query->result();
        }

        public function tambahdatapemasukan()
        {
            $data=[
                'id_pemasukan'     =>$this->input->post('id_pemasukan', true),
                'id_user'       =>$this->session->userdata('id_user'),
                'tgl_pemasukan'    =>$this->input->post('tgl_pemasukan', true),
                'nominal'       =>$this->input->post('nominal', true),
                'keterangan'    =>$this->input->post('keterangan', true)
            ];
            $this->db->insert('pemasukan',$data);
            $this->db->where('id_user',$this->input->post('username', true));
        }

        public function hapusdatapemasukan($id){
            $this->db->where('id_pemasukan',$id);
            $this->db->delete('pemasukan');
        }

        public function ubahdatapemasukan(){
            $data=[
                'tgl_pemasukan'    =>$this->input->post('tgl_pemasukan', true),
                'nominal'       =>$this->input->post('nominal', true),
                'keterangan'    =>$this->input->post('keterangan', true),
            ];
            $this->db->where('id_pemasukan', $this->input->post('id_pemasukan'));
            $this->db->update('pemasukan', $data);
        }

        public function gettahun(){
            $query = $this->db->query("SELECT YEAR(tgl_pemasukan) AS tahun FROM 
                pemasukan GROUP BY YEAR(tgl_pemasukan) ORDER BY YEAR(tgl_pemasukan)
                ASC");
            return $query->result();
        }

        public function filterbytanggal($id, $tanggalawal, $tanggalakhir){
            $query = $this->db->query("SELECT * FROM pemasukan WHERE id_user = '$id' AND tgl_pemasukan 
                BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tgl_pemasukan ASC");
            return $query->result();
        }

        public function filterbybulan($id, $tahun1, $bulanawal, $bulanakhir){
            $query = $this->db->query("SELECT * FROM pemasukan WHERE id_user = '$id' AND YEAR(tgl_pemasukan) = 
                '$tahun1' AND MONTH(tgl_pemasukan) BETWEEN '$bulanawal' AND '$bulanakhir'
                ORDER BY tgl_pemasukan ASC");

            return $query->result();
        }

        public function filterbytahun($id, $tahun2){
            $query = $this->db->query("SELECT * FROM pemasukan WHERE id_user = '$id' AND YEAR(tgl_pemasukan) = 
                '$tahun2' ORDER BY tgl_pemasukan ASC");

            return $query->result();
        }
        
        public function pemasukan_hari($id){
            $query = $this->db->query("SELECT * FROM pemasukan where id_user = '$id' AND 
                tgl_pemasukan = CURDATE()");

            return $query->result();
        }

        public function pemasukan_bulan($id){
            $query = $this->db->query("SELECT * FROM pemasukan where id_user = '$id' AND 
                MONTH(tgl_pemasukan) = MONTH(NOW())");

            return $query->result();
        }

        public function pemasukan_tahun($id){
            $query = $this->db->query("SELECT * FROM pemasukan where id_user = '$id' AND 
                YEAR(tgl_pemasukan) = YEAR(NOW())");

            return $query->result();
        }

    }
    
    /* End of file pemasukan_model.php */
?>
    