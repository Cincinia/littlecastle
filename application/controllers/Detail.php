<?php 

/**
* 
*/
class Detail extends CI_Controller
{
	function index($kode){

		$productall = $this->CatalogModel->getAll();
		$meja = $this->CatalogModel->getMeja();
		$kursi = $this->CatalogModel->getKursi();
		$dll = $this->CatalogModel->getDll();
		$jumlahAll = count($productall);
		$jumlahDll = count($dll);
		$jumlahMeja = count($meja);
		$jumlahKursi = count($kursi);

		$product = $this->DetailModel->getProduct($kode);
		$kategori = $product[0]['kategori'];
		if ($kategori == 'meja') {
			$class="";
			$classmeja="active";
			$classkursi="";
			$classdll="";
			$status="Meja";
		}
		elseif ($kategori == 'kursi') {
			$class="";
			$classmeja="";
			$classkursi="active";
			$classdll="";
			$status="Kursi";
		}
		else{
			$class="";
			$classmeja="";
			$classkursi="";
			$classdll="active";
			$status="Etc";
		}
		if ($this->session->userdata('role') != "customer") {
		//$anu = 'detail';
		}
		else{
		$anu = 'user/detail';
		}
		$this->load->view($anu, array('product'=> $product,
											'status'=>$status,
											'class'=>$class,
											'classmeja'=> $classmeja,
											'classkursi' => $classkursi,
											'classdll' => $classdll,
											'username' => $this->session->userdata('username'),
											'statushome' => '',
											'statuscatalog' => 'active',
											'statusprofile' =>'',
											'jumlahAll' => $jumlahAll,
											'jumlahMeja' => $jumlahMeja,
											'jumlahKursi'=> $jumlahKursi,
											'jumlahDll' => $jumlahDll
											));
	}
}

 ?>