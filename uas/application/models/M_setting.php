<?php

class M_setting extends CI_Model
{
    public function detail_web()
    {
        $this->db->where('id', 1);
        return $this->db->get('tb_setting')->row();
    }
    public function profil()
    {
        $this->db->where('id', 1);
        return $this->db->get('tb_user')->row();
    }
    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tb_setting', $data);
    }
    public function updateprofil($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tb_user', $data);
    }
    public function foto()
    {
        return $this->db->get('tb_carausel');
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
    public function detail($id = NULL)
    {
        return $query = $this->db->get_where('tb_carausel', array('id' => $id))->row();
    }
}
