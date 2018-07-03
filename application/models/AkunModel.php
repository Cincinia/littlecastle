<?php
class AkunModel extends CI_Model {

	function login_authen($username, $password)
	{
		$this->db->select('*');
		$this->db->where('username', $username); //ngecel apakah usernamenya ada di database
		$this->db->where('password', $password); 
		$this->db->from('akun');
		$query = $this->db->get();
		return $query;
	}
	
	function getAcc($username){
		$this->db->select('*');
		$this->db->where('username', $username); 
		$this->db->from('akun');
		$query = $this->db->get();
		return $query->result_array();
	}

	function addAcc($data){
		$this->db->insert('akun', $data);
	}

	function updateData($username, $data){
		$this->db->where('username', $username);
		$this->db->update('akun', $data);
	}

	function updatePassword($username, $newpassword){
		$this->db->set('password', $newpassword);
		$this->db->where('username', $username);
		$this->db->update('akun');
	}

}
?>