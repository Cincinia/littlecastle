  <?php $this->load->view('user/header'); ?>

  <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>My orders</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">

                            <li><a href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li>My orders</li>
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

                    <div class="col-md-9" id="customer-orders">

                        <p class="text-muted lead">If you have any questions, please feel free to contact us at: +6285-066-911-20</p>

                        <div class="box">

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order Number</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($order as $o) {?>
                                        <tr>
                                            <th># <?php echo $o['kode_order']; ?></th>
                                            <td><?php echo $o['tgl_order']; ?></td>
                                            <?php if($o['harga_barang']==0&&$o['ongkir']==0){  ?>
                                                <td><?php echo 'Harga belum dikonfirmasi';?></td>
                                            <?php } else{ ?>
                                                <td><?php echo ($o['harga_barang']+$o['ongkir']);?></td>
                                               <?php }?>
                                            <?php if ($o['status_order']==0) {?>
                                                 <td><span class="label label-warning">Belum Dikonfirmasi</span>
                                            </td>
                                           <?php }elseif ($o['status_order']==1) {?>
                                                <td><span class="label label-danger">Menunggu Pembayaran</span>
                                            </td>
                                           <?php }elseif ($o['status_order']==2) { ?>
                                                <td><span class="label label-info">Proses Pembuatan</span>
                                            </td>
                                           <?php }elseif ($o['status_order']==3) { ?>
                                                <td><span class="label label-info">Proses Pengiriman</span>
                                            </td>
                                            <?php }elseif ($o['status_order']==4) {?>
                                                <td><span class="label label-success">Order Selesai</span>
                                            </td>
                                           <?php }?>
                                           
                                            <td><a href="<?php echo base_url('CheckOrder/indexto/'). $o['kode_order']; ?>" class="btn btn-template-main btn-sm">View</a>
                                            <?php if($o['status_order']!=1||0){

                                            }
                                            else{ ?>
                                                <a href="<?php echo base_url().'/CheckOrder/deleteOrder/'. $o['kode_order']; ?>" id="<?php echo 'delete'.$o['kode_order']; ?>" role="button" class="btn btn-template-main label-danger" onclick="confirmation('<?php echo $o['kode_order']; ?>')">Cancel Order</a>
                                                <br><br>
                                               <?php } ?>
                                            <?php if ($o['status_order']==1) { 
                                                if ($o['status_bayar']==0) {
                                                    
                                                }
                                                else{ ?>
                                                <p style="color:green"><strong>Status Pembayaran: Uploaded</p>
                                                <?php }
                                                echo form_open_multipart('CheckOrder/updateOrder/'.$o['kode_order']);
                                                ?>
                                                
                                                <input type="file" id="<?php echo 'file'.$o['kode_order']; ?>" name="<?php echo 'img'.$o['kode_order']; ?>">
                                                <button class="btn btn-template-main label-success">Upload Bukti Pembayaran</button>
                                           <?php }  
                                           else{}?>
                                            
                                            </td>
                                        </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

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


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

  <script type="text/javascript">
      
       function confirmation(a){
        if (confirm("Apa Anda yakin akan cancel order?") !== true) {
            document.getElementById("delete"+a).href = "<?php echo site_url().'/CheckOrder/'; ?>";
        }
        else{
        }
    }


  </script>      

  <?php $this->load->view('user/footer'); ?>