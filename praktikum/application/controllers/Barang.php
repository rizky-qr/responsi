<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{


	public function index()
	{
		$konten = $this->load->view('list_barang', null, true);

		$data_json = [
			'konten' => $konten,
			'titel' => 'List Data Barang',
		];

		echo json_encode($data_json);
	}

	public function list_barang()
	{
		$data_barang = $this->Barang_model->get_barang();

		$konten = '<tr>
			<td>Nama</td>
			<td>Deskrpsi</td>
			<td>Stok</td>
			<td>Aksi</td>	
		</tr>';
		foreach ($data_barang->result() as $key => $value) {
			$konten .= '<tr>
			<td>' . $value->nama_barang . '</td>
			<td>' . $value->deskripsi . '</td>
			<td>' . $value->stok . '</td>
			<td>Read | Hapus | Edit</td>	
		</tr>';
		}

		$data_json = [
			'konten' => $konten,
		];
		echo json_encode($data_json);
	}
}
