<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Checkout</h1>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
</div>


<div class="checkout-area ptb-100">
    <div class="container">
        <div class="user-actions">
            <span>Returning cart? <a href="cart.php">Click here to cart</a></span>
        </div>
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                        <div class="billing-details">
                            <h3><span> Bill </span></h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Name <span class="required">*</span></label>
                                        <input type="text" name="name" value="<?php echo $check_out->ten_khach_hang;?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Date of birth <span class="required">*</span></label>
                                        <input type="date" name="date" value="<?php echo $check_out->ngay_sinh;?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" name="address" class="form-control" value="<?php echo $check_out->dia_chi;?>" placeholder="Apartment, suite, unit, etc. (optional)" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" name="phone" value="<?php echo $check_out->so_dien_thoai;?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Email address <span class="required">*</span></label>
                                        <input type="text" name="email" value="<?php echo $check_out->email;?>" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="order-details">
                        <h3>Your order</h3>
                        <div class="order-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <th>Tên sản phẩm</th>
                                <th>Tổng tiền</th>
                                </thead>
                                <tbody>
                                <?php
                                if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) :
                                    foreach ($_SESSION['cart'] as $key=>$value) :
                                ?>
                                <tr>
                                    <td class="product-name"><a><?php echo $value['ten_sp']; ?> </a></td>
                                    <td class="product-total">
                                        <span class="subtotal-amount"><?php echo number_format($value['tt']); ?> VNĐ</span>
                                    </td>
                                </tr>
                                <?php
                                    endforeach;
                                endif;
                                ?>
<!--                                <tr>-->
<!--                                    <td class="order-subtotal"><span>Cart Subtotal</span></td>-->
<!--                                    <td class="order-subtotal-price">-->
<!--                                        <span class="order-subtotal-amount">0 VNĐ</span>-->
<!--                                    </td>-->
<!--                                </tr>-->
                                <tr>
                                    <td class="order-shipping"><span>Shipping</span></td>
                                    <td class="shipping-price">
                                        <span>0 VNĐ</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="total-price"><span>Tổng</span></td>
                                    <td class="product-subtotal">
                                        <span class="subtotal-amount"><?php echo number_format($_SESSION['tong']); ?> VNĐ</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="payment-box">
                            <div class="payment-method">
<!--                                <p>-->
<!--                                    <input type="radio" id="direct-bank-transfer" name="radio-group" checked>-->
<!--                                    <label for="direct-bank-transfer">Direct bank transfer</label>-->
<!--                                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.-->
<!--                                </p>-->
<!--                                <p>-->
<!--                                    <input type="radio" id="check-payments" name="radio-group">-->
<!--                                    <label for="check-payments">Check payments</label>-->
<!--                                    Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.-->
<!--                                </p>-->
                                <p>
                                    <input type="radio" id="paypal" value="Chuyển khoản" name="radio-group" checked>
                                    <label for="paypal">PayPal</label>
                                    <img src="public/patoi/assets/img/paypal.png" alt="paypal">
                                    Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="privacy-policy.html">privacy policy</a>.
                                </p>
                                <p>
                                    <input type="radio" id="cash-on-delivery" value="Tiền mặt" name="radio-group">
                                    <label for="cash-on-delivery">Cash on delivery</label>
                                    Pay with cash upon delivery.
                                </p>
                            </div>
                            <button type="submit" name="btn_order" class="default-btn"><span>Place Order</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
