    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class register_model extends CI_Model
    {

        /*public function register(){
		$data=[
            'nama'=>$this->input->post('nama', true),
            'tgl_lahir'=>$this->input->post('tgl_lahir', true),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin', true),
            'email'=>$this->input->post('email', true),
            'no_telp'=>$this->input->post('no_telp', true),
            
            'level'=>'user',
            'status'=>'pasif',
            'username'=>$this->input->post('username', true),
			'password'=>$this->input->post('password', true),
		];
		$this->db->insert('user', $data);
	}*/

        //    // Check umur
        //     public function validasi_umur($tgl_lahir){
        //         $this->db->from('user');
        //         $this->db->select('tgl_lahir');
        //         $this->db->where('tgl_lahir', $tgl_lahir);

        //         //$query = $this->db->get_where('user', array('tgl_lahir' => $tgl_lahir));
        //         $today = new DateTime('today');
        //         $tanggal = new DateTime($tgl_lahir);
        //         $y = $today->diff($tanggal)->y;

        //         if($y >= 18){
        //             return true;
        //         } else {
        //             return false;
        //         }

        //     }

        // Check username exists
        /*public function validasi_username($username){
            // $this->db->from('user');
            // $this->db->select('username');
            // $this->db->where('username', $username);
            // $exist = $this->db->get()->row();    

            $query = $this->db->get_where('user', array('username' => $username));
            if(empty($query->row_array())){
                return true;
            } else {
                return false;
            }
        }*/

        // Check email exists
        /*>get_where('user', array('email' => $email));
            if(empty($query->row_array())){
                return true;
            } else {
                return false;
            }
        }*/

        public function datatabeluserReg()
        {
            $register = 'aktif';
            $query = $this->db->order_by('id_user', 'DESC')->get_where('user', array('status' => $register, 'level' => 'user'));
            return $query->result();
        }

        public function datatabeluserUnreg()
        {
            $register = 'pasif';
            $query = $this->db->order_by('id_user', 'DESC')->get_where('user', array('status' => $register));
            return $query->result();
        }

        public function ubahstatus()
        {
            $data = [
                "status" => $this->input->post("status", true)
            ];

            $this->db->where('id_user', $this->input->post('id_user'));
            $this->db->update('user', $data);
        }
    }
    ?>