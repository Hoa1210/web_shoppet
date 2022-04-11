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
                            <h4 class="card-title">Add Product Type</h4>
                            <?php if (isset($_SESSION['alert_add_loai_sp'])) { ?>
                                <div class="alert alert-success"  role="alert">
                                    <?php echo $_SESSION['alert_add_loai_sp'];?>
                                </div>
                            <?php } unset($_SESSION['alert_add_loai_sp']);?>
                            <?php if (isset($_SESSION['alert_err_add_loai_sp'])) { ?>
                                <div class="alert alert-danger"  role="alert">
                                    <?php echo $_SESSION['alert_err_add_loai_sp'];?>
                                </div>
                            <?php } unset($_SESSION['alert_err_add_loai_sp']);?>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mã loại sản phẩm</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ma_loai" name="ma_loai" required placeholder="ma loai san pham">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên loại sản phẩm</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_loai_sp" name="ten_loai_sp" required placeholder="ten loai san pham">
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