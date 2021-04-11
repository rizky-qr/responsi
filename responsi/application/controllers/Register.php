<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//by Espio

class Register extends CI_controller{

	public function index(){
		$this->load->view('user_register');
	}

public function registrasi(){

		if (isset($_POST['nama']) AND isset($_POST['nim']))
			{
			    $nama_Muhamad_Rizky=$_POST['nama'];
			    $nim_4433=$_POST['nim'];
			    $ultah=$_POST['birthday'];
				$jenkel=$_POST['gender'];
			    $class=$_POST['class'];

			   //mempertahankan penulisan HTML pada sebuah tampilan HTML.
			   $nama_Muhamad_Rizky=htmlspecialchars($nama_Muhamad_Rizky);

			   //Fungsinya adalah untuk menghilangkan tag html yang ada pada sebuah string.
			   $nim_4433=strip_tags($nim_4433);
			}
			else
			{
			   header("Location:./?error=variabel_belum_diset");
			}
			  
			if(empty($nama_Muhamad_Rizky))
			{
			   header("Location:./?error=nama_kosong");
			}
			else
			{
			   if (is_numeric($nama_Muhamad_Rizky))
			   {
			      header("Location:./?error=nama_harus_huruf");
			   }
			   else
			   {
			      $data = array(	
			      		'hr'		=> 'Halaman Register',
						'nm'		=> $nama_Muhamad_Rizky,
						'nim'		=> $nim_4433,
						'ttl'		=> $ultah,
						'jkl'		=> $jenkel,
						'cls'		=> $class,
						/*SOAL NOMOR 2 DIBAWAH INI*/
						'isi'=>'user_register');      
					$this->load->view('wrapper',$data);
			}
		}
	}
}