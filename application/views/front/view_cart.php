<?php $this->load->view('front/header');?>   

        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <?php $cart_content = $this->cart->contents();?>
                                        <?php if(count($cart_content)!=0){?>
                                        <?php foreach ($cart_content as $items){ ?>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="<?php echo $items['options']['pro_image']?>" alt="Image"></a>
                                                    <p><?php echo $items['name']?></p>
                                                </div>
                                            </td>
                                            <td>$<?php echo $items['price']?></td>
                                            <td>
                                                <div class="qty">
                                                    <!-- <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button> -->

                                                    <form action="<?php echo base_url()?>update-cart-qty" method="post">
                                                        <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                        <input class="" type="text" name="qty" value="<?php echo $items['qty']?>" autocomplete="off" >
                                                        <input  type="hidden" name="rowid" value="<?php echo $items['rowid']?>">
                                                        <button type="submit" class="btn-minus"><i class="fa fa-minus"></i></button>
                                                       
                                                        <!-- <input  type="submit"  value="Update"/> -->

                                                    <form>


                                                </div>
                                            </td>
                                            <td>$<?php echo $items['subtotal']?></td>
                                            <td><a class="btn" href="<?php echo base_url()?>delete-to-cart/<?php echo $items['rowid']?>"><i class="fa fa-trash"></i></a></td>
                                        </tr>

                                        <?php } }else{ echo "<tr><td colspan='5'>There is no product in cart view</td></tr>"; } ?>
                                  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="coupon">
                                        <input type="text" placeholder="Coupon Code">
                                        <button>Apply Code</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Cart Summary</h1>

                                            <?php 
                                $cart_total = $this->cart->total();
                            ?>
                                            <p>Sub Total<span>$<?php echo $cart_total;?></span></p>

                                    <?php
                                     $tax = ($cart_total*2)/100; 
                                     ?>
                                     <p>Eco Tax 2% <span>$<?php echo $tax?></span></p>

                                         <!-- Shipping Cost Dependend Quantity, price, buyer distance etc -->
                                        <?php
                                            $shiping = "0";
                                            if($cart_total>0 && $cart_total<49){
                                                $shiping = 0;
                                            }elseif($cart_total>50 && $cart_total<98){
                                                $shiping = 2;
                                            }elseif($cart_total>99 && $cart_total<198){
                                                $shiping = 5;
                                            }elseif($cart_total>199){
                                                $shiping = 10;
                                            }elseif($cart_total<0){
                                                $shiping = 0;
                                            }
                                        ?>
                                            <p>Shipping Cost<span>$<?php echo $shiping;?></span></p>
                                            <?php $g_total = $cart_total+$tax+$shiping;?>
                                            <h2>Grand Total<span>$
                                            <?php
                                            $gdata = array();
                                            $gdata['g_total'] = $g_total;
                                            $this->session->set_userdata($gdata);
                                            echo "$g_total";
                                            ?>
                                    
                                            </span></h2>
                                        </div>
                                        <div class="cart-btn">
                                            <!-- <button>Update Cart</button>
                                            <button>Checkout</button> -->
                                            <form action="<?php echo base_url()?>update-cart-qty" method="post" >   
                                            <button type="submit" >Update Cart</button>
                                            </form> 
                                            <?php $customer_id = $this->session->userdata('cus_id');?>
                                            <?php $shipping_id = $this->session->userdata('shipping_id');?>
                                            <?php if($this->cart->total_items()!=Null && $customer_id!=NULL && $shipping_id!=NULL){?>
                                            <a class="btn btn-default check_out" href="<?php echo base_url()?>payment">Check Out</a>
                                            <?php } elseif($customer_id!=NULL && $this->cart->total_items()!=Null){?>
                                            <a class="btn btn-default check_out" href="<?php echo base_url()?>billing">Check Out</a>
                                            <?php }elseif($this->cart->total_items()!=Null){ ?>
                                            <a class="btn btn-default check_out" href="<?php echo base_url()?>checkout">Check Out</a>
                                            <?php } ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
        

        
<?php $this->load->view('front/footer');?>   

