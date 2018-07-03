<?php $this->load->view('user/header'); ?>
<div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Ordering <?php echo $product[0]['nama_brg']; ?></h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                        	<li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url('Catalog'); ?>">Collection</a>
                            </li>
                            <li><a href="<?php echo base_url('Catalog/indexto/').$product[0]['kategori']; ?>"><?php echo $status; ?></a>
                            </li>
                            <li><?php echo $product[0]['nama_brg']; ?>
                            </li>
                            <li>Order</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
		    _________________________________________________________ -->

                    <div class="col-md-9">

                        <p class="lead"><?php echo $product[0]['deskripsi']; ?>
                        </p>
                        <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Scroll ke bagian detail.</a>
                        </p>

                        <div class="row" id="productMain">
                            <div class="col-sm-6">
                                <div id="mainImage">
                                    <img src="<?php echo base_url('./../foto/'). $product[0]['kode_brg'] .'.jpg'; ?>" alt="" class="img-responsive">
                                </div>

                               
                                <!-- /.ribbon -->

                            </div>
                            <div class="col-sm-6">
                                <div class="box">
                                        <form method="post" action="<?php echo base_url('Order/addToOrder/'); ?>">
                                            <div class="form-group">
                                            <label for="kode_brg">Kode Barang</label>
                                        	<input class="form-control" type="text" value="<?php echo  $product[0]['kode_brg']; ?>" name="kode_brg" id="kode_brg" readonly>
                                            </div>
                                            <div class="form-group">
                                            <label for="nama_brg">Nama Barang</label>
                                        	<input class="form-control" type="text" value="<?php echo  $product[0]['nama_brg']; ?>" name="nama_brg" id="nama_brg" readonly>
                                            </div>
                                            <div class="form-group">
                                            <label for="username">Nama Pembeli</label>
                                            <input class="form-control" type="text" value="<?php echo  $this->session->userdata['username']; ?>" name="username" id="username" readonly>
                                            </div>
                                            <div class="form-group">
                                            <label for="jumlah">Jumlah</label>
                                            <input class="form-control" type="number" min="1" max="20" value="" name="jumlah" id="jumlah" required>
                                            </div>
                                            <div class="form-group">
                                            <label for="material">Material</label>
                                            <br>
                                            <select name="material">
                                                <option value="<?php echo $product[0]['material'];?>"><?php echo $product[0]['material']; ?></option>
                                                <option value="kayu_menganti">Kayu Meranti</option>
                                                <option value="kayu_borneo">Kayu Borneo</option>
                                                <option value="kamper">Kamper</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                            <div class="form-group col-sm-4">
                                            <label for="ukuran_p">Ukuran Panjang (meter)</label>
                                            <input class="form-control" type="number" min="1" value="" name="ukuran_p" id="ukuran_p" required>
                                            </div>
                                            <div class="form-group col-sm-4">
                                            <label for="ukuran_l">Ukuran Lebar (meter)</label>
                                            <input class="form-control" type="number" min="1" value="" name="ukuran_l" id="ukuran_l" required>
                                            </div>
                                            <div class="form-group col-sm-4">
                                            <label for="ukuran_t">Ukuran Tinggi (meter)</label>
                                            <input class="form-control" type="number" min="1" value="" name="ukuran_t" id="ukuran_t" required>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="alamat_jln">Alamat Pengiriman</label>
                                            <input class="form-control" type="text" value="<?php echo $akun[0]['alamat']; ?>" name="alamat_jln" id="alamat_jln" required>
                                            </div>
                                            <div class="row">
                                            <div class="form-group col-sm-6">
                                            <label for="alamat_kec">Kecamatan</label>
                                            <input class="form-control" type="text" value="<?php echo set_value('alamat_kec');?>" name="alamat_kec" id="alamat_kec" required>
                                            </div> 
                                            <div class="form-group col-sm-6">
                                            <label for="alamat_kec">Kelurahan</label>
                                            <input class="form-control" type="text" value="<?php echo set_value('alamat_kel');?>" name="alamat_kel" id="alamat_kel" required>
                                            </div>    
                                            </div>
                                            <div class="row">
                                            <div class="form-group col-sm-6">
                                            <label for="alamat_kota">Kota</label>
                                            <input class="form-control" type="text" value="<?php echo set_value('alamat_kota');?>" name="alamat_kota" id="alamat_kota" required>
                                            </div> 
                                            <div class="form-group col-sm-6">
                                            <label for="alamat_kode_pos">Kode Pos</label>
                                            <input class="form-control" type="text" value="<?php echo set_value('alamat_kode_pos');?>" name="alamat_kode_pos" id="alamat_kode_pos" required>
                                            </div>    
                                            </div>
                                            <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Submit Order</button>
                                        </form>

                                    
                                </div>

                                
                            </div>

                        </div>


                        <div class="box" id="details">
                            <p>
                                <h4>Detail</h4>
                                <p><?php echo $product[0]['deskripsi']; ?></p>
                                <h4>Material</h4>
                                <ul>
                                    <li><?php echo $product[0]['material']; ?></li>
                                </ul>
                                 <blockquote>
                                    <p><em>Rating: <?php echo $product[0]['rating'] ?></em>
                                    </p>
                                </blockquote>
                        </div>



                        


                    </div>
                    <!-- /.col-md-9 -->
                    <div class="col-sm-3">

                        <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Categories</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked category-menu">
                                    <li class="<?php echo $class; ?>">
                                        <a href="<?php echo base_url('Catalog/index'); ?>">All <span class="badge pull-right"><?php echo $jumlahAll; ?></span></a>
                                    </li>
                                    <li class="<?php echo $classmeja; ?>">
                                        <a href="<?php echo base_url('Catalog/indexto/meja'); ?>">Tables  <span class="badge pull-right"><?php echo($jumlahMeja); ?></span></a>
                                    <li class="<?php echo $classkursi; ?>">
                                        <a href="<?php echo base_url('Catalog/indexto/kursi'); ?>">Chairs  <span class="badge pull-right"><?php echo($jumlahKursi); ?></span></a>
                                    </li>
                                    <li class="<?php echo $classdll; ?>">
                                        <a href="<?php echo base_url('Catalog/indexto/dll'); ?>">Lemari  <span class="badge pull-right"><?php echo($jumlahDll); ?></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        

                    </div>

 </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
<?php $this->load->view('user/footer'); ?>