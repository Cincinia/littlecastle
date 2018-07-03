<?php $this->load->view('user/header'); ?>
<div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1><?php echo $product[0]['nama_brg']; ?></h1>
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
                                        <p class="price"><?php echo $product[0]['nama_brg'] ?> </p>
                                        <p class="text-center"><?php echo 'Range harga: Rp.' . $product[0]['harga_min']; ?>
                                        <?php echo '- Rp.' . $product[0]['harga_max']; ?>
                                        </p>

                                        <p class="text-center">
                                        <br>
                                        <form method="post" action="<?php echo base_url('Order/index/'. $product[0]['kode_brg']); ?>">
                                        	<input type="text" value="<?php echo  $product[0]['kode_brg']; ?>" name="id" hidden>
                                        	<input type="text" value="<?php echo  $product[0]['nama_brg']; ?>" name="name" hidden>
                                            <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Order Now</button>
                                        </form>
                                        </p>

                                    
                                </div>

                                <div class="row" id="thumbs">
                                    <div class="col-xs-4">
                                        <a href="<?php echo base_url('./../foto/'). $product[0]['kode_brg'] .'.jpg'; ?>" class="thumb">
                                            <img src="<?php echo base_url('./../foto/'). $product[0]['kode_brg'] .'.jpg'; ?>" alt="foto <?php echo $product[0]['nama_brg']; ?> 1" class="img-responsive">
                                        </a>
                                    </div>
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
                                        <a href="<?php echo base_url('Catalog/indexto/dll'); ?>">Etc  <span class="badge pull-right"><?php echo($jumlahDll); ?></span></a>
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