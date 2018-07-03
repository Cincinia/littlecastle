<?php 

/**
* 
*/
class CheckOrder extends CI_Controller
{
	function index(){
		$order = $this->OrderModel->getOrder($this->session->userdata('username'));

		if ($this->session->userdata('role') != "customer") {
		redirect(base_url('Akun'));
		}
		else{
		$this->load->view('user/checkorder', array('username' => $this->session->userdata('username'),
									  'statushome' => '',
									  'statuscatalog' => '',
									  'statusprofile' =>'active',
									  'statusmyorder' => 'active',
									  'statuseditprofil' => '',
									  'order' => $order
									));
		}
		
	}

	public function indexto($kode)
	{
		$akun = $this->AkunModel->getAcc($this->session->userdata('username'));
		$ordernya = $this->OrderModel->getOrderBy($kode);
		$this->load->view('user/checkorderdetail', array('ordernya'=>$ordernya,
															  'username' => $this->session->userdata('username'),
															  'statushome' => '',
															  'statuscatalog' => '',
															  'statusprofile' =>'active',
															  'statusmyorder' => 'active',
															  'statuseditprofil' => '',
															  'akun' => $akun
															  ));

	}

	public function deleteOrder($kode)
	{
		$this->OrderModel->deleteData($kode);
 		$this->index();
	}

	public function updateOrder($kode)
        {
                $config['upload_path']          = './../foto/buktitf/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 10000000;
                $config['max_width']            = 10000000;
                $config['max_height']           = 100000000;
                $config['file_name']			= $kode.'.jpg';
                $config['overwrite']			= TRUE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload("img".$kode))
                {

                	$eror = $this->upload->data();
                	if ($eror['file_size'] != "") {
        
                			print_r($this->upload->data());

                	}
                	else{
                		$data = array(
						'status_bayar' => '1'
						);
                		$this->OrderModel->updateData($kode, $data);
 						$this->index();
                		}
                	
                }
                else
                {
						$data = array(
						'status_bayar' => '1'
						);
                		$this->OrderModel->updateData($kode, $data);
 						$this->index();
                		}
                }
        
 		

}

 ?>