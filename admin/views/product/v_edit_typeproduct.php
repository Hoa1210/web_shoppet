<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" action="" enctype="multipart/form-data" method="POST">
                        <fieldset>
                            <div class="card-body">
                                <h4 class="card-title">Edit Type Product ID :  <?php echo $_GET['ma_loai']; ?></h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mã sản phẩm</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ma_loai" name="ma_loai" value="<?php echo $edit_typeproduct->ma_loai;?>"  placeholder="ma san pham">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên loại sản phẩm</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_loai_sp" name="ten_loai_sp" value="<?php echo $edit_typeproduct->ten_loai_sp ;?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Trang thai</label>
                                    <div class="col-sm-9">
                                        <select class="select2 form-control custom-select" name="trang_thai" style="width: 100%; height:36px;">
                                            <option>---Chon---</option>
                                            <option value="1" <?php if($edit_typeproduct->trang_thai == 1) echo"selected"; ?>>Open</option>
                                            <option value="0" <?php if($edit_typeproduct->trang_thai == 0) echo"selected"; ?>>Close</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </fieldset>

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