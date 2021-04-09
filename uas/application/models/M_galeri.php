<?php

class M_galeri extends CI_Model
{
    public function tampil()
    {
        $this->db->select('tb_galeri.*,count(tb_foto.id_galeri) as jml_foto');
        $this->db->from('tb_galeri');
        $this->db->join('tb_foto', 'tb_foto.id_galeri = tb_galeri.id', 'LEFT');
        $this->db->group_by('tb_galeri.id');
        $this->db->order_by('tb_galeri.id', 'desc');
        return $this->db->get();
    }
    public function list($id)
    {
        $this->db->where('id_galeri', $id);
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_foto');
    }
    public function tampilfoto()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_foto');
    }
    public function limit()
    {
        $this->db->limit(3); //100 Data yang akan muncul
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_galeri');
    }
    public function input($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detail($id = NULL)
    {
        return $query = $this->db->get_where('tb_galeri', array('id' => $id))->row();
    }
    // public function hapusbanyak($where, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }
    public function detailfoto($id = NULL)
    {
        // $this->db->join('tb_galeri', 'tb_foto.id_galeri = tb_foto.id', 'LEFT');
        return $query = $this->db->get_where('tb_foto', array('id_galeri' => $id))->row();
    }
    public function get_key($key)
    {
        $this->db->select('*');
        $this->db->from('tb_galeri');
        $this->db->like('nama_baru', $key);
        $this->db->or_like('nama_ori', $key);
        // $this->db->or_like('password', $key);
        // $this->db->or_like('kelas', $key);
        // $this->db->or_like('tahun', $key);
        // $this->db->or_like('alamat', $key);
        // $this->db->or_like('tgl_lahir', $key);
        // $this->db->or_like('email', $key);
        // $this->db->or_like('no_telp', $key);
        return $this->db->get()->result();
    }
}
