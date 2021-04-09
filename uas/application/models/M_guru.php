<?php

class M_guru extends CI_Model{
    public function tampil()
    {
        $this->db->join('tb_mapel','tb_mapel.id = tb_guru.id_mapel','LEFT');
        $this->db->order_by('id_guru','DESC');
        return $this->db->get('tb_guru');
    }
    public function input($data,$table){
        $this->db->insert($table,$data);
    }
    public function hapus($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit($where,$table){
        $this->db->join('tb_mapel','tb_mapel.id = tb_guru.id_mapel','LEFT');
        return $this->db->get_where($table,$where);
    }
    public function update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function detail($id_guru = NULL){
        $this->db->join('tb_mapel','tb_mapel.id = tb_guru.id_mapel','LEFT');
        return $query =$this->db->get_where('tb_guru', array('id_guru' => $id_guru))->row();
    }
    public function get_key($key){
        $this->db->select('*');
        $this->db->from('tb_guru');
        $this->db->like('nama', $key);
        $this->db->or_like('nip', $key);
        // $this->db->or_like('password', $key);
        // $this->db->or_like('kelas', $key);
        // $this->db->or_like('tahun', $key);
        $this->db->or_like('alamat', $key);
        $this->db->or_like('tgl_lahir', $key);
        $this->db->or_like('email', $key);
        $this->db->or_like('no_telp', $key);
        return $this->db->get()->result();
    }
    public function jumlahdata(){   
    $query = $this->db->get('tb_guru');
        if($query->num_rows()>0){
        return $query->num_rows();
        }else{
        return 0;
        }
    }
}