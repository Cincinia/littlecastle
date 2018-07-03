<?php 

/**
* 
*/
class Order extends CI_Controller
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
		$akun = $this->AkunModel->getAcc($this->session->userdata['username']);
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
		$anu = 'user/order';
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
											'jumlahDll' => $jumlahDll,
											'akun' => $akun
											));
	}

	function addToOrder(){
            $kode_order = time();
			$data = array(
			'kode_order' => $kode_order,
			'kode_brg' => $this->input->post('kode_brg'),
			'username' =>  $this->session->userdata['username'],
			'jumlah' => $this->input->post('jumlah'),
			'material' => $this->input->post('material'),
			'ukuran_p' => $this->input->post('ukuran_p'),
			'ukuran_l' => $this->input->post('ukuran_l'),
			'ukuran_t' => $this->input->post('ukuran_t'),
			'alamat_jln' => $this->input->post('alamat_jln'),
			'alamat_kel' => $this->input->post('alamat_kel'),
			'alamat_kec' => $this->input->post('alamat_kec'),
			'alamat_kota' => $this->input->post('alamat_kota'),
			'alamat_kode_pos' => $this->input->post('alamat_kode_pos'),
			'tgl_order' => date("Y-m-d H:i:s")
		);
		$this->OrderModel->addPesanan($data);
        redirect(base_url('CheckOrder'));
    }
}

 ?>