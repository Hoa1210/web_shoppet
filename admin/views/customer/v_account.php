
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CUSTOMMER</h5>
                        <?php if(isset($_SESSION['alert_open_account'])) :?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_SESSION['alert_open_account'];?>
                            </div>
                        <?php endif; unset($_SESSION['alert_open_account']);?>
                        <?php if(isset($_SESSION['alert_lock_account'])) :?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['alert_lock_account'];?>
                            </div>
                        <?php endif; unset($_SESSION['alert_lock_account']);?>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Email</th>
                                    <th>Trạng thái</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($list_account as $key=>$value) {
                                    switch ($value->trang_thai) {
                                        case '0':
                                            $css_trang_thai = "badge-info";
                                            $text_trang_thai = "Mở";
                                            $text_button = "Khóa";
                                            break;
                                        case '1':
                                            $css_trang_thai = "badge-danger";
                                            $text_trang_thai = "khóa";
                                            $text_button = "Mở";
                                            break;
                                    }
                                    ?>
                                    <tr>
                                        <td><?php echo $key+1 ; ?></td>
                                        <td><?php echo $value->ten_dang_nhap; ?></td>
                                        <td><?php echo $value->email ; ?></td>
                                        <td> <span class="badge badge-pill <?php echo $css_trang_thai;?>"><?php echo $text_trang_thai;?> </span></td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm" onclick="window.location.href='customer_details.php?ma_kh=<?php echo $value->id;?>'">Chi Tiết</button>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="window.location.href='status_customer.php?ma_kh=<?php echo $value->id;?>&&trang_thai=<?php echo $value->trang_thai;?>'"><?php echo $text_button;?></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
