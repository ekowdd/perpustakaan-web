<?php
class Pinjam_model extends CI_Model{
	public function submitPinjam($data){
		return $this->db->insert('pinjam_buku');
	}

	public function get_pinjam_json(){
		return $this->db->get('pinjam_buku')->result();
	}
}