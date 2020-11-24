<?php $this->load->view('front/header');?>   
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Login & Register</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Login Start -->
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">    
                        <div class="register-form">
                            <div class="row">
                                <h2>New User Signup!</h2>
                                <h5 style='color:red'> <?php echo validation_errors();?></h5>

                                <form class="form-inline" action="<?php echo base_url()?>customer-registration" method="post">
                                <div class=" form-group col-md-6">
                                    <label class="">Name</label>
                                    <input class="form-control" name="cus_name" type="text" placeholder="Name">
                                </div>
                               <!--  <div class=" form-group  col-md-6">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" placeholder="Last Name">
                                </div> -->
                                <div class=" form-group  col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email" name="cus_email" placeholder="E-mail">
                                </div>
                                <!-- <div class=" form-group col-md-6">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="text" placeholder="Mobile No">
                                </div> -->
                                <div class=" form-group col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="cus_password" placeholder="Password">
                                </div>
                                <div class=" form-group col-md-6">
                                    <label>Retype Password</label>
                                    <input class="form-control" type="password" name="con_pass" placeholder="Password">
                                </div>
                                <div class=" form-group col-md-12">
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-form">
                            <div class="row">
                                <h2>Login to your account</h2>
                                <!-- <h4 style='color:red'>
                             <?php// echo $this->session->flashdata('flash_msg'); ?> 
                           </h4> -->



                         <!--   <form action="<?php echo base_url()?>customer-login" method="post">
                            
                            <input type="email" placeholder="Email Address" name="cus_email" />
                            <input type="password" placeholder="Password" name="cus_password" />
                            <span>
                                <input type="checkbox" name="remember" value="on" class="checkbox"> 
                                Keep me signed in
                            </span>
                            <button type="submit" class="btn btn-default">Login</button>
                        </form>
 -->


                           <form action="<?php echo base_url()?>customer-login" method="post">
                                <!-- <div class="col-md-6"> -->
                                    <label>E-mail / Username</label>
                                    <input class="form-control" name="cus_email" type="email" placeholder="E-mail / Username">
                                <!-- </div> -->
                                <!-- <div class="col-md-6"> -->
                                    <label>Password</label>
                                    <input type="password" name="cus_password" class="form-control" type="text" placeholder="Password">
                                <!-- </div> -->
                                <!-- <div class="col-md-12"> -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" id="newaccount">
                                        <label class="custom-control-label" for="newaccount">Keep me signed in</label>
                                    <!-- </div> -->
                                </div>
                                <!-- <div class="col-md-12"> -->
                                    <button type="submit" class="btn">Login</button>
                                <!-- </div> -->
                            </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login End -->
        
<?php $this->load->view('front/footer');?>   