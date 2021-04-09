<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('pesan', 'anda bukan admin');
            redirect('auth');
        }
    }

    public function index()
    {
        $data = [
            'menu'    => 'Dashboard',
            'title' => 'Contact',
            'isi'   => 'admin/v_contact'
        ];
        return $this->load->view('template/v_wrapper', $data);
    }
}
