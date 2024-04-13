<div class="main-banner-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="main-banner-content">
                    <span class="sub-title">Chào mừng đến với Patoi</span>
                    <h1>Chúng tôi cung cấp các sản phẩm thú cưng tốt nhất</h1>
                    <p>Giảm giá 100% cho đơn hàng đầu tiên của bạn</p>
                    <a href="shop.php?shop" class="default-btn"><span>Xem ngay</span></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="main-banner-image">
                    <img src="public/patoi/assets/img/banner/banner1.png" alt="banner-image">
                    <img src="public/patoi/assets/img/banner/banner2.png" alt="banner-image">
                    <img src="public/patoi/assets/img/banner/banner3.png" alt="banner-image">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="offer-area pt-100 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-offer-box">
                    <a href="shop.php?shop" class="d-block">
                        <img src="public/patoi/assets/img/offer/offer1.jpg" alt="offer-image">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-offer-box">
                    <a href="shop.php?shop" class="d-block">
                        <img src="public/patoi/assets/img/offer/offer2.jpg" alt="offer-image">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-offer-box">
                    <a href="shop.php?shop" class="d-block">
                        <img src="public/patoi/assets/img/offer/offer3.jpg" alt="offer-image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="categories-area pb-75">
    <div class="container">
        <div class="section-title">
            <h2>Danh Mục Sản Phẩm</h2>
        </div>
        <div class="categories-slides owl-carousel owl-theme">
            <div class="single-categories-box">
                <a href="shop-grid.html" class="d-block">
                    <img src="public/patoi/assets/img/categories/categories1.jpg" alt="categories-image">
                    <h3>Thực phẩm cho chó</h3>
                </a>
            </div>
            <div class="single-categories-box">
                <a href="shop-grid.html" class="d-block">
                    <img src="public/patoi/assets/img/categories/categories2.jpg" alt="categories-image">
                    <h3>Thực phẩm cho mèo</h3>
                </a>
            </div>
            <div class="single-categories-box">
                <a href="shop-grid.html" class="d-block">
                    <img src="public/patoi/assets/img/categories/categories3.jpg" alt="categories-image">
                    <h3>Phụ kiện</h3>
                </a>
            </div>
            <div class="single-categories-box">
                <a href="shop-grid.html" class="d-block">
                    <img src="public/patoi/assets/img/categories/categories4.jpg" alt="categories-image">
                    <h3>Thực phẩm khô</h3>
                </a>
            </div>
            <div class="single-categories-box">
                <a href="shop-grid.html" class="d-block">
                    <img src="public/patoi/assets/img/categories/categories5.jpg" alt="categories-image">
                    <h3>Đồ chơi thú cưng</h3>
                </a>
            </div>
            <div class="single-categories-box">
                <a href="shop-grid.html" class="d-block">
                    <img src="public/patoi/assets/img/categories/categories6.jpg" alt="categories-image">
                    <h3>Đồ chơi cho mèo</h3>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="products-area pb-75">
    <div class="container">
        <div class="section-title">
            <h2>Sản Phẩm</h2>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($product as $key => $value) :
                if ($key < 8) :
            ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a   onclick="window.location.href='products_details.php?action=add1&&ma_sp=<?php echo $value->ma_sp; ?>'" class="d-block">
                                    <img   src="admin/public/imageproduct/<?php echo $value->hinh_anh ?>" alt="products-image">
                                </a>
                                <?php
                                if ($value->so_luong == 0) {
                                    $css = "sold";
                                    $tt = "Sold!";
                                } else {
                                    if ($value->trang_thai_sp == 0) {
                                        $css = "sold";
                                        $tt = "Sold!";
                                    } else {
                                        $css = "";
                                        $tt = "";
                                    }
                                }
                                ?>
                                <span class="<?php echo $css; ?>"><?php echo $tt; ?></span>
                                <ul class="products-button">
                                    <li><a onclick="window.location.href='cart.php?ma_sp=<?php echo $value->ma_sp; ?>'"><i class='bx bx-cart-alt'></i></a></li>
                                    <!--                            <li><a href="wishlist.php"><i class='bx bx-heart'></i></a></li>-->
                                    <!--                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>-->
                                    <li><a onclick="window.location.href='products_details.php?ma_sp=<?php echo $value->ma_sp; ?>'"><i class='bx bx-link-alt'></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3><a onclick="window.location.href='products_details.php?ma_sp=<?php echo $value->ma_sp; ?>'"><?php echo $value->ten_sp ?></a></h3>
                                <div class="price">
                                    <span class="new-price"><?php echo number_format($value->gia_ban) ?> VND</span>
                                </div>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php else : echo "  ";
                endif;
            endforeach; ?>
        </div>
    </div>
