<?php $this->load->view('header'); ?>

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('Akun/login'); ?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" placeholder="username" name="username" >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="password" name="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="<?php echo base_url('Akun/index'); ?>"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to view our design!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->

        <section class="no-mb">
            <!-- *** JUMBOTRON ***
 _________________________________________________________ -->

            <div class="jumbotron">

                <div class="dark-mask"></div>

                <div class="container">
                    <div class="row mb-small">
                        <div class="col-sm-12 text-center">
                            <h1>Little Castle</h1>
                            <h2>More than just a design of your table and chair!</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mb-small">
                            <img class="img-responsive" src="img/template-mac.png" alt="">
                        </div>

                        <div class="col-sm-6 text-center-xs">
                            <p class="text-uppercase">We provide you to:
                                <br />Custom your own material for manufacturing
                                <br />Custom your own height, width, length.</p>
                            <p>And the super cool designs!
                                <br />just for you.</p>
                            <p><a href="<?php echo base_url('Akun'); ?>" class="scroll-to btn btn-template-transparent-black">See more</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** JUMBOTRON END *** -->
        </section>
        <?php foreach ($promo as $pro) {?>
            <section class="bar background-gray no-mb padding-big text-center-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-uppercase"><?php echo $pro['judul_promo']; ?></h2>
                        <p class="lead mb-small"><?php echo $pro['deskripsi_singkat'] ?></p>
                        <p class="mb-small"><?php echo $pro['deskripsi_lengkap'] ?></p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="<?php echo base_url('./../foto/promo/'). $pro['kode_promo']. '.jpg'; ?>" alt="<?php echo $pro['judul_promo']; ?>" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
      


        <section class="bar background-image-fixed-2 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="icon icon-lg"><i class="fa fa-file-code-o"></i>
                        </div>
                        <h1>Do you want to see more?</h1>
                        <p class="lead">We have prepared for you many designs of chairs and tables that available to be ordered by you!</p>
                        <p class="text-center">
                            <a href="<?php echo base_url('Akun')?>" class="btn btn-template-transparent-black btn-lg">Login Now!</a>
                        </p>
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

        <!-- *** GET IT ***
_________________________________________________________ -->

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>This is us! LITTLE CASTLE!</h3>
                </div>
                
            </div>
        </div>


        <!-- *** GET IT END *** -->

<?php $this->load->view('footer'); ?>
