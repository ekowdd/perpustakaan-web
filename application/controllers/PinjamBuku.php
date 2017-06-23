<?php
class PinjamBuku extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}


	public function submitPinjamBuku(){
		$data = array(
			'no_anggota'=$this->input->post('no_aanggota'),
			'nama_lengkap'=>$this->input->post('nama_lengkap'),
			'email'=>$this->input->post('email'),
			'no_telp'=>$this->input->post('no_telp'),
			'alamat'=>$this->input->post('alamat'),
			'tgl_start'=>$this->input->post('tgl_start'),
			'tgl_end'=>$this->input->post('tgl_end'),
			'total_hari'=>$this->input->post('total_hari'),
			'judul'=>$this->input->post('judul'),
			'jmlh_pinjam'=>$this->input->post('jmlh_pinjam')
			);

		$response = $this->PM->submitPinjam($data);
		if($response){
			echo json_encode(array('msg'=>$response));
		}else{
			echo json_encode(array('msg'=>'Data not founds'));
		}
	}

	public function get_pinjam_json(){
		$res = $this->PM->get_json_all_pinjam();

		if ($res) {
			echo json_encode(array('msg'=>$res));
		}else{
			echo json_encode(array('msg'=>'Data not founds'));
		}
	}
}