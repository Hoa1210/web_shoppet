<div class="not-found-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <form action="" method="POST">
                     <div class="billing-details">
                    <h3><span> Edit Personal Information</span></h3>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Name <span class="required">*</span></label>
                                <input type="text" name="name" value="<?php echo $profile->ten_khach_hang;?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Date of birth <span class="required">*</span></label>
                                <input type="date" name="date" value="<?php echo $profile->ngay_sinh;?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Address <span class="required">*</span></label>
                                <input type="text" name="address" class="form-control" value="<?php echo $profile->dia_chi;?>" placeholder="Apartment, suite, unit, etc. (optional)" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Phone <span class="required">*</span></label>
                                <input type="text" name="phone" value="<?php echo $profile->so_dien_thoai;?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Email address <span class="required">*</span></label>
                                <input type="text" name="email" value="<?php echo $profile->email;?>" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" name="btn_information" style="width: 100px" class="default-btn"><span>Save</span></button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12">
                    <div class="col-lg-12 col-md-12" style="margin-top: 4px;">
                        <button type="button" onclick="window.location.href='user.php'" style="width: auto" class="default-btn"><span>Return</span></button>
                    </div>
                    <div class="col-lg-12 col-md-12" style="margin-top: 4px;">
                        <button type="button" onclick="window.location.href='logout.php'" style="width: auto" class="default-btn"><span>Logout</span></button>
                    </div>
            </div>
        </div>
    </div>
</div>
