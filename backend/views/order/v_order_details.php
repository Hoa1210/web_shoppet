
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
                            <li class="breadcrumb-item active" aria-current="page">Chi tiết đơn hàng</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Chi Tiết Đơn Hàng</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình hảnh</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($details as $key=>$value) : ?>
                                <tr>
                                    <td><?php echo $key+1;?></td>
                                    <td class="order-id"><?php echo $value->ten_sp;?></td>
                                    <td>
                                        <a>
                                            <img width="150px" src="public/imageproduct/<?php echo $value->hinh_anh;?>" alt="item">
                                        </a>
                                    </td>
                                    <td class="product-quanlity"><?php echo $value->so_luong;?></td>
                                    <td class="price"><?php echo number_format($value->gia_ban * $value->so_luong);?> VNĐ</td>

                                </tr>
                                <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>