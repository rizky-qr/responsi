<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Id extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_id');
    }

    public function index()
    {
        $data = [

            'carausel'      => $this->m_id->tampilslide()->result(),
            'galeri'        => $this->m_id->limgaleri()->result(),
            'pengumuman'    => $this->m_id->limitpengumuman()->result(),
            'title' => 'Home',
            'isi'   => 'umum/v_home'
        ];
        return $this->load->view('layout/v_wrapper', $data);
    }
    public function guru()
    {

        $data = [
            'guru' => $this->m_id->tampilguru()->result(),
            'title' => 'Guru',
            'isi'   => 'umum/v_guru'
        ];
        return $this->load->view('layout/v_wrapper', $data);
    }

    public function download()
    {
        $data = [
            'file' => $this->m_id->tampilfile()->result(),
            'title' => 'Download',
            'isi'   => 'umum/v_download'
        ];
        return $this->load->view('layout/v_wrapper', $data);
    }
    public function pengumuman()
    {

        $data = [
            'pengumuman'    => $this->m_id->tampilpengumuman()->result(),
            'galeri'    => $this->m_id->limfoto()->result(),
            'title'         => 'Pengumuman',
            'isi'           => 'umum/v_pengumuman'
        ];
        return $this->load->view('layout/v_wrapper', $data);
    }
    public function isi_pengumuman($id)
    {
        $this->load->model('m_pengumuman');
        $data = [
            'detail' => $detail = $this->m_id->detail($id),
            'limit'    => $this->m_id->limit6()->result(),
            'galeri'    => $this->m_id->limfoto()->result(),
            'menu'    => 'pengumuman',
            'title' => 'Isi pengumuman',
            'isi'   => 'umum/v_detail_pengumuman'
        ];
        return $this->load->view('layout/v_wrapper', $data);
    }

    public function gallery()
    {

        $data = [
            'galeri'         => $this->m_id->tampilgaleri()->result(),
            'title'         => 'gallery',
            'isi'           => 'umum/v_galeri'
        ];
        return $this->load->view('layout/v_wrapper', $data);
    }
    public function profil()
    {

        $data = [
            'profil'        => $this->m_setting->detail_web(),
            'title'         => 'Visi dan Misi',
            'isi'           => 'umum/v_profil'
        ];
        return $this->load->view('layout/v_wrapper', $data);
    }
    public function video()
    {

        $data = [
            'title'         => 'Video',
            'isi'           => 'umum/v_video'
        ];
        return $this->load->view('layout/v_wrapper', $data);
    }
    public function kontak()
    {

        $data = [
            'kontak'        => $this->m_setting->detail_web(),
            'title'         => 'Kontak',
            'isi'           => 'umum/v_kontak'
        ];
        return $this->load->view('layout/v_wrapper', $data);
    }

    public function foto($id)
    {
        $where = $this->m_id->detailfoto($id);
        $data = [
            'detail' => $where,
            'foto' => $this->m_id->listfoto($id)->result(),
            'title' => 'Foto Kegiatan ' . $where->nama_galeri,
            'isi'   => 'umum/v_lihatfoto'
        ];
        return $this->load->view('layout/v_wrapper', $data);
    }
}
