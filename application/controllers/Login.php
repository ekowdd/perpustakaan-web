<?php
/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model','LM');
	}

	public function submitAnggota(){
		$noAnggota = 0;
		$noAnggota = $this->input->post('no_anggota');
		$noAnggota = rand(10000000,999999999);
		$data = array(
			'no_anggota'=>$namaAnggota,
			'nama_lengkap'=>$this->input->post('nama_depan'),
			'tempat_lahir'=>$this->input->post('tempat_lahir'),
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
			'jenkel'=>$this->input->post('jenkel'),
			'usia'=>$this->input->post('usia'),
			'alamat'=>$this->input->post('alamat'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'ulangi_password'=>$this->input->post('ulangi_password')
			);

		$response = $this->LM->submitAnggota($data);

		if ($response) {
			echo json_encode(array('msg'=>$response));
		}else{
			echo json_encode(array('msg'=>'Data not founds'));
		}
	}

	public function auth_user_info(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$response = $this->LM->auth_info($email,$password);

		if ($response) {
			echo json_encode(array('msg'=>$response));
		}else{
			echo json_encode(array('msg'=>'Data not founds'));
		}
	}
}