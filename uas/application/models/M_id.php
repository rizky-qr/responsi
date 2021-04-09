<?php

class M_id extends CI_Model
{
    public function tampilgaleri()
    {
        $this->db->select('tb_galeri.*,count(tb_foto.id_galeri) as jml_foto');
        $this->db->from('tb_galeri');
        $this->db->join('tb_foto', 'tb_foto.id_galeri = tb_galeri.id', 'LEFT');
        $this->db->group_by('tb_galeri.id');
        $this->db->order_by('tb_galeri.id', 'desc');
        return $this->db->get();
    }
    public function tampilfile()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_file');
    }
    public function tampilguru()
    {
        $this->db->join('tb_mapel', 'tb_mapel.id = tb_guru.id_mapel', 'LEFT');
        return $this->db->get('tb_guru');
    }
    public function tampilslide()
    {
        return $this->db->get('tb_carausel');
    }
    public function limgaleri()
    {
        $this->db->limit(3); //100 Data yang akan muncul
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_galeri');
    }
    public function limfoto()
    {
        $this->db->limit(9); //100 Data yang akan muncul
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_foto');
    }
    public function tampilpengumuman()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tb_pengumuman');
    }
    public function limitpengumuman()
    {
        $this->db->limit(4); //100 Data yang akan muncul
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_pengumuman');
    }
    public function limit6()
    {
        $this->db->limit(6); //100 Data yang akan muncul
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_pengumuman');
    }
    public function detail($id = NULL)
    {
        return $query = $this->db->get_where('tb_pengumuman', array('id' => $id))->row();
    }
    public function listfoto($id)
    {

        $this->db->where('id_galeri', $id);
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_foto');
    }
    public function detailfoto($id = NULL)
    {
        return $query = $this->db->get_where('tb_galeri', array('id' => $id))->row();
    }
}
