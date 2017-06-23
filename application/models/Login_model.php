<?php
class Login_model extends CI_Model{

	public function submitAnggota($data){
		return $this->db->insert('anggota',$data);
	}
	public function auth_user_info($email, $password){
		$qry = $this->db->query('SELECT * FROM anggota WHERE email="$email" AND password="$password"');

		return $query->result();
	}


}