<?php
include ("models/m_product.php");
class c_products_details {
    public function product_details() {

        if(isset($_GET['ma_sp'])) {

            $ma_sp = $_GET['ma_sp'];
            $product = new m_product();

            $review = $product->select_product_by_id_product($ma_sp);

            $img_product = $product->read_img_product($ma_sp);

        }


        $view = "views/products_details/v_products_details.php";
        include ("templates/layout.php");
    }
}