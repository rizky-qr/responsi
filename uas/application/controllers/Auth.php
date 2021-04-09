<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Auth extends CI_Controller
{

	// public function __construct()
	// {
	// 	parent::__construct();
	// if($this->session->userdata('status') != "login"){
	// 	$this->session->set_flashdata('pesan','Anda Belum Login');
	// 	redirect('auth');
	// }
	// }




	public function index()
	{
		// if($this->session->userdata('status') == "login"){
		// 	redirect('dashboard');
		// }
		//Pekerjaan disini
		$data = [
			'title' => 'Login'
		];
		$this->load->view('v_login', $data);
	}

	public function login()
	{
		//Form validasi
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'username wajib diisi']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'password wajib diisi']);


		//Kondisi validasi
		if ($this->form_validation->run() == FALSE) {
			// $errors = $this->form_validation->error_array();
			$this->session->set_flashdata('errors', validation_errors());
			// $this->session->set_flashdata('input',$this->input->post());
			redirect('auth');
		} else {
			//Menangkap inputan dari form
			$username = htmlspecialchars($this->input->post('username'));
			$password = htmlspecialchars($this->input->post('password'));

			$cek = $this->m_auth->cek_login($username, $password);

			//Pengecekan 
			if ($cek) {
				//Buatkan session


				$this->session->set_userdata('username', $cek->username);
				$this->session->set_userdata('image', $cek->image);
				$this->session->set_userdata('role_id', $cek->role_id);
				$this->session->set_userdata('status', "login");


				// setcookie('status', 'login', time() + (60 * 60 * 24 * 1), '/');


				//akses user
				if ($cek->role_id == 1) {
					redirect('dashboard');
				} else {
					redirect('');
				}
				//Dialihkan ke dashboard

			} else {
				// echo "Username dan Password salah";
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Username Dan password Salah</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				redirect('auth');
			}
		}
	}




	public function logout()
	{

		setcookie('status', '', 0, '/');
		//delete_cookie;
		$this->session->set_flashdata('pesan', 'anda berhasil logout');

		//Hapus session disini
		$this->session->sess_destroy();


		redirect('auth');
	}
}
