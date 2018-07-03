<?php
class OrderModel extends CI_Model {

	function getOrder($username){
		$this->db->select('*');
		$this->db->where('username', $username); 
		$this->db->from('pesanan');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getOrderBy($kode){
		$this->db->select('*');
		$this->db->where('kode_order', $kode); 
		$this->db->from('pesanan');
		$query = $this->db->get();
		return $query->result_array();
	}

	function addPesanan($data){
		$this->db->insert('pesanan', $data);
	}

	function deleteData($kode){
		return $this->db->delete('pesanan', array('kode_order'=>$kode));
	}

	function updateData($kode, $data){
		/*$this->db->set('kode_barang', $data['kode_barang']);
		$this->db->set('nama_barang', $data['nama_barang']);*/
		$this->db->where('kode_order', $kode);
		$this->db->update('pesanan', $data);
	}

}
?>