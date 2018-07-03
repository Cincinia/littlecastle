<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('akun', array('errornya'=>'', 'errornya2'=>''));
	}

	public function validasi(){
		$this->form_validation->set_rules('username','Username','required|max_length[20]|is_unique[akun.username]',
                                                array('is_unique'=>'Username is already exist. Try another username!'));
		$this->form_validation->set_rules('password','Password','required|max_length[20]|min_length[8]');
		$this->form_validation->set_rules('retype_password','Retype Password','matches[password]',
												array('matches'=>'Password does not match!'));
        $this->form_validation->set_rules('email','Email','required|valid_email');
               
                  
 
		if($this->form_validation->run() != false){
			$this->register();
		}else{
            $this->load->view('akun', array('errornya'=>validation_errors(), 'errornya2'=>''));
		}
	}

	function register(){
               
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
		);
		$this->AkunModel->addAcc($data);
        redirect(base_url('Home'));
    }

    function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$isLogin = $this->AkunModel->login_authen($username, $password);
		$iyalogin = $isLogin->result_array();

		if ($isLogin->num_rows() > 0 && $iyalogin[0]['role']==1) {
			$data_session = array(
							'username' => $username,
							'role' => "customer");
			$this->session->set_userdata($data_session);
			redirect(base_url("Home")); 
		}
        
        elseif ($isLogin->num_rows() > 0 && $iyalogin[0]['role']==0) {
                    $data_session = array(
							'username' => $username,
							'role' => "admin");
			$this->session->set_userdata($data_session);
            redirect(base_url('./../olshopadmin/'));
		}

		else{
			 $this->load->view('akun', array('errornya2'=>'Your username or password is incorrect!', 'errornya'=>''));
		}
	}

	function logout(){
                $this->session->unset_userdata('username');
                $this->session->unset_userdata('role');
                 $this->session->unset_userdata('password');
		$this->session->sess_destroy();
		redirect(base_url('Home'));

}   
}