</div>


<div class="offer-area pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="single-offer-box">
                    <a href="shop.php" class="d-block">
                        <img src="public/patoi/assets/img/offer/offer4.jpg" alt="offer-image">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-offer-box">
                    <a href="shop.php" class="d-block">
                        <img src="public/patoi/assets/img/offer/offer5.jpg" alt="offer-image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="products-area pb-75">
    <div class="container">
        <div class="section-title">
            <h2>Bán Chạy Nhất</h2>
        </div>
        <div class="products-slides owl-carousel owl-theme">
            <?php foreach ($product as $key => $value) :
                if ($key < 6) :
            ?>
                    <div class="single-products-box">
                        <div class="image">
                            <a   onclick="window.location.href='products_details.php?action=add1&&ma_sp=<?php echo $value->ma_sp; ?>'" class="d-block">
                                <img   src="admin/public/imageproduct/<?php echo $value->hinh_anh ?>" alt="products-image">
                            </a>
                            <?php
                            if ($value->so_luong == 0) {
                                $css = "sold";
                                $tt = "Sold!";
                            } else {
                                if ($value->trang_thai_sp == 0) {
                                    $css = "sold";
                                    $tt = "Sold!";
                                } else {
                                    $css = "";
                                    $tt = "";
                                }
                            }
                            ?>
                            <span class="<?php echo $css; ?>"><?php echo $tt; ?></span>
                            <ul class="products-button">
                                <li><a onclick="window.location.href='cart.php?ma_sp=<?php echo $value->ma_sp; ?>'"><i class='bx bx-cart-alt'></i></a></li>
                                <!--                            <li><a href="wishlist.php"><i class='bx bx-heart'></i></a></li>-->
                                <!--                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>-->
                                <li><a onclick="window.location.href='products_details.php?ma_sp=<?php echo $value->ma_sp; ?>'"><i class='bx bx-link-alt'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a onclick="window.location.href='products_details.php?ma_sp=<?php echo $value->ma_sp; ?>'"><?php echo $value->ten_sp ?></a></h3>
                            <div class="price">
                                <span class="new-price"><?php echo number_format($value->gia_ban) ?> VND</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
            <?php else : echo "  ";
                endif;
            endforeach; ?>
        </div>
    </div>
</div>


<div class="offer-area pb-75">
    <div class="container">
        <div class="single-offer-box">
            <a href="shop.php" class="d-block">
                <img src="public/patoi/assets/img/offer/offer6.jpg" alt="offer-image">
            </a>
        </div>
    </div>
</div>


