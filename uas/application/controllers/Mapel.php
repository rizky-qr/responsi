<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Mapel extends CI_controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != 1) {
			$this->session->set_flashdata('pesan', 'anda bukan admin');
			redirect('auth');
		}
		$this->load->model('m_mapel');
	}
	public function index()
	{

		$data = [
			'mapel' => $this->m_mapel->tampil()->result(),
			'total' => $this->m_mapel->jumlahdata(),
			'menu'	=> 'Mapel',
			'title' => 'Mata Pelajaran',
			'isi'   => 'admin/mapel/v_mapel'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function tambah()
	{

		$data = array(
			'mapel'		=>	$mapel		= $this->input->post('mapel')

		);
		$this->m_mapel->input($data, 'tb_mapel');
		// $this->session->set_flashdata('massage','Data berhasil di tambahkan');
		redirect('mapel');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_mapel->hapus($where, 'tb_mapel');
		redirect('mapel');
	}
	public function edit($id)
	{
		$where = array('id' => $id);
		$data = [
			'mapel' => $this->m_mapel->edit($where, 'tb_mapel')->result(),
			'menu'	=> 'mapel',
			'title' => 'Edit Mapel',
			'isi'   => 'admin/mapel/v_edit'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function update()
	{

		$data = array(
			'mapel'		=>	$mapel		= $this->input->post('mapel')

		);
		$where = array(
			'id' => $id 	= $this->input->post('id'),
		);
		$this->m_mapel->update($where, $data, 'tb_mapel');
		redirect('mapel');
	}
}
