<?php 

/**
* 
*/
class DetailModel extends CI_Model
{
	function getProduct($kode){
		$this->db->select('*');
		$this->db->where('kode_brg', $kode);
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();

	}
}

 ?>