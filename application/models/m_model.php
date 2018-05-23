<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_model extends CI_Model{	

	function tampil_data($table,$where){
		return $this->db->get_where($table, $where);
	}
	function tampil_data_all($table){
		return $this->db->get($table);
	}

	function insertData($table,$data){
		return $this->db->insert($table, $data);
	}

	function updateData($table,$data,$where){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function deleteData($table,$where){
		$this->db->delete($table,$where);
	}	

}
?>