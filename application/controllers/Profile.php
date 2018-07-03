<?php 

/**
* 
*/
class Profile extends CI_Controller
{
	function index(){
		$akun = $this->AkunModel->getAcc($this->session->userdata('username'));
		if ($this->session->userdata('role') != "customer") {
		redirect(base_url());
		}
		else{
		$this->load->view('user/profile', array('data' => $akun,
											'username' => $this->session->userdata('username'),
											'statushome' => '',
											'statuscatalog' => '',
											'statusprofile' =>'active',
											'statuseditprofil' => 'active',
											'statusmyorder' => '',
											));
		}
		
	}

	public function update($username){
 			$data = array(
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email')
			);
 			$this->AkunModel->updateData($username, $data);
 			$this->index();
 	}

 	function updatePassword(){
 		$username = $this->session->userdata('username');
 		$newpassword = $this->input->post('password_1');
 		$this->AkunModel->updatePassword($username, $newpassword);
 		$this->index();
 	}
}

 ?>