<div class="brands-area pb-75">
    <div class="container">
        <div class="section-title">
            <h2>Thương Hiệu Hàng Đầu</h2>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <div class="single-brands-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="public/patoi/assets/img/brands/brands1.png" alt="brands">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <div class="single-brands-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="public/patoi/assets/img/brands/brands2.png" alt="brands">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <div class="single-brands-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="public/patoi/assets/img/brands/brands3.png" alt="brands">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <div class="single-brands-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="public/patoi/assets/img/brands/brands4.png" alt="brands">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <div class="single-brands-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="public/patoi/assets/img/brands/brands5.png" alt="brands">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <div class="single-brands-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="public/patoi/assets/img/brands/brands6.png" alt="brands">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="products-area pb-75">
    <div class="container">
        <div class="section-title">
            <h2>Ưu Đãi Đặc Biệt</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="offer-box">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="image">
                                <img src="public/patoi/assets/img/offer/offer7.png" alt="offer-image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="content">
                                <h3><a href="products-details.html">Premium lamb rice</a></h3>
                                <span class="price">$240.00</span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor.
                                </p>
                                <h3>Place an order now</h3>
                                <span class="discount">Enjoy 30% OFF</span>
                                <div class="counter-class" data-date="2022-12-24 24:00:00">
                                    <div><span class="counter-days"></span> Days</div>
                                    <div><span class="counter-hours"></span> Hours</div>
                                    <div><span class="counter-minutes"></span> Minutes</div>
                                    <div><span class="counter-seconds"></span> Seconds</div>
                                </div>
                                <a href="shop-grid.html" class="default-btn"><span>Xem Ngay</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php foreach ($product as $key => $value) : 
            if($key < 2) :
            ?>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="single-products-box">
                        <div class="image">
                            <a   onclick="window.location.href='products_details.php?action=add1&&ma_sp=<?php echo $value->ma_sp; ?>'" class="d-block">
                                <img   src="admin/public/imageproduct/<?php echo $value->hinh_anh ?>" alt="products-image">
                            </a>
                            <?php
                            if ($value->so_luong == 0) {
                                $css = "sold";
                                $tt = "Sold!";
                            } else {
                                if ($value->trang_thai_sp == 0) {
                                    $css = "sold";
                                    $tt = "Sold!";
                                } else {
                                    $css = "";
                                    $tt = "";
                                }
                            }
                            ?>
                            <span class="<?php echo $css; ?>"><?php echo $tt; ?></span>
                            <ul class="products-button">
                                <li><a onclick="window.location.href='cart.php?ma_sp=<?php echo $value->ma_sp; ?>'"><i class='bx bx-cart-alt'></i></a></li>
                                <!--                            <li><a href="wishlist.php"><i class='bx bx-heart'></i></a></li>-->
                                <!--                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>-->
                                <li><a onclick="window.location.href='products_details.php?ma_sp=<?php echo $value->ma_sp; ?>'"><i class='bx bx-link-alt'></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3><a onclick="window.location.href='products_details.php?ma_sp=<?php echo $value->ma_sp; ?>'"><?php echo $value->ten_sp ?></a></h3>
                            <div class="price">
                                <span class="new-price"><?php echo number_format($value->gia_ban) ?> VND</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>

            <?php else: echo "  ";
            endif;
        endforeach; ?>
        </div>
    </div>
</div>


<div class="facility-area">
    <div class="container">
        <div class="facility-inner">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-facility-box">
                        <img src="public/patoi/assets/img/icon/icon1.png" alt="icon">
                        <h3>Sản phẩm chất lượng </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-facility-box">
                        <img src="public/patoi/assets/img/icon/icon2.png" alt="icon">
                        <h3>Giao hàng nhanh </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-facility-box">
                        <img src="public/patoi/assets/img/icon/icon3.png" alt="icon">
                        <h3>Hỗ trợ 24/7</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-facility-box">
                        <img src="public/patoi/assets/img/icon/icon4.png" alt="icon">
                        <h3>Thanh toán an toàn </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blog-area pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <h2>Blog mới nhất</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="image">
                        <a href="blog-details.html" class="d-block">
                            <img src="public/patoi/assets/img/blog/blog1.jpg" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <span class="date">
                            <span>10 Aug</span> 2021
                        </span>
                        <a href="blog-grid.html" class="category">Training</a>
                        <h3><a href="blog-details.html">Properly a pet training guide</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="image">
                        <a href="blog-details.html" class="d-block">
                            <img src="public/patoi/assets/img/blog/blog2.jpg" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <span class="date">
                            <span>11 Aug</span> 2021
                        </span>
                        <a href="blog-grid.html" class="category">Behaviour</a>
                        <h3><a href="blog-details.html">The exact rules of how to travel with pets</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="image">
                        <a href="blog-details.html" class="d-block">
                            <img src="public/patoi/assets/img/blog/blog3.jpg" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <span class="date">
                            <span>12 Aug</span> 2021
                        </span>
                        <a href="blog-grid.html" class="category">Solutions</a>
                        <h3><a href="blog-details.html">Creating proper guidelines for pet food </a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>