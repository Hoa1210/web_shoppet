<div class="not-found-area ptb-100">
    <div class="container">
        <div class="row">
            <h3 class="text-center" style="margin-bottom: 40px;">Trang cá nhân</h3>
            <div class="col-lg-8 col-md-12">
                <?php if ($profile) { ?>
                    <div style="display:flex; background-color: rgb(56 189 248); border-radius: 100px; filter: drop-shadow(0 10px 8px rgb(0 0 0 / 0.04)) drop-shadow(0 4px 3px rgb(0 0 0 / 0.1));">
                        <div class="text-center" style="width: 200px; margin-right:5px; ">
                            <img src="./admin/public/assets/images/users/2.jpg" class=" mx-auto img-thumbnail" alt="..." style=" border-radius: 9999px;">
                        </div>
                        <div class="contact-info" style="margin: 0; padding: 60px 50px;   color: #fff;">
                            <ul>
                                <li><span>Họ và tên:</span><span class="text-white"> <?php echo $profile->ten_khach_hang; ?></span></li>
                                <li><span>Ngày sinh:</span> <span class="text-white"><?php echo $profile->ngay_sinh; ?></span></li>
                                <li><span>Địa chỉ:</span> <span class="text-white"><?php echo $profile->dia_chi; ?></span></li>
                                <li><span>Số điện thoại:</span> <a href="tel:12855"><span class="text-white"><?php echo $profile->so_dien_thoai; ?></span></a></li>
                                <li><span>Email:</span> <span class="text-white"><?php echo $profile->email; ?></a></span></li>
                            </ul>
                        </div>
                    </div>
                <?php } else { ?>
                    <p>Chưa có thông tin cá nhân</p>
                    <button type="button" onclick="window.location.href='add_profile.php'" style="width: auto" class="default-btn"><span>Thêm thông tin cá nhân</span></button>
                <?php } ?>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="row">
                    <?php if (!empty($profile)) { ?>
                        <div class="col-lg-12 col-md-12" style="margin-top: 4px;">
                            <button type="button" onclick="window.location.href='edit_profile.php'" style="width: auto" class="default-btn"><span>Chỉnh sửa thông tin cá nhân</span></button>
                        </div>
                        <div class="col-lg-12 col-md-12" style="margin-top: 4px;">
                            <button type="button" onclick="window.location.href='order_history.php'" style="width: auto" class="default-btn"><span>Lịch sử mua hàng</span></button>
                        </div>
                    <?php } ?>
                    <div class="col-lg-12 col-md-12" style="margin-top: 4px;">
                        <button type="button" onclick="window.location.href='logout.php'" style="width: auto" class="default-btn"><span>Đăng Xuất</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>