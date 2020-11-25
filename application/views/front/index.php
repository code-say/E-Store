<?php $this->load->view('front/header');?>   
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                        
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i>Best Selling</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>New Arrivals</a>
                                </li>


















            <?php $all_category = $this->CategoryModel->get_all_category();?>
            <?php $all_brands = $this->BrandModel->get_all_brand();?>
            <?php $all_sub_category = $this->CategoryModel->get_all_sub_category();?>
            <?php foreach ($all_category as  $maincat) {?>




                                 <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url().$maincat->category_name ?>"><i class="fa fa-plus-square"></i><?php echo $maincat->category_name?></a>
                                </li>

                               <!--  <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                                </li> -->


            <?php }?>

                            </ul>
                        </nav>
                    </div>

                    <?php $all_slider = $this->ProductModel->get_all_top_product()?>

                    <div class="col-md-6">

                


                        <div class="header-slider normal-slider">

                            <?php
                $i=1;
                foreach ($all_slider as $slider) {
                    // if($i==1){
                    //     echo "<div class='item active'>";
                    // }else{
                    //     echo "<div class='item'>";
                    // }
                ?>
                            <div class="header-slider-item">
                                <img style=" width: 100%; height: auto;" src="<?php echo base_url().$slider->pro_image;?>" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <h2><?php echo $slider->pro_title;?></h2>
                                    <?php echo $slider->pro_desc;?>
                                    <a class="btn" href="<?php echo base_url()?>product-details/<?php echo $slider->pro_id?>"><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div> 

                            <?php $i++; } ?>
                          <!--   <div class="header-slider-item">
                                <img src="<?php echo base_url()?>assets/front2/img/slider-2.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="<?php echo base_url()?>assets/front2/img/slider-3.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div> -->
                        </div>

                    

                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="<?php echo base_url()?>assets/front2/img/category-1.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="<?php echo base_url()?>assets/front2/img/category-2.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="<?php echo base_url()?>assets/front2/img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="<?php echo base_url()?>assets/front2/img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="<?php echo base_url()?>assets/front2/img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="<?php echo base_url()?>assets/front2/img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="<?php echo base_url()?>assets/front2/img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="<?php echo base_url()?>assets/front2/img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->      
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Secure Payment</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Worldwide Delivery</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>90 Days Return</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>24/7 Support</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->      
        
        <!-- Category Start-->
        <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="<?php echo base_url()?>assets/front2/img/category-3.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="<?php echo base_url()?>assets/front2/img/category-4.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="<?php echo base_url()?>assets/front2/img/category-5.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="<?php echo base_url()?>assets/front2/img/category-6.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="<?php echo base_url()?>assets/front2/img/category-7.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="<?php echo base_url()?>assets/front2/img/category-8.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us for any queries</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+012-345-6789</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Featured Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">


    <?php $allproduct = $this->ProductModel->get_all_product_limit();?>
    <?php foreach ($allproduct as $product) {?>
    <?php if($product->pro_status==1){?>


                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="<?php echo base_url()?>product-details/<?php echo $product->pro_id?>"><?php echo $product->pro_title?></a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="<?php echo base_url().$product->pro_image?>" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>

                        <form action="<?php echo base_url()?>add-to-WL"  method="post">
                            
                            <input type="hidden" value="1" name="qty"/>
                            <input type="hidden" value="<?php echo $product->pro_id?>" name="pro_id"/>
                            <button type="submit" class="btn btn-default" >
                                <i class="fa fa-heart"></i></button>
                           
                        </form> 


                                    <!-- <a href="#"><i class="fa fa-heart"></i></a> -->
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span><?php echo $product->pro_price?></h3>
                               <!--  <a class="btn" href="<?php echo base_url()?>add-to-cart/<?php echo $product->pro_id?>"><i class="fa fa-shopping-cart"></i>Buy Now</a> -->

                        <form action="<?php echo base_url()?>add-to-cart"  method="post">
                            
                            <input type="hidden" value="1" name="qty"/>
                            <input type="hidden" value="<?php echo $product->pro_id?>" name="pro_id"/>
                            <button style="margin:0px" type="submit" class="btn ">
                                <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            </button>
                            <!-- <a href="<?php echo base_url()?>product-details/<?php echo $product->pro_id?>" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>Details</a> -->
                        </form>

                            </div>
                        </div>
                    </div>

         <?php } }?>

                </div>
            </div>
        </div>
        <!-- Featured Product End -->       
        
        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Subscribe Our Newsletter</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <input type="email" value="Your email here">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->        
        
        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Recent Product</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">

    <?php $allproduct = $this->ProductModel->get_all_product_limit();?>
    <?php foreach ($allproduct as $product) {?>
    <?php if($product->pro_status==1){?>

                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#"><?php echo $product->pro_title?></a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="<?php echo base_url().$product->pro_image?>" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span><?php echo $product->pro_price?></h3>

                        <form action="<?php echo base_url()?>add-to-cart"  method="post">
                            
                            <input type="hidden" value="1" name="qty"/>
                            <input type="hidden" value="<?php echo $product->pro_id?>" name="pro_id"/>
                            <button style="margin:0px" type="submit" class="btn ">
                                <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            </button>
                            <!-- <a href="<?php echo base_url()?>product-details/<?php echo $product->pro_id?>" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>Details</a> -->
                        </form> 
                               <!--  <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a> -->
                            </div>
                        </div>
                    </div>

                     <?php } }?>
               
                </div>
            </div>
        </div>
        <!-- Recent Product End -->
        
        <!-- Review Start -->
        <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="<?php echo base_url()?>assets/front2/img/review-1.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="<?php echo base_url()?>assets/front2/img/review-2.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="<?php echo base_url()?>assets/front2/img/review-3.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Review End -->        
        
       <?php $this->load->view('front/footer');?>   