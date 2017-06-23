<?php

class Buku_model extends CI_Model{
	public function submitBuku($data){
		return $this->db->insert('buku',$data);
	}

	public function book(){
		return $this->db->get('book')->result();
	}
}