<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Order Details</h1>
            <ul>
                <li><a href="user.php">Profile</a></li>
                <li><a href="order_history.php">Order Details</a></li>
                <li>Order Details</li>
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
                        <th scope="col">Product Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Quanlity</th>
                        <th scope="col">Total</th>
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

