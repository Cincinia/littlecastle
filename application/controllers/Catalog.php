<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

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
		$status = 'All Item';
		$class = 'active';
		$classmeja = '';
		$classkursi= '';
		$classdll= '';
		$product = $this->CatalogModel->getAll();
		$meja = $this->CatalogModel->getMeja();
		$kursi = $this->CatalogModel->getKursi();
		$dll = $this->CatalogModel->getDll();
		$jumlahAll = count($product);
		$jumlahDll = count($dll);
		$jumlahMeja = count($meja);
		$jumlahKursi = count($kursi);
		if ($this->session->userdata('role') != "customer") {
		redirect(base_url('Home'));
		}
		else{
		$this->load->view('user/catalog', array('product'=> $product, 
												'meja' => $meja,
												'status' => $status, 
												'class'=>$class, 
												'classmeja'=> $classmeja, 
												'classkursi'  => $classkursi,
												'classdll' => $classdll,
												'jumlahAll' => $jumlahAll,
												'jumlahMeja' => $jumlahMeja,
												'jumlahKursi'=> $jumlahKursi,
												'jumlahDll' => $jumlahDll,
												'statushome'=>'',
												'statusprofile'=>'',
												'statuscatalog'=>'active',
												'username' => $this->session->userdata('username')
												));
		}	
		
	}

	public function indexto($kategori){
		if ($kategori=='meja') {
			$product = $this->CatalogModel->getMeja();
			$class = '';
			$classmeja = 'active';
			$classkursi= '';
			$classdll ='';
		}
		elseif ($kategori=='kursi') {
			$product = $this->CatalogModel->getKursi();
			$class = '';
			$classmeja = '';
			$classkursi= 'active';
			$classdll ='';
		}
		else{
			$product = $this->CatalogModel->getDll();
			$class = '';
			$classmeja = '';
			$classkursi= '';
			$classdll ='active';
		}
		
		
		$status = $kategori;
		$jumlahAll = count($this->CatalogModel->getAll());
		$jumlahMeja = count($this->CatalogModel->getMeja());
		$jumlahKursi = count($this->CatalogModel->getKursi());
		$jumlahDll = count($this->CatalogModel->getDll());
		if ($this->session->userdata('role') != "customer") {
		redirect(base_url('Home'));
		}
		else{
		$this->load->view('user/catalog', array('product'=> $product, 
												'status' => $status, 
												'class'=>$class, 
												'classmeja'=> $classmeja, 
												'classkursi'  => $classkursi,
												'classdll' => $classdll,
												'jumlahAll' => $jumlahAll,
												'jumlahMeja' => $jumlahMeja,
												'jumlahKursi'=> $jumlahKursi,
												'jumlahDll' => $jumlahDll,
												'statushome'=>'',
												'statusprofile'=>'',
												'statuscatalog'=>'active',
												'username' => $this->session->userdata('username')
												));
		}
		
	}
}
