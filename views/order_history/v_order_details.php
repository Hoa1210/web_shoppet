<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Chi Tiết Đơn hàng</h1>
            <ul>
                <li><a href="user.php">Trang Cá Nhân</a></li>
                <li><a href="order_history.php">Lịch sử mua hàng</a></li>
                <li>Chi Tiết Đơn hàng</li>
            </ul>
        </div>
    </div>
</div>

<div class="wishlist-area ptb-100">
    <div class="container">
        <form>
            <div class="wishlist-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($details as $key=>$value) : ?>
                        <tr>
                            <td><?php echo $key+1;?></td>
                            <td class="order-id"><?php echo $value->ten_sp;?></td>
                            <td>
                                <a onclick="window.location.href='products_details.php?action=add1&&ma_sp=<?php echo $value->ma_sp;?>'">
                                    <img src="admin/public/imageproduct/<?php echo $value->hinh_anh;?>" alt="item">
                                </a>
                            </td>
                            <td class="product-quanlity"><?php echo $value->so_luong;?></td>
                            <td class="price"><?php echo number_format($value->gia_ban * $value->so_luong);?> VNĐ</td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>

