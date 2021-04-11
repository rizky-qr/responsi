<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//by Espio

class Login extends CI_controller{
	function __construct(){
			parent::__construct();
			
		}
	//Membuka halaman form login
	public function index(){
		$this->load->view('user/user_login');
	}

	//Membuat fungsi login
	public function in(){

		//Menampung inputan dari form
		$user_Muhamad_Rizky=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $pass_4433=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

		//Pengecekan username dan password
		if($user_Muhamad_Rizky=='admin' && $pass_4433=='1234'){
			$user = "Muhamad Rizky";
			//Membuat session
			$_SESSION['level'] = "admin";
			$_SESSION['user'] = $user;
			$_SESSION['status'] = "login";
			
			setcookie('username', 'rizky', time() + (60 * 60 * 24 * 1), '/');
			//time detik, menit, jam, hari

			redirect('login/berhasil');

			}else{
				//die("Maaf, anda harus mengakses halaman ini dari form Login");
				header("location:./?pesan=belum_login");
			}
			if(empty($user_Muhamad_Rizky)){
				//die("Maaf, anda harus mengisi username terlebih dahulu");
				header("location:./?pesan=no_user");
			}else{
				if (is_numeric($user_Muhamad_Rizky))
				{
				//die("Maaf, username harus berupa huruf");
				header("location:./?pesan=user_huruf");
				}else{
				header("location:./?pesan=gagal");
				}
			}  
		}
	
	public function berhasil(){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
		$this->load->view('admin/user_berhasil');
	}

	//Membuat fungsi logout
	public function out(){

		//Menghapus cookies
		setcookie('username', '', 0, '/');
		//delete_cookie('espio');

		//Menghapus session
		$this->session->sess_destroy();
		header("location:../?pesan=logout");
	}
}