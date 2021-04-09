<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notfound extends CI_Controller
{
	public function index()
	{
		// $this->load->view('v_error2');
		$this->load->view('v_notfound');
	}
}
