<section class="checkout_area section_gap">
    <div class="container">
        <!-- <div class="returning_customer">
            <div class="check_title">
                <h2>Returning Customer? <a href="#">Click here to login</a></h2>
            </div>
            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
            customer, please proceed to the Billing &amp; Shipping section.</p>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="name" name="name">
                    <span class="placeholder" data-placeholder="Username or Email"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                    <input type="password" class="form-control" id="password" name="password">
                    <span class="placeholder" data-placeholder="Password"></span>
                </div>
                <div class="col-md-12 form-group">
                    <button type="submit" value="submit" class="primary-btn">login</button>
                    <div class="creat_account">
                        <input type="checkbox" id="f-option" name="selector">
                        <label for="f-option">Remember me</label>
                    </div>
                    <a class="lost_pass" href="#">Lost your password?</a>
                </div>
            </form>
        </div>
        <div class="cupon_area">
            <div class="check_title">
                <h2>Have a coupon? <a href="#">Click here to enter your code</a></h2>
            </div>
            <input type="text" placeholder="Enter coupon code">
            <a class="tp_btn" href="#">Apply Coupon</a>
        </div> -->
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Gửi</h3>
                    <?php  
                        include("connectionpro.php");
                        if (isset($_SESSION['cart'])) {
                            $cart = $_SESSION['cart'];
                            $total = 0;
                            
                            foreach ($cart as $key => $value) {
                                $total += $value["price"];
                            }
                            if (isset($_POST['addorder'])) {
                                $full_name = $_POST['full_name'];
                                $address = $_POST['address'];
                                $mobile = $_POST["mobile"];
                                $email = $_POST['email'];
                                $full_name2 = $_POST['full_name2'];
                                $address2 = $_POST['address2'];
                                $mobile2 = $_POST["mobile2"];
                                $email2 = $_POST['email2'];
                                $status = isset($_POST['selector'])?1:0 ;
                                $date_create = date('y/m/d h:i:s');
                                $sqlorder = "
                                INSERT INTO `order`(`full_name`, `mobile`, `email`, `address`, `full_name2`, `mobile2`, `email2`, `address2`, `total`, `status`, `date_create`) 
                                VALUES ('$full_name','$mobile','$email','$address','$full_name2','$mobile2','$email2','$address2','$total','$status','$date_create')
                                ";
                                mysqli_query($conn, $sqlorder);
                                $last_id = mysqli_insert_id($conn);
                                foreach ($cart as $key => $value) {
                                    $pro_id = $key;
                                    $price = $value["price"];
                                    $number = $value["number"];
                                    $sqlorderdetail = "INSERT INTO `orderdetail`(`order_id`, `pro_id`, `price`, `number`, `status`, `date_create`) 
                                    VALUES ('$last_id','$pro_id','$price','$number','$status','$date_create')";
                                    mysqli_query($conn, $sqlorderdetail);
                                }
                            }
                        }
                    ?>
                    <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="first" name="full_name" placeholder="full_name" >
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="last" name="address" placeholder="Address" >
                        </div>
                        <!-- <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="company" name="company" placeholder="Address">
                        </div> -->
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="number" name="mobile" placeholder="mobile">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="email" placeholder="email">
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <h3>Nhận</h3>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="first" name="full_name2" placeholder="full_name2">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="last" name="address2" placeholder="address2">
                        </div>
                        <!-- <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="company" name="company" placeholder="Address">
                        </div> -->
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="number" name="mobile2" placeholder="mobile2">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="email2" placeholder="email2">
                        </div>
                        <!-- <div class="col-md-12 form-group p_star">
                            <select class="country_select" style="display: none;">
                                <option value="1">Country</option>
                                <option value="2">Country</option>
                                <option value="4">Country</option>
                            </select><div class="nice-select country_select" tabindex="0"><span class="current">Country</span><ul class="list"><li data-value="1" class="option selected">Country</li><li data-value="2" class="option">Country</li><li data-value="4" class="option">Country</li></ul></div>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="add1">
                            <span class="placeholder" data-placeholder="Address line 01"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add2" name="add2">
                            <span class="placeholder" data-placeholder="Address line 02"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="city">
                            <span class="placeholder" data-placeholder="Town/City"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select" style="display: none;">
                                <option value="1">District</option>
                                <option value="2">District</option>
                                <option value="4">District</option>
                            </select><div class="nice-select country_select" tabindex="0"><span class="current">District</span><ul class="list"><li data-value="1" class="option selected">District</li><li data-value="2" class="option">District</li><li data-value="4" class="option">District</li></ul></div>
                        </div> -->
                        <!-- <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                        </div> -->
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Status</label>
                            </div>
                        </div>
                        <!-- <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>Shipping Details</h3>
                                <input type="checkbox" id="f-option3" name="selector">
                                <label for="f-option3">Ship to a different address?</label>
                            </div>
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
                        </div> -->
                        <input type="submit" name="addorder" class="primary-btn" value="Xác nhận đơn hàng">
                        
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                            <li><a href="#">Product <span>Total</span></a></li>
                            <?php  
                            foreach ($cart as $key => $value) {
                            ?>
                            <li><a href="#"><?php echo $value["name"]; ?><span class="middle">x <?php echo $value["number"] ?></span> <span class="last">$<?php echo $value["price"] ?></span></a></li>
                        <?php } ?>
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span>$ <?php echo $total; ?></span></a></li>
                        </ul>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector">
                                <label for="f-option5">Check payments</label>
                                <div class="check"></div>
                            </div>
                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                            Store Postcode.</p>
                        </div>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector">
                                <label for="f-option6">Paypal </label>
                                <img src="img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                            account.</p>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">I’ve read and accept the </label>
                            <a href="#">terms &amp; conditions*</a>
                        </div>
                        <a class="primary-btn" href="#">Proceed to Paypal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>