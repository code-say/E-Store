<?php $this->load->view('front/header');?>   
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Checkout Start -->
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h5 class="billing_info">
                             <?php echo validation_errors();?>
                          </h5>
                                <h2>Billing Address</h2>
                                <div class="row">
                                <form class="form-inline" action="<?php echo base_url()?>update-billing" method="post" name="billing_info">



<!-- 
                                    <input type="text" placeholder="Name" name="cus_name" value="<?php echo $cus_info->cus_name?>">
                                    <input type="hidden" name="cus_id" value="<?php echo $cus_info->cus_id?>">
                                    <input type="text" placeholder="Email*" name="cus_email" value="<?php echo $cus_info->cus_email?>" readonly="">
                                    <input type="text" placeholder="Mobile" name="cus_mobile" value="<?php echo $cus_info->cus_mobile?>">
                                    <input type="text" placeholder="Address*" name="cus_address" value="<?php echo $cus_info->cus_address?>">
                                    <input type="text" placeholder="City" name="cus_city" value="<?php echo $cus_info->cus_city?>">
                                    <select name="cus_country" value="<?php echo $cus_info->cus_country?>">
                                        <option>-- Country --</option>
                                        <option value="United_States" >United States</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="UK">UK</option>
                                        <option value="India">India</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Ucrane">Ucrane</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Dubai">Dubai</option>
                                    </select>
                                    <input type="text" placeholder="Zip" name="cus_zip" value="<?php echo $cus_info->cus_zip?>">
                                    Shipping Same As Billing
                                    <input type="checkbox" name="shipping_info" value="on">
                                    <input type="submit" value="Save & Continue" class="btn btn-primary">
 -->








                                    <div class="form-group col-md-6">
                                        <label>Name</label>
                                        <input name="cus_name" class="form-control" type="text" placeholder="Name" value="<?php echo $cus_info->cus_name?>">
                                    </div>
                                    <input type="hidden" name="cus_id" value="<?php echo $cus_info->cus_id?>">
                                    <div class="form-group col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" placeholder="E-mail" name="cus_email" value="<?php echo $cus_info->cus_email?>" readonly="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Mobile No</label>
                                        <input class="form-control" type="text" placeholder="Mobile No" name="cus_mobile" value="<?php echo $cus_info->cus_mobile?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="Address" name="cus_address" value="<?php echo $cus_info->cus_address?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <select class="custom-select" name="cus_country" value="<?php echo $cus_info->cus_country?>">
                                            <option>-- Country --</option>
                                            <option value="United_States" >United States</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="UK">UK</option>
                                            <option value="India">India</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Ucrane">Ucrane</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Dubai">Dubai</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input class="form-control" type="text" placeholder="City" name="cus_city" value="<?php echo $cus_info->cus_city?>">
                                    </div>
                                   
                                    <div class="form-group col-md-6">
                                        <label>ZIP Code</label>
                                        <input class="form-control" type="text" placeholder="ZIP Code" name="cus_zip" value="<?php echo $cus_info->cus_zip?>">
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="shipto" name="shipping_info" value="on">
                                            <label class="custom-control-label" for="shipto">Shipping Same As Billing</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-block">Save $ Continue</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                           <!--  <div class="shipping-address">
                                <h2>Shipping Address</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Last Name"</label>
                                        <input class="form-control" type="text" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" placeholder="E-mail">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mobile No</label>
                                        <input class="form-control" type="text" placeholder="Mobile No">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="Address">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Country</label>
                                        <select class="custom-select">
                                            <option selected>United States</option>
                                            <option>Afghanistan</option>
                                            <option>Albania</option>
                                            <option>Algeria</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>City</label>
                                        <input class="form-control" type="text" placeholder="City">
                                    </div>
                                    <div class="col-md-6">
                                        <label>State</label>
                                        <input class="form-control" type="text" placeholder="State">
                                    </div>
                                    <div class="col-md-6">
                                        <label>ZIP Code</label>
                                        <input class="form-control" type="text" placeholder="ZIP Code">
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                            <div class="checkout-summary">
                                <h1>Cart Total</h1>
                                <p>Product Name<span>$99</span></p>
                                <p class="sub-total">Sub Total<span>$99</span></p>
                                <p class="ship-cost">Shipping Cost<span>$1</span></p>
                                <h2>Grand Total<span>$100</span></h2>
                            </div>

                            <div class="checkout-payment">
                                <div class="payment-methods">
                                    <h1>Payment Methods</h1>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                            <label class="custom-control-label" for="payment-1">Paypal</label>
                                        </div>
                                        <div class="payment-content" id="payment-1-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-2" name="payment">
                                            <label class="custom-control-label" for="payment-2">Payoneer</label>
                                        </div>
                                        <div class="payment-content" id="payment-2-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                            <label class="custom-control-label" for="payment-3">Check Payment</label>
                                        </div>
                                        <div class="payment-content" id="payment-3-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-4" name="payment">
                                            <label class="custom-control-label" for="payment-4">Direct Bank Transfer</label>
                                        </div>
                                        <div class="payment-content" id="payment-4-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-5" name="payment">
                                            <label class="custom-control-label" for="payment-5">Cash on Delivery</label>
                                        </div>
                                        <div class="payment-content" id="payment-5-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-btn">
                                    <button>Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout End -->

    <script type="text/javascript">
        document.forms['billing_info'].elements['cus_country'].value=<?php echo $cus_info->cus_country?>

    </script>
        

        
<?php $this->load->view('front/footer');?>   