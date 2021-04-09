<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Video extends CI_controller
{


    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') == '') {
            $this->session->set_flashdata('pesan', 'anda bukan admin');
            redirect('auth');
        }
        $this->load->model('m_video');
    }
    public function index()
    {

        $data = [
            'video' => $this->m_video->tampil()->result(),
            'total' => $this->m_video->jumlahdata(),
            'menu'    => 'video',
            'title' => 'video',
            'isi'   => 'admin/video/v_youtube'
        ];
        return $this->load->view('template/v_wrapper', $data);
    }
    public function tambah()
    {

        $data = array(
            'link'        =>    $link        = $this->input->post('link'),

        );


        $this->m_video->input($data, 'tb_youtube');
        // $this->session->set_flashdata('massage','Data berhasil di tambahkan');
        redirect('video');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_video->hapus($where, 'tb_youtube');
        redirect('video');
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data = [
            'video' => $this->m_video->edit($where, 'tb_youtube')->result(),
            'menu'    => 'video',
            'title' => 'Edit link',
            'isi'   => 'admin/video/v_edit'
        ];
        return $this->load->view('template/v_wrapper', $data);
    }
    public function update()
    {

        $data = array(
            'link'        =>    $link        = $this->input->post('link'),

        );
        $where = array(
            'id' => $id     = $this->input->post('id'),
        );
        $this->m_video->update($where, $data, 'tb_youtube');
        redirect('video');
    }
}
