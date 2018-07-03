 <?php $this->load->view('user/header'); ?>

 <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1><?php echo($status); ?></h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url('Home'); ?>">Home</a>
                            </li>
                            <li><?php echo($status); ?></li>
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

                       

                        <!-- *** MENUS AND FILTERS END *** -->

                        

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			_________________________________________________________ -->

                    <div class="col-sm-9">

                        <p class="text-muted lead">Welcome to Little Castle Catalogue!</p>

                        <div class="row products">
                            <?php foreach ($product as $p) {?>
                            <div class="col-md-4 col-sm-6">
                                <div class="box-image">
                                    <div class="image">
                                        <a href="<?php echo base_url('Detail/index/'). $p['kode_brg']; ?>">
                                            <img src="<?php echo base_url('./../foto/'). $p['kode_brg']. '.jpg'; ?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                     <div class="text">
                                        <p class="buttons">
                                            <a href="<?php echo base_url('Detail/index/'). $p['kode_brg']; ?>"  class="btn btn-template-primary">View detail</a>
                                            <br> 
                                            <br>    
                                            <form method="post" action="<?php echo base_url('Order/index/'). $p['kode_brg']; ?>">
                                            <input name="name" type="text" value="<?php echo $p['nama_brg']; ?>" hidden>
                                            <input name="id" type="text" value="<?php echo $p['kode_brg']; ?>" hidden>
                                                <button type="submit" class="btn btn-template-primary"><i class="fa fa-shopping-cart"></i>Order Now</button>
                                            </form>
                                            
                                        </p>
                                    </div>
                                </div>
                                <div class="product">
                                    
                                    <!-- /.image -->
                                    <div class="text">
                                        <h3><a href="<?php echo base_url('Detail/index/'). $p['kode_brg']; ?>"><?php echo $p['nama_brg']; ?></a></h3>
                                        <p class="price">Range Harga: Rp. <?php echo $p['harga_min']; ?> - Rp. <?php echo $p['harga_max']; ?> </p>
                                         <p><?php echo $p['deskripsi']; ?></p>
                    
                                    </div>
                                    <!-- /.text -->

                                    
                                    <!-- /.ribbon -->
                                </div>
                                <!-- /.product -->
                            </div>
                            <?php } ?>
                        </div>
                        <!-- /.products -->

                      


                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>

            </div>
            <!-- /.container -->
        </div>

        <?php $this->load->view('user/footer'); ?>
 