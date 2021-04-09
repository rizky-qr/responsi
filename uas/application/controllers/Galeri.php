<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != 1) {
			$this->session->set_flashdata('pesan', 'anda bukan admin');
			redirect('auth');
		}
		$this->load->model('m_galeri');
	}

	public function index()
	{
		$data = [
			'galeri' => $this->m_galeri->tampil()->result(),
			'total' => $this->db->get('tb_galeri')->num_rows(),
			'menu'	=> 'Gallery',
			'title' => 'Kegiatan',
			'isi'   => 'admin/galeri/v_galeri'
		];
		return $this->load->view('template/v_wrapper', $data);
	}


	public function tambah()
	{

		$config['upload_path'] = './files/galeri/';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = $this->input->post('nama_galeri');
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('sampul')) {
			echo "<script>alert('Ulangi Lagi !!')
                                window.location='" . base_url('galeri') . "';
                            </script>";
		} else {
			$file = $this->upload->data();
			$data = array(
				'nama_galeri'		=>	$nama_galeri		= $this->input->post('nama_galeri'),
				'sampul' 		=>  $file['file_name'],
			);
			$this->m_galeri->input($data, 'tb_galeri');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil di tambahkan</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('galeri');
		}
	}

	public function hapus($id)
	{


		$where = array('id' => $id);
		$detail = $this->m_galeri->detail($id);
		if (file_exists('./files/galeri/' . $detail->sampul)) {
			unlink('./files/galeri/' . $detail->sampul);
		}
		$this->m_galeri->hapus($where, 'tb_galeri');
		$this->session->set_flashdata('pesan', '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di Hapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');

		redirect('galeri');
	}
	public function edit($id)
	{
		$where = array('id' => $id);
		$data = [
			'galeri' => $this->m_galeri->edit($where, 'tb_galeri')->result(),
			'menu'	=> 'Galeri',
			'title' => 'Edit Data Galeri',
			'isi'   => 'admin/galeri/v_edit'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function update()
	{
		$config['upload_path'] = './files/galeri/';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = $this->input->post('nama_galeri');
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('sampul')) {
			echo "<script>alert('Ulangi Lagi !!')
                                window.location='" . base_url('galeri') . "';
                            </script>";
		} else {
			$file = $this->upload->data();
			$data = array(
				'nama_galeri'		=>	$nama_galeri		= $this->input->post('nama_galeri'),
				'sampul' 			=>  $file['file_name'],
			);
			$where = array(
				'id' => $id 	= $this->input->post('id'),
			);
			$detail = $this->m_galeri->detail($id);
			if (file_exists('./files/galeri/' . $detail->sampul)) {
				unlink('./files/galeri/' . $detail->sampul);
			}
			$this->m_galeri->update($where, $data, 'tb_galeri');
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<strong>Data berhasil di edit</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('galeri');
		}
		$data = array(
			'nama_galeri'		=>	$nama_galeri		= $this->input->post('nama_galeri'),
		);
		$where = array(
			'id' => $id 	= $this->input->post('id'),
		);
		$this->m_galeri->update($where, $data, 'tb_galeri');
		$this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di edit</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('galeri');
	}
	public function addfoto($id)
	{
		$where = $this->m_galeri->detail($id);
		$data = [
			'detail' => $where,
			'menu'	=> 'Galeri',
			'foto' => $this->m_galeri->list($id)->result(),
			'title' => 'Foto Kegiatan ' . $where->nama_galeri,
			'isi'   => 'admin/galeri/v_foto'
		];
		return $this->load->view('template/v_wrapper', $data);
	}

	public function tambahfoto()
	{
		$config['upload_path'] = './files/galeri/';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = 'file_' . time();
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('foto')) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data Gagal di tambahkan</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');
			$id_galeri		= $this->input->post('id_galeri');
			redirect('galeri/addfoto/' . $id_galeri);
		} else {
			$file = $this->upload->data();
			$data = array(
				'id_galeri'			=>	$id_galeri		= $this->input->post('id_galeri'),
				'ket_foto'			=>	$ket_foto		= $this->input->post('ket_foto'),
				'foto' 				=>  $file['file_name'],
			);
			$this->m_galeri->input($data, 'tb_foto');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil di tambahkan</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('galeri/addfoto/' . $id_galeri);
		}
	}
	public function hapusfoto($id_galeri, $id)
	{
		$where = array('id' => $id);
		$detail = $this->m_galeri->detailfoto($id);
		if (file_exists('./files/galeri/' . $detail->foto)) {
			unlink('./files/galeri/' . $detail->foto);
		}
		$this->m_galeri->hapus($where, 'tb_foto');
		$this->session->set_flashdata('pesan', '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di Hapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');

		redirect('galeri/addfoto/' . $id_galeri);
	}
	public function foto()
	{
		$data = [
			'galeri' => $this->m_galeri->tampil()->result(),
			'foto' => $this->m_galeri->tampilfoto()->result(),
			'total' => $this->db->get('tb_foto')->num_rows(),
			'menu'	=> 'Gallery',
			'title' => 'Semua Foto Kegiatan',
			'isi'   => 'admin/galeri/v_semua'
		];
		return $this->load->view('template/v_wrapper', $data);
	}

	public function hapusbanyak($id)
	{
		//hapus galeri
		$where = array('id' => $id);
		$detail = $this->m_galeri->detail($id);
		if (file_exists('./files/galeri/' . $detail->sampul)) {
			unlink('./files/galeri/' . $detail->sampul);
		}
		$this->m_galeri->hapus($where, 'tb_galeri');

		//hapus foto
		$mana = array('id_galeri' => $id);
		$foto = $this->m_galeri->detailfoto($id);
		if (file_exists('./files/galeri/' . $foto->foto)) {
			unlink('./files/galeri/' . $foto->foto);
		}

		$this->m_galeri->hapus($mana, 'tb_foto');
		$this->session->set_flashdata('pesan', '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di Hapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');

		redirect('galeri');
	}
}
