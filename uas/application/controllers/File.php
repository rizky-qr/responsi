<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != 1) {
			$this->session->set_flashdata('pesan', 'anda bukan admin');
			redirect('auth');
		}
		$this->load->model('m_file');
	}

	public function index()
	{
		$data = [
			'file' => $this->m_file->tampil()->result(),
			'total' => $this->db->get('tb_file')->num_rows(),
			'menu'	=> 'file',
			'title' => 'Data File',
			'isi'   => 'admin/file/v_file'
		];
		return $this->load->view('template/v_wrapper', $data);
	}

	function tambah()
	{
		$config['upload_path'] = './files/download/';
		$config['allowed_types'] = 'pdf|pptx|docx|xlsx|txt|doc|ppt|xls';
		$config['file_name'] = $this->input->post('nama_file');
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('file')) {
			echo "<script>alert('Ulangi Lagi !!')
                                window.location='" . base_url('file') . "';
                            </script>";
		} else {
			$file = $this->upload->data();
			$data = array(
				'nama_file'		=>	$nama_file		= $this->input->post('nama_file'),
				'file' 		       =>  $file['file_name'],
			);
			$this->m_file->input($data, 'tb_file');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil di tambahkan</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('file');
		}
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data = [
			'file' => $this->m_file->edit($where, 'tb_file')->result(),
			'menu'	=> 'file',
			'title' => 'Edit Data File',
			'isi'   => 'admin/file/v_edit'
		];
		return $this->load->view('template/v_wrapper', $data);
	}

	function update()
	{
		$config['upload_path'] = './files/download/';
		$config['allowed_types'] = 'pdf|pptx|docx|xlsx|txt|doc|ppt|xls';
		$config['file_name'] = $this->input->post('nama_file');
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('file')) {
			echo "<script>alert('Ulangi Lagi !!')
                                window.location='" . base_url('file') . "';
                            </script>";
		} else {
			$file = $this->upload->data();
			$data = array(
				'nama_file'		=>	$nama_file		= $this->input->post('nama_file'),
				'file' 		    =>  $file['file_name'],
			);
			$where = array(
				'id' => $id 	= $this->input->post('id'),
			);
			$detail = $this->m_file->detail($id);
			if (file_exists('./files/download/' . $detail->file)) {
				unlink('./files/download/' . $detail->file);
			}
			$this->m_file->update($where, $data, 'tb_file');
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<strong>Data berhasil di edit</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('file');
		}
		$data = array(
			'nama_file'		=>	$nama_file		= $this->input->post('nama_file'),
		);
		$where = array(
			'id' => $id 	= $this->input->post('id'),
		);
		$this->m_file->update($where, $data, 'tb_file');
		$this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di edit</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('file');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$detail = $this->m_file->detail($id);
		if (file_exists('./files/download/' . $detail->file)) {
			unlink('./files/download/' . $detail->file);
		}
		$this->m_file->hapus($where, 'tb_file');
		$this->session->set_flashdata('pesan', '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
			<strong>Data berhasil di Hapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');

		redirect('file');;
	}
}
