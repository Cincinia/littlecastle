<?php 

/**
* 
*/
class CatalogModel extends CI_Model
{
	
	function getAll(){
		$query = $this->db->get('barang');
		return $query->result_array();
	}

	function getMeja(){
		$this->db->select('*');
		$this->db->where('kategori', 'meja');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getKursi(){
		$this->db->select('*');
		$this->db->where('kategori', 'kursi');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getDll(){
		$this->db->select('*');
		$this->db->where('kategori', 'dll');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}

}

 ?>