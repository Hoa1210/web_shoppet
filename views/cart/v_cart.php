<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Cart</h1>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li>Cart</li>
            </ul>
        </div>
    </div>
</div>


<div class="cart-area ptb-100">
    <div class="container">
        <form action="cart.php" method="POST">
            <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">STT</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>

                   <?php
                   // kiểm tra mảnh $_SESSION['cart'] có tồn tại không
                   if(isset($_SESSION['cart'])) {
                       var_dump($_SESSION['cart']);
//                       unset($_SESSION['cart']);
                       $tong = 0;
                       // chạy mảng
                            for ($i = 0 ; $i < sizeof($_SESSION['cart']); $i++) {

                                if(isset($_SESSION['cart'][$i])){
                                // tính tổng tiền của mỗi sản phẩm
                                    $tt = $_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][4];

                                // tính tổng tiền của tất cả sản phẩm
                                    $tong += $tt;
                                    $_SESSION['tong'] = $tong;
                                 // Xóa sản phẩm trong giở hàng
                                if (isset($_GET['action'])){
                                    if($_GET['action'] == 'delete') {
                                        if ($_SESSION['cart'][$i][0] == $_GET['id_sp']) {
                                        unset($_SESSION['cart'][$i]);
                                        }
                                    }
                                    if($_GET['action'] == 'deleteall') {
                                            unset($_SESSION['cart']);
                                    }
                                    echo "<script>window.location.href = 'cart.php';</script>";
                                }

                    ?>
                   <tr>
                        <td><input type="button" name="delete_product" value="Delete" style="color: red; border: none; background-color: #fff;" onclick="location='cart.php?action=delete&id_sp=<?php echo $_SESSION['cart'][$i][0] ;?>'"></td>
                        <td><?php echo $i+1; ?></td>
                        <td class="product-thumbnail">
                            <a href="products-details.php">
                                <img src="admin/public/imagebanner/<?php echo $_SESSION['cart'][$i][2]; ?>" alt="item">
                                <h3><?php echo $_SESSION['cart'][$i][1]; ?></h3>
                            </a>
                        </td>
                        <td> <?php echo number_format($_SESSION['cart'][$i][3]); ?> VNĐ</td>
                        <td class="product-quantity">
                            <div class="input-counter">
                                <input type="text" name="so_luong"  value="<?php echo $_SESSION['cart'][$i][4];?>" min="1">
                            </div>
                        </td>
                       <td><?php echo number_format($tt);?> VNĐ</td>
                    </tr>
                <?php   } }
                      }else {
//                       echo "<script> alert('no');</script> ";?>
                    <td colspan="6"> <b> Không có sản phẩm nào trong giỏ hàng</b></td>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="cart-buttons">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-sm-12 col-md-7">
                        <div class="shopping-coupon-code">
                            <input type="text" class="form-control" placeholder="Coupon code" name="coupon-code" id="coupon-code">
                            <button type="submit">Apply Coupon</button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 col-md-5 text-end">
<!--                        <a href="" class="default-btn"><span>Update Cart</span></a>-->
                        <input type="submit" class="default-btn"  name="btn_delete" onclick="location = 'cart.php?action=deleteall'" value="Delete all cart">
                    </div>
                </div>
            </div>
            <div class="cart-totals">
                <ul>
                    <li>Subtotal <span>$800.00</span></li>
<!--                    <li>Shipping <span>$30.00</span></li>-->
                    <li>Total <span><?php echo number_format($tong);?> VNĐ</span></li>
                </ul>
<!--                <input type="submit" name="btn_checkout" onclick="location.href='check_out.php'"  class="default-btn" value="Proceed to Checkout">-->
                <a href="check_out.php">Check</a>
            </div>
        </form>
    </div>
</div>