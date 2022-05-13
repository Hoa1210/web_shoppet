<div class="not-found-area ptb-100">
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="billing-details">
                <h3><span> Hồ Sơ Của Tôi</span></h3>
                <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                <div class="row" style="border-top: 1px ;">
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Tên <span class="required">*</span></label>
                                    <input type="text" name="name" value="<?php if($profile){echo $profile->ten_khach_hang;}else{echo " ";} ?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Ngày sinh <span class="required">*</span></label>
                                    <input type="date" name="date" value="<?php if($profile){echo $profile->ngay_sinh;}else{echo " ";} ?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Địa chỉ <span class="required">*</span></label>
                                    <input type="text" name="address" class="form-control" value="<?php if($profile){echo $profile->dia_chi;}else{echo " ";} ?>" placeholder="Apartment, suite, unit, etc. (optional)" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <?php 
                                $check1 = " ";
                                $check2 = " ";
                                $check3 = " ";
                                if($profile) {
                                    if($profile->gioi_tinh == "Nam"):
                                        $check1 = "checked";
                                    elseif($profile->gioi_tinh =="Nữ"):
                                        $check2 = "checked";
                                    elseif ($profile->gioi_tinh == "Khác") :
                                        $check3 = "checked";
                                    endif;
                                }
                                ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Nam" <?php echo $check1; ?>>
                                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Nữ" <?php echo $check2; ?>>
                                    <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Khác" <?php echo $check3; ?>>
                                    <label class="form-check-label" for="inlineRadio3">Khác</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Số điện thoại <span class="required">*</span></label>
                                    <input type="text" name="phone" value="<?php if($profile){echo $profile->so_dien_thoai;}else{echo " ";} ?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Email <span class="required">*</span></label>
                                    <input type="text" name="email" value="<?php echo $profile->email; ?>" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" name="btn_information" style="width: 100px" class="default-btn"><span>Lưu</span></button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="col-lg-12 col-md-12" style="margin-top: 4px;">
                            <button type="button" onclick="window.location.href='logout.php'" style="width: auto" class="default-btn"><span>Đăng xuất</span></button>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
</div>
