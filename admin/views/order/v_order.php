
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
                        <h5 class="card-title">ORDER</h5>
                        <div class="table-responsive">
                            <?php if(isset($_SESSION['alert_delete_order'])) :?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_SESSION['alert_delete_order'];?>
                            </div>
                            <?php endif; unset($_SESSION['alert_delete_order']);?>
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên khách hàng</th>
                                    <th>Tổng tiền</th>
                                    <th>Phương thức thanh toán</th>
                                    <th>Trạng thái</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($list_order as $key=>$value) {

                                    if($value->phuong_thuc_thanh_toan==0) {
                                        $phuong_thuc_thanh_toan = "Tiền mặt";
                                    }elseif ($value->phuong_thuc_thanh_toan == 1){
                                        $phuong_thuc_thanh_toan = "Chuyển khoản";
                                    }

                                        $trang_thai0 = $value->trang_thai == 0 ? "selected" : "";
                                        $trang_thai1 = $value->trang_thai == 1 ? "selected" : "";
                                        $trang_thai2 = $value->trang_thai == 2 ? "selected" : "";

                                        $trang_thai0n = $value->trang_thai == 0 ? "Chưa nhận hàng - Chưa thanh toán" : "";
                                        $trang_thai1n = $value->trang_thai == 1 ? "Chưa nhận hàng - Đã thanh toán" : "";
                                        $trang_thai2n = $value->trang_thai == 2 ? "Đã nhận hàng - Đã thanh toán" : "";
                                        if ($value->trang_thai == 0) {
                                            $trang_thai = "Chưa nhận hàng - Chưa thanh toán";
                                        }elseif ($value->trang_thai == 1) {
                                            $trang_thai = "Chưa nhận hàng - Đã thanh toán";
                                        }elseif ($value->trang_thai == 2) {
                                            $trang_thai = "Đã nhận hàng - Đã thanh toán";
                                        }else {
                                            $trang_thai = "";
                                        }
                                ?>
                                    <tr>
                                        <td><?php echo $key ; ?></td>
                                        <td><?php echo $value->ma_dh; ?></td>
                                        <td><?php echo $value->ten_khach_hang ; ?></td>
                                        <td><?php echo $value->tong_tien ; ?></td>
                                        <td><?php echo $phuong_thuc_thanh_toan ; ?></td>
                                        <td>
                                            <?php echo $trang_thai; ?>
                                        </td>
                                        <td>

                                            <button type="button" class="btn btn-success btn-sm" onclick="window.location.href='order_details.php?ma_dh=<?php echo $value->ma_dh;?>'">Chi tiết</button>
                                            <button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='update_order.php?ma_dh=<?php echo $value->ma_dh;?>'">Cập nhật</button>
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