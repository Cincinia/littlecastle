<?php $this->load->view('user/header'); ?>

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>My account</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">

                            <li><a href="<?php echo base_url(); ?>">Home</a>
                            </li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="clearfix">

            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9 clearfix" id="customer-account">

                        <p class="lead">Change your personal details or your password here.</p>

                        <!-- /.box -->


                        <div class="box clearfix">
                            <div class="heading">
                                <h3 class="text-uppercase">Personal details</h3>
                            </div>

                            <form method="post" action="<?php echo base_url('Profile/update/'). $this->session->userdata('username'); ?>">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" disabled class="form-control" id="firstname" name="username" value="<?php echo $this->session->userdata('username'); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="fullname">Fullname</label>
                                            <input type="text" class="form-control" id="firstname" name="nama_lengkap" value="<?php echo $data[0]['nama_lengkap']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->


                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data[0]['alamat']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email_account">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $data[0]['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-save"></i> Save changes</button>

                                    </div>

                                </div>

                            </form>

                        </div>


                        <div class="box">

                            <div class="heading">
                                <h3 class="text-uppercase">Change password</h3>
                            </div>

                            <form method="post" action="<?php echo base_url('Profile/updatePassword'); ?>">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password_old">Old password</label>
                                            <input onchange="alert()" type="password" class="form-control" id="password_old">
                                            <input type="text" hidden id="passwordbenar" value="<?php echo $data[0]['password']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div id="alert" hidden class="alert alert-danger alert" role="alert">
                            				Please enter the right password.
                        			</div>
                        			</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password_1">New password</label>
                                            <input type="password" class="form-control" id="password_1" name="password_1">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password_2">Retype new password</label>
                                            <input onchange="valid()" type="password" class="form-control" id="password_2">
                                            <p id="salah"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div hidden class="alert alert-danger alert-dismissible" role="alert">
                            				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            				</button>
                            				Well done! You successfully read this important alert message.
                        			</div>
                        			</div>
                                </div>
                                <!-- /.row -->

                                <div class="text-center">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-save"></i> Save new password</button>
                                </div>
                            </form>

                        </div>

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

 <script type="text/javascript">

 function alert(){
        var olpas1 = document.getElementById('password_old').value;
        var olpas2 = document.getElementById('passwordbenar').value;
        if(olpas1 !=olpas2)
        {
             
            document.getElementById("alert").removeAttribute("hidden");
        }   
        else{
            document.getElementById("alert").setAttribute("hidden","");
        }
 	 
 }

 function valid()
    {
        // let Pswd is ID of password and cPswd is ID of confirm password text Box
        var pass1 = document.getElementById('password_1').value;
        var pass2 = document.getElementById('password_2').value;
        if(pass1 == pass2)
        {
            document.getElementById('salah').innerHTML="";
        }   
        else{

            document.getElementById('password_2').focus();
            document.getElementById('password_2').value="";
            document.getElementById('salah').innerHTML="Passwords are Not Matching";
        }
    }
 </script>
<?php $this->load->view('user/footer'); ?>