<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Thanh Toán</h1>
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li>Thanh Toán</li>
            </ul>
        </div>
    </div>
</div>


<div class="checkout-area ptb-100">
    <div class="container">
        <div class="user-actions">
            <span>Quay lại giỏ hàng? <a href="cart.php">Ấn vào đây để quay lại giỏ hàng.</a></span>
        </div>
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="billing-details">
                        <h3><span> Bill </span></h3>
                        <div class="row">
                            <div class="contact-info">
                                <?php if ($check_out) { ?>
                                    <ul>
                                        <li><span>Họ và tên:</span> <?php echo $check_out->ten_khach_hang; ?></li>
                                        <li><span>Ngày sinh:</span> <?php echo $check_out->ngay_sinh; ?></li>
                                        <li><span>Địa chỉ:</span> <?php echo $check_out->dia_chi; ?></li>
                                        <li><span>Số điện thoại:</span> <a href="tel:12855"><?php echo $check_out->so_dien_thoai; ?></a></li>
                                        <li><span>Email:</span> <?php echo $check_out->email; ?></a></li>
                                    </ul>
                                <?php } else { ?>
                                    <p>Chưa có thông tin cá nhân</p>
                                    <button type="button" onclick="window.location.href='user.php'" style="width: auto" class="default-btn"><span>Thêm thông tin cá nhân</span></button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="order-details">
                        <h3>Đơn hàng của bạn</h3>
                        <div class="order-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Tên sản phẩm</th>
                                    <th>Tổng tiền</th>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) :
                                        $tongtien = 0;
                                        foreach ($_SESSION['cart'] as $key => $value) :
                                            $thanhtien = $value['so_luong'] * $value['gia_ban'];
                                            $tongtien += $thanhtien;
                                    ?>
                                            <tr>
                                                <td class="product-name"><a><?php echo $value['ten_sp']; ?> </a></td>
                                                <td class="product-total">
                                                    <span class="subtotal-amount"><?php echo number_format($thanhtien); ?> VNĐ</span>
                                                </td>
                                            </tr>
                                    <?php
                                        endforeach;
                                    endif;
                                    ?>
                                    <tr>
                                        <td class="order-shipping"><span>Phí Vận Chuyển</span></td>
                                        <td class="shipping-price">
                                            <span>0 VNĐ</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="total-price"><span>Tổng Tiền</span></td>
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount"><?php echo number_format($tongtien); ?> VNĐ</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="payment-box">
                            <div class="payment-method">
                                <p>
                                    <input type="radio" id="direct-bank-transfer" name="radio-group" checked>
                                    <label for="direct-bank-transfer">Chuyển khoản ngân hàng</label>
                                    Thực hiện thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi.
                                     Vui lòng sử dụng ID Đơn hàng của bạn làm tài liệu tham khảo thanh toán. 
                                    Đơn đặt hàng của bạn sẽ không được vận chuyển cho đến khi tiền đã được xóa trong tài khoản của chúng tôi.
                                </p>
                                <p>
                                    <input type="radio" id="paypal" value="1" name="radio-group" checked>
                                    <label for="paypal">PayPal</label>
                                    <img src="public/img/paypal.png" alt="paypal">
                                    Dữ liệu cá nhân của bạn sẽ được sử dụng để xử lý đơn đặt hàng của bạn, hỗ trợ trải nghiệm của bạn trên toàn trang web này và cho các mục đích khác được mô tả trong trang web của chúng tôi <a href="privacy-policy.html">Chính sách bảo mật.</a>.
                                </p>
                                <p>
                                    <input type="radio" id="cash-on-delivery" value="0" name="radio-group">
                                    <label for="cash-on-delivery">Thanh toán khi nhận hàng</label>
                                    Thanh toán bằng tiền mặt khi giao hàng.
                                </p>
                            </div>
                            <button type="submit" name="btn_order" class="default-btn"><span>Đặt Hàng</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>