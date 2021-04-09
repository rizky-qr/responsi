<?php

class M_siswa extends CI_Model{
    public function tampil()
    {
        $this->db->order_by('id','DESC');
        return $this->db->get('tb_siswa');
    }
    public function input($data,$table){
        $this->db->insert($table,$data);
    }
    public function hapus($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit($where,$table){
        return $this->db->get_where($table,$where);
    }
    public function update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function detail($id = NULL){
        return $query =$this->db->get_where('tb_siswa', array('id' => $id))->row();
    }
    public function get_key($key){
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->like('nama', $key);
        $this->db->or_like('nis', $key);
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
    $query = $this->db->get('tb_siswa');
        if($query->num_rows()>0){
        return $query->num_rows();
        }else{
        return 0;
        }
    }
}