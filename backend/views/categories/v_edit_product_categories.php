<div class="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6" >
                <div class="card">
                    <form class="form-horizontal" action="" enctype="multipart/form-data" method="POST">
                        <fieldset>
                            <div class="card-body">
                                <h4 class="card-title">Sửa Danh Mục có ID :  <?php echo $_GET['ma_loai']; ?></h4>
                                <?php if (isset($_SESSION['alert_err_product'])) { ?>
                                    <div class="alert alert-danger"  role="alert">
                                        <?php echo $_SESSION['alert_err_product'];?>
                                    </div>
                                <?php } unset($_SESSION['alert_err_product']);?>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mã danh mục</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ma_loai" required name="ma_loai" value="<?php echo $edit_typeproduct->ma_loai;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên danh mục</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ten_loai_sp" required name="ten_loai_sp" value="<?php echo $edit_typeproduct->ten_loai_sp ;?>" >
                                    </div>
                                </div>
                            </div>
                        </fieldset>
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