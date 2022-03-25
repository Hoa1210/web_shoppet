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
<!--        <div class="user-actions">-->
<!--            <span>Returning customer? <a href="profile-authentication.html">Click here to login</a></span>-->
<!--        </div>-->
        <form action="ckeck_out.php" method="post">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="billing-details">
                        <h3><span>Billing details</span></h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First name <span class="required">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last name <span class="required">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Company name (optional)</label>
                                    <input type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Country / Region <span class="required">*</span></label>
                                    <input id="country_selector" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Street address <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="House number and street name" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>County (optional)</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Postcode <span class="required">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Email address <span class="required">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkme">
                                    <label class="form-check-label" for="checkme">Save this information for next time</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="billing-details">
                        <h3><span>Ship to a different address?</span></h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First name <span class="required">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last name <span class="required">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Company name (optional)</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Country / Region <span class="required">*</span></label>
                                    <input id="country_selector2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Street address <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="House number and street name" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" class="form-control"> required
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>County (optional)</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Postcode <span class="required">*</span></label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Order notes (optional)</label>
                                    <textarea class="form-control" cols="30" rows="6" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
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
                                <tbody>
                                <?php
                                if (isset($_SESSION)){
                                    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
//                                        var_dump($_SESSION['cart']);
                                ?>
                                <tr>
                                    <td class="product-name"><a href="products-details.html"><?php echo $_SESSION['cart'][$i][1]; ?> VNĐ</a></td>
                                    <td class="product-total">
                                        <span class="subtotal-amount"><?php echo number_format($_SESSION['cart'][$i][3]); ?></span>
                                    </td>
                                </tr>
                                <?php
                                }
                                }
                                ?>
                                <tr>
                                    <td class="order-subtotal"><span>Cart Subtotal</span></td>
                                    <td class="order-subtotal-price">
                                        <span class="order-subtotal-amount">$1683.50</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="order-shipping"><span>Shipping</span></td>
                                    <td class="shipping-price">
                                        <span>$30.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="total-price"><span>Order Total</span></td>
                                    <td class="product-subtotal">
                                        <span class="subtotal-amount"><?php echo number_format($_SESSION['tong']); ?> VNĐ</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="payment-box">
                            <div class="payment-method">
                                <p>
                                    <input type="radio" id="direct-bank-transfer" name="radio-group" checked>
                                    <label for="direct-bank-transfer">Direct bank transfer</label>
                                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                </p>
                                <p>
                                    <input type="radio" id="check-payments" name="radio-group">
                                    <label for="check-payments">Check payments</label>
                                    Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                </p>
                                <p>
                                    <input type="radio" id="paypal" name="radio-group">
                                    <label for="paypal">PayPal</label>
                                    <img src="public/patoi/assets/img/paypal.png" alt="paypal">
                                    Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="privacy-policy.html">privacy policy</a>.
                                </p>
                                <p>
                                    <input type="radio" id="cash-on-delivery" name="radio-group">
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
