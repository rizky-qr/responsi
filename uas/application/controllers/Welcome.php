<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{
		$data = [
			'title' => 'fix',
			'isi'   => 'v_error2'
		];
		return $this->load->view('layout/v_wrapper', $data);
	}
}
