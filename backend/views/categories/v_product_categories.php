
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
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh mục sản phẩm</li>
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
                        <h5 class="card-title">Danh Mục Sản Phẩm</h5>
                        <?php if (isset($_SESSION['alert_type_product'])) { ?>
                            <div class="alert alert-success"  role="alert">
                                <?php echo $_SESSION['alert_type_product'];?>
                            </div>
                        <?php } unset($_SESSION['alert_type_product']);?>
                        <?php if (isset($_SESSION['alert_err_type_product'])) { ?>
                            <div class="alert alert-danger"  role="alert">
                                <?php echo $_SESSION['alert_err_type_product'];?>
                            </div>
                        <?php } unset($_SESSION['alert_err_type_product']);?>
                        <div class="table-responsive">

                            <div class="border-top" style="display: flex;">
                                <div class="card-body" style="flex: 0;">
                                    <button type="button" class="btn btn-success btn-lg" onclick="window.location.href='add_product_categories.php'">Thêm danh mục</button>
                                </div>
                            </div>
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã danh mục</th>
                                    <th>Tên danh mục</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($show_type as $key=>$value) {
                                    ?>
                                    <tr>
                                        <td><?php echo $key+1 ; ?></td>
                                        <td><?php echo $value->ma_loai ; ?></td>
                                        <td><?php echo $value->ten_loai_sp ; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm" onclick="window.location.href='edit_product_categories.php?ma_loai=<?php echo $value->ma_loai;?>'">Sửa</button>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="window.location.href='delete_product_categories.php?ma_loai=<?php echo $value->ma_loai;?>'">Xóa</button>
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
    </div>
</div>
