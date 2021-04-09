<?php
defined('BASEPATH') or exit('No direct script access allowed');



class pengumuman extends CI_controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != 1) {
			$this->session->set_flashdata('pesan', 'anda bukan admin');
			redirect('auth');
		}
		$this->load->model('m_pengumuman');
	}

	public function index()
	{

		$data = [
			'pengumuman'    => $this->m_pengumuman->tampil()->result(),
			'total'         => $this->m_pengumuman->jumlahdata(),
			'menu'	        => 'pengumuman',
			'title'         => 'Data Pengumuman',
			'isi'           => 'admin/pengumuman/v_pengumuman'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function add()
	{

		$data = [
			'pengumuman'    => $this->m_pengumuman->tampil()->result(),
			//'total'         => $this->m_pengumuman->jumlahdata(),
			'menu'	        => ' pengumuman',
			'title'         => 'Data Pengumuman',
			'isi'           => 'admin/pengumuman/v_tambah'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function tambah()
	{

		$config['upload_path'] = './files/foto_pengumuman/';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = 'file_' . time();
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('foto')) {
			echo "<script>alert('Ulangi Lagi !!')
                                window.location='" . base_url('pengumuman') . "';
                            </script>";
		} else {
			$file = $this->upload->data();
			$data = array(
				'judul'		=>	$judul		= $this->input->post('judul'),
				'isi'		=>	$isi		= $this->input->post('isi'),
				'foto' 		=>  $file['file_name'],
			);
			$this->m_pengumuman->input($data, 'tb_pengumuman');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil di tambahkan</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('pengumuman');
		}
		$data = array(
			'judul'		=>	$judul		= $this->input->post('judul'),
			'isi'		=>	$isi		= $this->input->post('isi'),
		);
		$this->m_pengumuman->input($data, 'tb_pengumuman');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil di tambahkan</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('pengumuman');
	}

	public function hapus($id)
	{

		$where = array('id' => $id);
		$detail = $this->m_pengumuman->detail($id);
		if (file_exists('./files/foto_pengumuman/' . $detail->foto)) {
			unlink('./files/foto_pengumuman/' . $detail->foto);
		}
		$this->m_pengumuman->hapus($where, 'tb_pengumuman');
		$this->session->set_flashdata('pesan', '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di Hapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');

		redirect('pengumuman');
	}
	public function edit($id)
	{
		$where = array('id' => $id);
		$data = [
			'pengumuman' => $this->m_pengumuman->edit($where, 'tb_pengumuman')->result(),
			'menu'	=> 'pengumuman',
			'title' => 'Edit Pengumuman',
			'isi'   => 'admin/pengumuman/v_edit'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function update()
	{
		$config['upload_path'] = './files/foto_pengumuman/';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = 'file_' . time();
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('foto')) {
			echo "<script>alert('Ulangi Lagi !!')
                                window.location='" . base_url('pengumuman') . "';
                            </script>";
		} else {
			$file = $this->upload->data();
			$data = array(
				'judul'		=>	$judul		= $this->input->post('judul'),
				'isi'		=>	$isi		= $this->input->post('isi'),
				'foto' 		=>  $file['file_name'],
			);
			$where = array(
				'id' => $id 	= $this->input->post('id'),
			);
			$detail = $this->m_pengumuman->detail($id);
			if (file_exists('./files/foto_pengumuman/' . $detail->foto)) {
				unlink('./files/foto_pengumuman/' . $detail->foto);
			}
			$this->m_pengumuman->update($where, $data, 'tb_pengumuman');
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<strong>Data berhasil di edit</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('pengumuman');
		}
		$data = array(
			'judul'		=>	$judul		= $this->input->post('judul'),
			'isi'		=>	$isi		= $this->input->post('isi'),
		);
		$where = array(
			'id' => $id 	= $this->input->post('id'),
		);
		$this->m_pengumuman->update($where, $data, 'tb_pengumuman');
		$this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di edit</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('pengumuman');
	}
}
