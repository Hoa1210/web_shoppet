<div class="not-found-area ptb-100">
    <div class="container">
        <div class="row">
            <h3>Personal Information</h3>
            <div class="col-lg-6 col-md-12">
                <div class="contact-info">
                    <?php if($profile) {?>
                    <ul>
                        <li><span>Name:</span> <?php echo $profile->ten_khach_hang;?></li>
                        <li><span>Date of birth:</span> <?php echo $profile->ngay_sinh;?></li>
                        <li><span>Address:</span> <?php echo $profile->dia_chi;?></li>
                        <li><span>Phonbe:</span> <a href="tel:12855"><?php echo $profile->so_dien_thoai;?></a></li>
                        <li><span>Email:</span> <?php echo $profile->email;?></a></li>
                    </ul>
                    <?php }else {?>
                        <p>Chưa có thông tin cá nhân</p>
                        <button type="button" onclick="window.location.href='add_profile.php'" style="width: auto" class="default-btn"><span>Edit information</span></button>
                    <?php }?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <?php if(!empty($profile)) {?>
                    <div class="col-lg-12 col-md-12" style="margin-top: 4px;">
                        <button type="button" onclick="window.location.href='edit_profile.php'" style="width: auto" class="default-btn"><span>Edit information</span></button>
                    </div>
                    <?php } ?>
                    <div class="col-lg-12 col-md-12" style="margin-top: 4px;">
                        <button type="button" onclick="window.location.href='logout.php'" style="width: auto" class="default-btn"><span>Logout</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
