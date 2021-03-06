<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Store</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="<?php echo base_url()?>assets/front2/img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/front2/lib/slick/slick.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/front2/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->

        <!-- <link href="<?php echo base_url()?>assets/front/css/price-range.css" rel="stylesheet"> -->
      <!--   <link href="<?php echo base_url()?>assets/front/css/main.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/front/css/responsive.css" rel="stylesheet"> -->
      



        <link href="<?php echo base_url()?>assets/front2/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        email@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +91-7412589631
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="Home" class="nav-item nav-link active">Home</a>
                            <a href="<?php echo base_url()?>products" class="nav-item nav-link">Products</a>
                            <!-- <a href="<?php echo base_url()?>product-details" class="nav-item nav-link">Product Detail</a> -->
                            <a href="<?php echo base_url()?>show-cart" class="nav-item nav-link">Cart</a>
                            <a href="<?php echo base_url()?>checkout" class="nav-item nav-link">Checkout</a>
                            <a href="<?php echo base_url()?>checkout" class="nav-item nav-link">My Account</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                                <div class="dropdown-menu">
                                    <a href="<?php echo base_url()?>show-WS" class="dropdown-item">Wishlist</a>
                                    <a href="<?php echo base_url()?>checkout" class="dropdown-item">Login & Register</a>
                                    <a href="<?php echo base_url()?>contact-form" class="dropdown-item">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu"> -->
                                <div >
                                    <?php $customer_id = $this->session->userdata('cus_id');?>
                                   <?php if($customer_id){?>
                                    <a href="<?php echo base_url()?>logout" class="nav-item nav-link">Logout</a>
                                    <?php }else{ ?>
                                    <a href="<?php echo base_url()?>checkout" class="nav-item nav-link">Login $ Register</a>
                                    <?php } ?>
                                </div>
                                  <!--   <a href="#" class="dropdown-item">Register</a> -->
                                <!-- </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="<?php echo base_url()?>Home">
                                <img src="<?php echo base_url()?>assets/front2/img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                          <!--   <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button> -->

                            <form class="search" action="<?php echo base_url()?>search" method="post">
                            <input type="text" name="search" placeholder="search" />
                            <button type="submit"><i class="fa fa-search"></i></button>                            
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                          <!--   <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a> -->

                            <a class="btn cart" href="<?php echo base_url()?>show-cart">
                                 <?php $cart_items =  $this->cart->total_items();
                                     if($cart_items>0){
                                    ?> 
                                    <i class="fa fa-shopping-cart"></i>
                                <span>(<?php echo $cart_items;?>)</span>
                                
                                <?php }else{?>
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                                <?php } ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->    