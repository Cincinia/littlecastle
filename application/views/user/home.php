<?php $this->load->view('user/header'); ?>
<section>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

            <div class="home-carousel">

                <div class="dark-mask"></div>

                <div class="container">
                    <div class="homepage owl-carousel">
                    <?php foreach ($promo as $pro) { ?>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <p>
                                    </p>
                                    <h1><?php echo $pro['judul_promo']; ?></h1>
                                    <p><?php echo $pro['deskripsi_singkat']; ?>
                                        <br /><?php echo $pro['deskripsi_lengkap']; ?></p>
                                </div>
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="<?php echo base_url('./../foto/promo/'). $pro['kode_promo']. '.jpg'; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    
                    <?php } ?>

                    
                    <!-- /.project owl-slider -->
                </div>
            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>

        <section class="bar background-white no-mb">
            <div class="container" data-animate="fadeInUp">
                <div class="row">
                    <div class="col-md-12">

                        
                        <div class="heading text-center">
                            <h3>Our Best Products</h3>
                        </div>

                        <div class="row portfolio no-space">
                            <?php foreach ($product as $p) {?>
                            <div class="col-sm-4">
                                <div class="box-image">
                                    <div class="image">
                                        <img src="<?php echo base_url('./../foto/'). $p['kode_brg']. '.jpg'; ?>" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="name">
                                        <h3><a href="<?php echo base_url('Detail/index/'). $p['kode_brg']; ?>"><?php echo $p['nama_brg']; ?></a></h3> 
                                    </div>
                                    <div class="text">
                                        <p class="hidden-sm"><?php echo $p['deskripsi']; ?></p>
                                        <p class="buttons">
                                            <a href="<?php echo base_url('Detail/index/'). $p['kode_brg']; ?>" class="btn btn-template-transparent-primary">View</a>
                                            <a href="<?php echo base_url('Order/index/'). $p['kode_brg']; ?>" class="btn btn-template-transparent-primary">Order Now</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.box-image -->

                            </div>
                            <?php } ?>
                            
                        </div>

                        <div class="see-more">
                            <a href="<?php echo base_url('Catalog'); ?>" class="btn btn-template-main">See more of our products</a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="bar background-pentagon no-mb">
            <div class="container">
                <div class="row showcase">
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-align-justify"></i>
                            </div>
                            <h4><span class="counter"><?php echo($jumlahbarang); ?></span><br>

		Products</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                            <h4><span class="counter"><?php echo($jumlahakun); ?></span><br>

		Total Customers</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-copy"></i>
                            </div>
                            <h4><span class="counter"><?php echo($jumlahpesanan); ?></span><br>

		Orders</h4>
                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.bar -->



<?php $this->load->view('user/footer'); ?>
    
