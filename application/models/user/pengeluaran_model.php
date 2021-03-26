<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class pengeluaran_model extends CI_Model {

        public function tampilpengeluaran(){
            $this->db->select('pengeluaran.*, user.nama');
            $this->db->join('user', 'pengeluaran.id_user = user.id_user');
            return $this->db->get('pengeluaran')->result();
        }

        public function getpengeluaranByID($id){
            return $this->db->get_where('pengeluaran',['id_pengeluaran' => $id])->row_array();
        }
    
        public function getpengeluaranUserByID($id)
        {

            $this->db->select('pengeluaran.*, user.nama');
            $this->db->join('user', 'pengeluaran.id_user = user.id_user');
            $this->db->where('pengeluaran.id_user', $id);
            return $this->db->get('pengeluaran')->result();
        }

        public function NilaiTerbesar($id_user)
        {
            
            $this->db->select_max('nominal');
            $this->db->where('pengeluaran.id_user', $id_user);
            return $this->db->get('pengeluaran')->result();
        }

        public function NilaiTerkecil($id_user)
        {
            
            $this->db->select_min('nominal');
            $this->db->where('pengeluaran.id_user', $id_user);
            return $this->db->get('pengeluaran')->result();
        }

        public function NilaiRataRata($id_user)
        {
            $this->db->select_avg('nominal');
            $this->db->where('pengeluaran.id_user', $id_user);
            return $this->db->get('pengeluaran')->result();
        }

        public function NilaiSum($id_user)
        {
            $this->db->select_sum('nominal');
            $this->db->where('pengeluaran.id_user', $id_user);
            return $this->db->get('pengeluaran')->result();
        }

        public function FieldCountKeterangan($id_user){
            $query = $this->db->query("SELECT keterangan FROM pengeluaran WHERE pengeluaran.id_user = '$id_user' GROUP BY keterangan ORDER BY COUNT(keterangan) DESC LIMIT 1 ");
            return $query->result();
        }

        public function tambahdatapengeluaran()
        {
            $data=[
                'id_pengeluaran'     =>$this->input->post('id_pengeluaran', true),
                'id_user'       =>$this->session->userdata('id_user'),
                'tgl_pengeluaran'    =>$this->input->post('tgl_pengeluaran', true),
                'nominal'       =>$this->input->post('nominal', true),
                'keterangan'    =>$this->input->post('keterangan', true)
            ];
            $this->db->insert('pengeluaran',$data);
            $this->db->where('id_user',$this->input->post('username', true));
        }

        public function hapusdatapengeluaran($id){
            $this->db->where('id_pengeluaran',$id);
            $this->db->delete('pengeluaran');
        }

        public function ubahdatapengeluaran(){
            $data=[
                'tgl_pengeluaran'    =>$this->input->post('tgl_pengeluaran', true),
                'nominal'       =>$this->input->post('nominal', true),
                'keterangan'    =>$this->input->post('keterangan', true),
            ];
            $this->db->where('id_pengeluaran', $this->input->post('id_pengeluaran'));
            $this->db->update('pengeluaran', $data);
        }
        
        public function gettahun(){
            $query = $this->db->query("SELECT YEAR(tgl_pengeluaran) AS tahun FROM 
                pengeluaran GROUP BY YEAR(tgl_pengeluaran) ORDER BY YEAR(tgl_pengeluaran)
                ASC");
            return $query->result();
        }

        public function filterbytanggal($id, $tanggalawal, $tanggalakhir){
            $query = $this->db->query("SELECT * FROM pengeluaran WHERE id_user = '$id' AND tgl_pengeluaran 
                BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tgl_pengeluaran ASC");
            return $query->result();
        }

        public function filterbybulan($id, $tahun1, $bulanawal, $bulanakhir){
            $query = $this->db->query("SELECT * FROM pengeluaran WHERE id_user = '$id' AND YEAR(tgl_pengeluaran) = 
                '$tahun1' AND MONTH(tgl_pengeluaran) BETWEEN '$bulanawal' AND '$bulanakhir'
                ORDER BY tgl_pengeluaran ASC");

            return $query->result();
        }

        public function filterbytahun($id, $tahun2){
            $query = $this->db->query("SELECT * FROM pengeluaran WHERE id_user = '$id' AND YEAR(tgl_pengeluaran) = 
                '$tahun2' ORDER BY tgl_pengeluaran ASC");

            return $query->result();
        }

        public function pengeluaran_hari($id){
            $query = $this->db->query("SELECT * FROM pengeluaran where tgl_pengeluaran = CURDATE() 
                AND id_user = '$id'");
            return $query->result();
        }

        public function pengeluaran_bulan($id){
            $query = $this->db->query("SELECT * FROM pengeluaran where id_user = '$id' AND 
                MONTH(tgl_pengeluaran) = MONTH(NOW())");

            return $query->result();
        }

        public function pengeluaran_tahun($id){
            $query = $this->db->query("SELECT * FROM pengeluaran where id_user = '$id' AND 
                YEAR(tgl_pengeluaran) = YEAR(NOW())");

            return $query->result();
        }

    }
    
    /* End of file pengeluaran_model.php */
?>
    