<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Guru extends CI_controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != 1) {
			$this->session->set_flashdata('pesan', 'anda bukan admin');
			redirect('auth');
		}
		$this->load->model('m_guru');
		$this->load->model('m_mapel');
	}


	public function index()
	{
		$data = [
			'guru' => $this->m_guru->tampil()->result(),
			'total' => $this->m_guru->jumlahdata(),
			'mapel' => $this->m_mapel->tampil()->result(),
			'menu'	=> 'guru',
			'title' => 'Data guru',
			'isi'   => 'admin/guru/v_guru'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function tambah()
	{

		$config['upload_path'] = './files/foto_guru/';
		$config['allowed_types'] = 'pdf|php|html|js|xml|pptx|docx|xlsx|txt|jpg|png';
		$config['file_name'] = 'file_' . time();
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('foto')) {
			echo "<script>alert('Ulangi Lagi !!')
                                window.location='" . base_url('guru') . "';
                            </script>";
		} else {
			$file = $this->upload->data();
			$data = array(
				'nama'		=>	$nama		= $this->input->post('nama'),
				'nip'		=>	$nip		= $this->input->post('nip'),
				// 'password'	=>	$password	= $this->input->post('password'),
				// 'kelas'		=>	$kelas		= $this->input->post('kelas'),
				// 'tahun'		=>	$tahun		= $this->input->post('tahun'),
				'id_mapel'	=>	$id_mapel	= $this->input->post('id_mapel'),
				'alamat'	=>	$alamat		= $this->input->post('alamat'),
				'tgl_lahir'	=>	$tgl_lahir	= $this->input->post('tgl_lahir'),
				'email'		=>	$email		= $this->input->post('email'),
				'no_telp'	=>	$no_telp	= $this->input->post('no_telp'),
				'foto' 		=>  $file['file_name'],
			);
			$this->m_guru->input($data, 'tb_guru');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil di tambahkan</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('guru');
		}
		$data = array(
			'nama'		=>	$nama		= $this->input->post('nama'),
			'nip'		=>	$nip		= $this->input->post('nip'),
			// 'password'	=>	$password	= $this->input->post('password'),
			// 'kelas'		=>	$kelas		= $this->input->post('kelas'),
			// 'tahun'		=>	$tahun		= $this->input->post('tahun'),
			'id_mapel'	=>	$id_mapel	= $this->input->post('id_mapel'),
			'alamat'	=>	$alamat		= $this->input->post('alamat'),
			'tgl_lahir'	=>	$tgl_lahir	= $this->input->post('tgl_lahir'),
			'email'		=>	$email		= $this->input->post('email'),
			'no_telp'	=>	$no_telp	= $this->input->post('no_telp'),
		);
		$this->m_guru->input($data, 'tb_guru');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil di tambahkan</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('guru');
	}

	public function hapus($id_guru)
	{
		$where = array('id_guru' => $id_guru);
		$detail = $this->m_guru->detail($id_guru);
		if (file_exists('./files/foto_guru/' . $detail->foto)) {
			unlink('./files/foto_guru/' . $detail->foto);
		}
		$this->m_guru->hapus($where, 'tb_guru');
		$this->session->set_flashdata('pesan', '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di Hapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');

		redirect('guru');
	}
	public function edit($id_guru)
	{
		$where = array('id_guru' => $id_guru);
		$data = [
			'guru' => $this->m_guru->edit($where, 'tb_guru')->result(),
			'mapel' => $this->m_mapel->tampil()->result(),
			'menu'	=> 'guru',
			'title' => 'Edit Data Guru',
			'isi'   => 'admin/guru/v_edit'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function update()
	{
		$config['upload_path'] = './files/foto_guru/';
		$config['allowed_types'] = 'pdf|php|html|js|xml|pptx|docx|xlsx|txt|jpg|png';
		$config['file_name'] = 'file_' . time();
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('foto')) {
			echo "<script>alert('Ulangi Lagi !!')
                                window.location='" . base_url('guru') . "';
                            </script>";
		} else {
			$file = $this->upload->data();
			$data = array(
				'nama'		=>	$nama		= $this->input->post('nama'),
				'nip'		=>	$nip		= $this->input->post('nip'),
				// 'password'	=>	$password	= $this->input->post('password'),
				// 'kelas'		=>	$kelas		= $this->input->post('kelas'),
				// 'tahun'		=>	$tahun		= $this->input->post('tahun'),
				'id_mapel'	=>	$id_mapel	= $this->input->post('id_mapel'),
				'alamat'	=>	$alamat		= $this->input->post('alamat'),
				'tgl_lahir'	=>	$tgl_lahir	= $this->input->post('tgl_lahir'),
				'email'		=>	$email		= $this->input->post('email'),
				'no_telp'	=>	$no_telp	= $this->input->post('no_telp'),
				'foto' 		=>  $file['file_name'],
			);
			$where = array(
				'id_guru' => $id_guru 	= $this->input->post('id_guru'),
			);
			$detail = $this->m_guru->detail($id_guru);
			if (file_exists('./files/foto_guru/' . $detail->foto)) {
				unlink('./files/foto_guru/' . $detail->foto);
			}
			$this->m_guru->update($where, $data, 'tb_guru');
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<strong>Data berhasil di edit</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('guru');
		}
		$data = array(
			'nama'		=>	$nama		= $this->input->post('nama'),
			'nip'		=>	$nip		= $this->input->post('nip'),
			// 'password'	=>	$password	= $this->input->post('password'),
			// 'kelas'		=>	$kelas		= $this->input->post('kelas'),
			// 'tahun'		=>	$tahun		= $this->input->post('tahun'),
			'id_mapel'	=>	$id_mapel	= $this->input->post('id_mapel'),
			'alamat'	=>	$alamat		= $this->input->post('alamat'),
			'tgl_lahir'	=>	$tgl_lahir	= $this->input->post('tgl_lahir'),
			'email'		=>	$email		= $this->input->post('email'),
			'no_telp'	=>	$no_telp	= $this->input->post('no_telp'),
		);
		$where = array(
			'id_guru' => $id_guru 	= $this->input->post('id_guru'),
		);
		$this->m_guru->update($where, $data, 'tb_guru');
		$this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di edit</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('guru');
	}
	public function detail($id_guru)
	{
		$this->load->model('m_guru');
		$data = [
			'detail' => $detail = $this->m_guru->detail($id_guru),
			'menu'	=> 'guru',
			'title' => 'Detail Data Guru',
			'isi'   => 'admin/guru/v_detail'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function print()
	{
		$data['guru'] = $this->m_guru->tampil('guru')->result();
		$this->load->view('admin/guru/v_print', $data);
	}
	public function cari()
	{
		$key = $this->input->post('key');
		$data = [
			'guru' => $this->m_guru->get_key($key),
			'total' => $this->m_guru->jumlahdata(),
			'menu'	=> 'guru',
			'title' => 'Data Guru',
			'isi'   => 'admin/guru/v_guru'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
}
