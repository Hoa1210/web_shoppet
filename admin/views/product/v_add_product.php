<div class="page-wrapper">
    <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-6" style="width: 50%;">
            <div class="card">
                <form class="form-horizontal" action="" enctype="multipart/form-data" method="POST">
                    <div class="card-body" >
                        <h4 class="card-title">Personal Info</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mã sản phẩm</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ma_sp" name="ma_sp" placeholder="ma san pham">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Loại sản phẩm</label>
                            <div class="col-md-9">
                                <select name="ma_loai_sp" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                    <option>---Chọn---</option>
                                    <?php foreach ($arr as $key=>$value) : ?>
                                        <option value="<?php echo $value->ma_loai; ?>" ><?php echo $value->ten_loai_sp; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên sản phẩm</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ten_sp" name="ten_sp" placeholder="ten san pham">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Hinh anh</label>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name = "f_hinh_anh" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Số Lượng</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="so_luong" name="so_luong" placeholder="so luong">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giá Bán</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="gia_ban" name="gia_ban" placeholder="gia bán">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Thông tin</label>
                            <div class="col-sm-9">
                                <textarea name="thong_tin" id="thong_tin"  class="form-control" > </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Trang thai</label>
                            <div class="col-sm-9">
                                <select class="select2 form-control custom-select" name="trang_thai" style="width: 100%; height:36px;">
                                    <option>---Chon---</option>
                                    <option value="1">Open</option>
                                    <option value="0">Close</option>
                                </select>
                            </div>
                         </div>

                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- editor -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
</div>