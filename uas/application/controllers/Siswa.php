<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Siswa extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != 0) {
			$this->session->set_flashdata('pesan', 'anda bukan admin');
			redirect('auth');
		}
		$this->load->model('m_siswa');
	}

	public function index()
	{

		$data = [
			'siswa' => $this->m_siswa->tampil()->result(),
			'total' => $this->m_siswa->jumlahdata(),
			'menu'	=> 'siswa',
			'title' => 'Data Siswa',
			'isi'   => 'admin/siswa/v_data'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function tambah()
	{

		$config['upload_path'] = './files/foto_siswa/';
		$config['allowed_types'] = 'pdf|php|html|js|xml|pptx|docx|xlsx|txt|jpg|png';
		$config['file_name'] = 'file_' . time();
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('foto')) {
			echo "<script>alert('Ulangi Lagi !!')
                                window.location='" . base_url('siswa') . "';
                            </script>";
		} else {
			$file = $this->upload->data();
			$data = array(
				'nama'		=>	$nama		= $this->input->post('nama'),
				'nis'		=>	$nis		= $this->input->post('nis'),
				// 'password'	=>	$password	= $this->input->post('password'),
				// 'kelas'		=>	$kelas		= $this->input->post('kelas'),
				// 'tahun'		=>	$tahun		= $this->input->post('tahun'),
				'alamat'	=>	$alamat		= $this->input->post('alamat'),
				'tgl_lahir'	=>	$tgl_lahir	= $this->input->post('tgl_lahir'),
				'email'		=>	$email		= $this->input->post('email'),
				'no_telp'	=>	$no_telp	= $this->input->post('no_telp'),
				'foto' 		=>  $file['file_name'],
			);
			$this->m_siswa->input($data, 'tb_siswa');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil di tambahkan</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('siswa');
		}
		$data = array(
			'nama'		=>	$nama		= $this->input->post('nama'),
			'nis'		=>	$nis		= $this->input->post('nis'),
			// 'password'	=>	$password	= $this->input->post('password'),
			// 'kelas'		=>	$kelas		= $this->input->post('kelas'),
			// 'tahun'		=>	$tahun		= $this->input->post('tahun'),
			'alamat'	=>	$alamat		= $this->input->post('alamat'),
			'tgl_lahir'	=>	$tgl_lahir	= $this->input->post('tgl_lahir'),
			'email'		=>	$email		= $this->input->post('email'),
			'no_telp'	=>	$no_telp	= $this->input->post('no_telp'),
		);
		$this->m_siswa->input($data, 'tb_siswa');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil di tambahkan</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('siswa');
	}

	public function hapus($id)
	{

		$where = array('id' => $id);
		$detail = $this->m_siswa->detail($id);
		if (file_exists('./files/foto_siswa/' . $detail->foto)) {
			unlink('./files/foto_siswa/' . $detail->foto);
		}
		$this->m_siswa->hapus($where, 'tb_siswa');
		$this->session->set_flashdata('pesan', '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di Hapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');

		redirect('siswa');
	}
	public function edit($id)
	{
		$where = array('id' => $id);
		$data = [
			'siswa' => $this->m_siswa->edit($where, 'tb_siswa')->result(),
			'menu'	=> 'siswa',
			'title' => 'Edit Data Siswa',
			'isi'   => 'admin/siswa/v_edit'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function update()
	{
		$config['upload_path'] = './files/foto_siswa/';
		$config['allowed_types'] = 'pdf|php|html|js|xml|pptx|docx|xlsx|txt|jpg|png';
		$config['file_name'] = 'file_' . time();
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('foto')) {
			echo "<script>alert('Ulangi Lagi !!')
                                window.location='" . base_url('siswa') . "';
                            </script>";
		} else {
			$file = $this->upload->data();
			$data = array(
				'nama'		=>	$nama		= $this->input->post('nama'),
				'nis'		=>	$nis		= $this->input->post('nis'),
				// 'password'	=>	$password	= $this->input->post('password'),
				// 'kelas'		=>	$kelas		= $this->input->post('kelas'),
				// 'tahun'		=>	$tahun		= $this->input->post('tahun'),
				'alamat'	=>	$alamat		= $this->input->post('alamat'),
				'tgl_lahir'	=>	$tgl_lahir	= $this->input->post('tgl_lahir'),
				'email'		=>	$email		= $this->input->post('email'),
				'no_telp'	=>	$no_telp	= $this->input->post('no_telp'),
				'foto' 		=>  $file['file_name'],
			);
			$where = array(
				'id' => $id 	= $this->input->post('id'),
			);
			$detail = $this->m_siswa->detail($id);
			if (file_exists('./files/foto_siswa/' . $detail->foto)) {
				unlink('./files/foto_siswa/' . $detail->foto);
			}
			$this->m_siswa->update($where, $data, 'tb_siswa');
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<strong>Data berhasil di edit</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('siswa');
		}
		$data = array(
			'nama'		=>	$nama		= $this->input->post('nama'),
			'nis'		=>	$nis		= $this->input->post('nis'),
			// 'password'	=>	$password	= $this->input->post('password'),
			// 'kelas'		=>	$kelas		= $this->input->post('kelas'),
			// 'tahun'		=>	$tahun		= $this->input->post('tahun'),
			'alamat'	=>	$alamat		= $this->input->post('alamat'),
			'tgl_lahir'	=>	$tgl_lahir	= $this->input->post('tgl_lahir'),
			'email'		=>	$email		= $this->input->post('email'),
			'no_telp'	=>	$no_telp	= $this->input->post('no_telp'),
		);
		$where = array(
			'id' => $id 	= $this->input->post('id'),
		);
		$this->m_siswa->update($where, $data, 'tb_siswa');
		$this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di edit</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('siswa');
	}
	public function detail($id)
	{
		$data = [
			'detail' => $detail = $this->m_siswa->detail($id),
			'menu'	=> 'siswa',
			'title' => 'Detail Data Siswa',
			'isi'   => 'admin/siswa/v_detail'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
	public function print()
	{
		$data['siswa'] = $this->m_siswa->tampil('siswa')->result();
		$this->load->view('admin/siswa/v_print', $data);
	}
	public function cari()
	{
		$key = $this->input->post('key');
		$data = [
			'siswa' => $this->m_siswa->get_key($key),
			'total' => $this->m_siswa->jumlahdata(),
			'menu'	=> 'siswa',
			'title' => 'Data Siswa',
			'isi'   => 'admin/siswa/v_data'
		];
		return $this->load->view('template/v_wrapper', $data);
	}
}
