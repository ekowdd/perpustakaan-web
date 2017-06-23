<?php
class Buku extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function submitBuku(){
		$data = array(
			'image'=>$this->input->post('image'),
			'kode_buku'=>$this->input->post('kode_buku'),
			'judul_buku'=>$this->input->post('judul_buku'),
			'kategori'=>$this->input->post('kategori'),
			'penulis'=>$this->input->post('penulis'),
			'penerbit'=>$this->input->post('penerbit'),
			'tgl_tahun_terbit'=>$this->input->post('tgi_tahun_terbit')
			);

		$response = $this->BM->submitBuku($data);
		if($response){
			echo json_encode(array('msg'=>$response));
		}else{
			echo json_encode(array('msg'=>'Data not founds'));
		}
	}

	public function get_json_all_book(){
		$res = $this->BM->book();
		if ($res) {
			echo json_encode(array('msg'=>$res));
		}else{
			echo json_encode(array('msg'=>'Data not founds'));
		}
	}
}