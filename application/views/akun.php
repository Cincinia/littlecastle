<?php $this->load->view('header'); ?>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

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
                                <input type="text" class="form-control" id="email_modal" placeholder="username" name="username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password" name="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="<?php echo base_url('Akun/index'); ?>"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>New account / Sign in</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li>New account / Sign in</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <h2 class="text-uppercase">New account</h2>

                            <p class="lead">Not our registered customer yet?</p>
                            <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                            <hr>
                            <h3 style="color:red" ><?php echo $errornya; ?></h3>

                            <hr>

                            <form action="<?php echo base_url('Akun/validasi')?>" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username" value="<?php echo set_value('username');?>" placeholder="Use unique username">
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Full Name</label>
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?php echo set_value('nama_lengkap');?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" value="<?php echo set_value('email');?>" placeholder="Input a valid email!">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Address</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo set_value('alamat');?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Minimal 8 characters!">
                                    <input type="checkbox" onclick="myFunction()">Show Password
                                </div>
                                <div class="form-group">
                                    <label for="retype_password">Retype Password</label>
                                    <input type="password" class="form-control" id="retype_password" name="retype_password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i> Register</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box">
                            <h2 class="text-uppercase">Login</h2>

                            <p class="lead">Already our customer?</p>
                            <p class="text-muted">Please sign in here!</p>
                            <hr>
                            <h3 style="color:red" ><?php echo $errornya2; ?></h3>

                            <hr>
                            <hr>

                            <form action="<?php echo base_url('Akun/login')?>" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
 <script type="text/javascript">

      function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }

    }


      function myFunction2() {
      var x = document.getElementById("retypepassword");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }}
    </script>
<?php $this->load->view('footer'); ?>