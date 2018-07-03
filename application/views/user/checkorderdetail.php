<?php $this->load->view('user/header'); ?>

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Order # <?php echo $ordernya[0]['kode_order']; ?></h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">

                            <li><a href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li><a href="<?php echo base_url('CheckOrder'); ?>">My orders</a>
                            </li>
                            <li>Order # <?php echo $ordernya[0]['kode_order']; ?></li>
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

                    <div class="col-md-9 clearfix" id="customer-order">

                        <p class="lead">Order #<?php echo $ordernya[0]['kode_order']; ?> was placed on <strong><?php echo $ordernya[0]['tgl_order']; ?></strong>.</p>

                        <div class="box">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Jumlah</th>
                                            <th>Material</th>
                                            <th>Ukuran (p x l x t) (meter)</th>
                                            <th>Harga Barang</th>
                                            <th>Ongkos Kirim</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="<?php echo base_url('./../foto/'). $ordernya[0]['kode_brg'] .'.jpg'; ?>" alt="<?php echo $ordernya[0]['kode_brg']; ?>">
                                                </a>
                                            </td>
                                            <td><a href="#"><?php echo $ordernya[0]['kode_brg']; ?></a>
                                            </td>
                                            <td><?php echo $ordernya[0]['jumlah']; ?></td>
                                            <td><?php echo $ordernya[0]['material']; ?></td>
                                            <td><?php echo $ordernya[0]['ukuran_p'].' x '. 
                                            $ordernya[0]['ukuran_l'] . ' x '. $ordernya[0]['ukuran_t']; ?></td>
                                            <td><?php echo $ordernya[0]['harga_barang']; ?></td>
                                            <td><?php echo $ordernya[0]['ongkir']; ?></td>
                                            <td><?php echo ($ordernya[0]['harga_barang']+ $ordernya[0]['ongkir']); ?> </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="row addresses">
                                <div class="col-sm-6">
                                    <h3 class="text-uppercase">Alamat Pengiriman</h3>
                                    <p><?php echo $akun[0]['nama_lengkap']; ?>
                                        <br><?php echo $ordernya[0]['alamat_jln']; ?>
                                        <br><?php echo $ordernya[0]['alamat_kel']; ?>
                                        <br><?php echo $ordernya[0]['alamat_kec']; ?>
                                        <br><?php echo $ordernya[0]['alamat_kota']; ?>
                                        <br><?php echo $ordernya[0]['alamat_kode_pos']; ?></p>
                                </div>
                            </div>
                            <!-- /.addresses -->

                        </div>
                        <!-- /.box -->

                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-3">
                        <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Customer section</h3>
                            </div>

                            <div class="panel-body">

                                <ul class="nav nav-pills nav-stacked">
                                    <li class="<?php echo $statusmyorder; ?>">
                                        <a href="<?php echo base_url('CheckOrder'); ?>"><i class="fa fa-list"></i> My orders</a>
                                    </li>
                                    <li class="<?php echo $statuseditprofil; ?>">
                                        <a href="<?php echo base_url('Profile'); ?>"><i class="fa fa-user"></i> My account</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('Akun/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.col-md-3 -->

                        <!-- *** CUSTOMER MENU END *** -->
                    </div>

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

<?php $this->load->view('user/footer'); ?>
