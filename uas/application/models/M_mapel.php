<?php

class M_mapel extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_mapel');
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
    public function jumlahdata()
    {
        $query = $this->db->get('tb_mapel');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
