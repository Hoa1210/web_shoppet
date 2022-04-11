
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
                        <h5 class="card-title">PRODUCTS</h5>

                        <div class="table-responsive">

                            <div class="border-top" style="display: flex;">
                                <div class="card-body" style="flex: 0;">
                                    <button type="button" class="btn btn-success btn-lg" onclick="window.location.href='list_product.php'">Return</button>
                                </div>
                                <div class="card-body" style="flex: 0;">
                                    <button type="button" class="btn btn-success btn-lg" onclick="window.location.href='add_product_type.php'">Add Product Type</button>
                                </div>
                            </div>
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th> Mã loại sản phẩm</th>
                                    <th>Tên loại sản phẩm</th>


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
                                            <button type="button" class="btn btn-success btn-sm" onclick="window.location.href='edit_typeproduct.php?ma_loai=<?php echo $value->ma_loai;?>'">Sửa</button>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="window.location.href='delete_typeproduct.php?ma_loai=<?php echo $value->ma_loai;?>'">Xóa</button>
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
