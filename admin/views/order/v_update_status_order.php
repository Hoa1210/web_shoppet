
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
                        <h5 class="card-title">UPDATE STATUS</h5>
                        <form action="" method="post">
                        <div class="table-responsive">
                            <?php if(isset($_SESSION['alert_delete_order'])) :?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $_SESSION['alert_delete_order'];?>
                                </div>
                            <?php endif; unset($_SESSION['alert_delete_order']);?>
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Trạng thái</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $trang_thai0 = $status->trang_thai == 0 ? "selected" : "";
                                    $trang_thai1 = $status->trang_thai == 1 ? "selected" : "";
                                    $trang_thai2 = $status->trang_thai == 2 ? "selected" : "";
                                    ?>
                                    <tr>
                                        <td>
                                            <select name="trang_thai" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option value="0" <?php echo $trang_thai0; ?>>Chưa nhận hàng - Chưa thanh toán</option>
                                                <option value="1" <?php echo $trang_thai1; ?>>Chưa nhận hàng - Đã thanh toán</option>
                                                <option value="2" <?php echo $trang_thai2; ?>>Đã nhận hàng - Đã thanh toán</option>

                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-cyan btn-sm" name="btn_update">Update</button>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        </form>
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