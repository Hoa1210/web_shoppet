<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Order History</h1>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li>Order History</li>
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
                        <th scope="col">Order Id</th>
                        <th scope="col">Total Money</th>
                        <th scope="col">Order Address</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($history as $key=>$value) : ?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td class="order-id"><?php echo $value->ma_dh;?></td>
                        <td class="product-price"><?php echo number_format($value->tong_tien);?> VNĐ</td>
                        <td class="order_address"><?php echo $value->dia_chi;?></td>
                        <td class="product-stock-status">
                            <?php if($value->trang_thai == 1){ ?>
                            <span class="in-stock"><i class='bx bx-check-circle'></i> Đã nhận hàng</span>
                            <?php }else{?>
                            <span class="out-stock"><i class='bx bx-x'></i> Chưa nhận hàng</span>
                            <?php }?>
                        </td>
                        <td>
                            <a href="order_details.php?ma_dh=<?php echo $value->ma_dh;?>" class="default-btn"><span>Order Details</span></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
