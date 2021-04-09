<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_auth extends CI_Model
{
	// public function register($table, $data){
	// 	return $this->db->insert($table, $data);
	// }

	// public function sample_login($table, $where){
	// 	return $this->db->get_where($table,$where);
	// }

	public function cek_login($username,$password){
		$hasil = $this->db->where('username',$username,)->where('password',$password,)->limit(1)->get('tb_user');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return array();
		}
	}

}