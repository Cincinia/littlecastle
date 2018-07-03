<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class HomeModel extends CI_Model
{
	
	function getBest(){
		$this->db->select('*');
		//Wherenya harusnya yang laku paling banyak. masi bingung query nya.
		$this->db->where('rating'. '>=7');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getPromo(){
		$query = $this->db->get('promo');
		return $query->result_array();
	}

	function getProduct(){
		$query = $this->db->get('barang');
		return $query->result_array();
	}

	function getUser(){
		$query = $this->db->get('akun');
		return $query->result_array();
	}

	function getOrder(){
		$query = $this->db->get('pesanan');
		return $query->result_array();
	}

}

 ?>