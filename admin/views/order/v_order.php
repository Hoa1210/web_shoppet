
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
                                    $css_trang_thai = $value->trang_thai ? "badge-info" : "badge-danger";
                                    $text_trang_thai = $value->trang_thai ? "Đã thanh toán" : "Chưa thanh toán";
                                ?>
                                    <tr>
                                        <td><?php echo $key ; ?></td>
                                        <td><?php echo $value->ma_hd; ?></td>
                                        <td><?php echo $value->ten_khach_hang ; ?></td>
                                        <td><?php echo $value->tong_tien ; ?></td>
                                        <td><?php echo $value->phuong_thuc_thanh_toan ; ?></td>
                                        <td> <span class="badge badge-pill <?php echo $css_trang_thai;?>"><?php echo $text_trang_thai;?> </span></td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="window.location.href='delete_order.php?ma_hd=<?php echo $value->ma_hd;?>'">Delete</button>
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