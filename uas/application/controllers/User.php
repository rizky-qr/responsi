<?php
defined('BASEPATH') or exit('No direct script access allowed');



class User extends CI_controller
{


	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != 1) {
			$this->session->set_flashdata('pesan', 'anda bukan admin');
			redirect('auth');
		}
		$this->load->model('m_user');
	}
	public function index()
	{

		$data = [
			'user' => $this->m_user->tampil()->result(),
			'total' => $this->m_user->jumlahdata(),
			'menu'	=> 'user',
			'title' => 'Data User',
			'isi'   => 'admin/user/v_user'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function tambah()
	{

		$data = array(
			'nama'		=>	$nama		= $this->input->post('nama'),
			'username'	=>	$nis		= $this->input->post('nis'),
			'password'	=>	$password	= $this->input->post('password'),

		);


		$this->m_user->input($data, 'tb_user');
		// $this->session->set_flashdata('massage','Data berhasil di tambahkan');
		redirect('user');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_user->hapus($where, 'tb_user');
		redirect('user');
	}
	public function edit($id)
	{
		$where = array('id' => $id);
		$data = [
			'user' => $this->m_user->edit($where, 'tb_user')->result(),
			'menu'	=> 'user',
			'title' => 'Edit Data User',
			'isi'   => 'admin/user/v_edit'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function update()
	{

		$data = array(
			'nama'		=>	$nama		= $this->input->post('nama'),
			'username'	=>	$username	= $this->input->post('username'),
			'password'	=>	$password	= $this->input->post('password'),

		);
		$where = array(
			'id' => $id 	= $this->input->post('id'),
		);
		$this->m_user->update($where, $data, 'tb_user');
		redirect('user');
	}
	// public function detail($id){
	// 	$this->load->model('m_user');
	// 	$data = [
	// 		'detail' => $detail = $this->m_user->detail($id),
	// 		'menu'	=> 'user',
	//         'title' => 'Detai Data user',
	//         'isi'   => 'admin/user/v_detail'
	//     ];
	//     return $this->load->view('template/v_wrapper', $data);
	// }
	// public function cari(){
	// 	$key = $this->input->post('key');
	// 	$data['user']=$this->m_user->get_key($key);
	// 	$this->load->view('template_admin/header');
	// 	$this->load->view('template_admin/sidebar');
	// 	$this->load->view('user/data', $data);
	// 	$this->load->view('template_admin/footer');
	// }
}
