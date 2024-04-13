<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6" style="width: 50%;">
                <div class="card">
                    <form class="form-horizontal" action="" enctype="multipart/form-data" method="POST">
                        <div class="card-body">
                            <h4 class="card-title">Thêm Sản Phẩm</h4>
                            <?php if (isset($_SESSION['alert_add_sp'])) { ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $_SESSION['alert_add_sp']; ?>
                                </div>
                            <?php }
                            unset($_SESSION['alert_add_sp']); ?>
                            <?php if (isset($_SESSION['alert_err_add_sp'])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION['alert_err_add_sp']; ?>
                                </div>
                            <?php }
                            unset($_SESSION['alert_err_add_sp']); ?>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mã sản phẩm</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ma_sp" name="ma_sp" required placeholder="Mã sản phẩm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Danh mục</label>
                                <div class="col-md-9">
                                    <select name="ma_loai_sp" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                        <option>---Chọn---</option>
                                        <?php foreach ($arr as $key => $value) : ?>
                                            <option value="<?php echo $value->ma_loai; ?>"><?php echo $value->ten_loai_sp; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên sản phẩm</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_sp" name="ten_sp" required placeholder="ten san pham">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-inputs" name="f_hinh_anh" id="validatedCustomFile" required>
                                        <!-- <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hình ảnh chi tiết</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-inputs" name="f_hinh_anhs[]" id="validatedCustomFile" multiple="multiple" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số Lượng</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="so_luong" name="so_luong" required placeholder="so luong">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giá Bán</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="gia_ban" name="gia_ban" required placeholder="gia bán">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Thông tin</label>
                                <div class="col-sm-9">
                                    <textarea name="thong_tin" id="thong_tin" class="form-control"> </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control custom-select" name="trang_thai" style="width: 100%; height:36px;">
                                        <option>---Chọn---</option>
                                        <option value="1">Còn hàng</option>
                                        <option value="0">Hết hàng</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" name="btn-submit" class="btn btn-primary">Gửi</button>
                            </div>
                        </div>
                        
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>