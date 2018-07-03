<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$jumlahakun = count($this->HomeModel->getUser());
		$jumlahbarang = count($this->HomeModel->getProduct());
		$jumlahpesanan = count($this->HomeModel->getOrder());
		$product = $this->HomeModel->getBest();
		$promo = $this->HomeModel->getPromo();
		if ($this->session->userdata('role') != "customer") {
		$anu = 'home';
		}
		else{
		$anu = 'user/home';
		}	
		$this->load->view($anu, array('statushome'=>'active',
									  'statusprofile'=>'',
									  'statuscatalog'=>'',
									  'username'=>$this->session->userdata('username'),
									  'jumlahakun' =>$jumlahakun,
									  'jumlahpesanan' => $jumlahpesanan,
									  'jumlahbarang' => $jumlahbarang,
									  'product' => $product,
									  'promo' => $promo
									  ));
	}
}
