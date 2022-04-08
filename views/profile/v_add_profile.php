<div class="not-found-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <form action="" method="POST">
                    <div class="billing-details">
                        <h3><span>More Personal Information</span></h3>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Name <span class="required">*</span></label>
                                    <input type="text" name="name"  class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Date of birth <span class="required">*</span></label>
                                    <input type="date" name="date"  class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" name="address" class="form-control"  placeholder="Apartment, suite, unit, etc. (optional)" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" name="phone"  class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Email address <span class="required">*</span></label>
                                    <input type="text" name="email"  class="form-control" value="<?php echo $_SESSION['email'];?>" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkme">
                                    <label class="form-check-label" for="checkme">Save this information for next time</label>
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


