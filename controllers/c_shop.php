<?php
include ("models/m_product.php");

class c_shop {

    public function shop() {
        $m_product = new m_product();
        $product_add = $m_product->read_product();

        $item_per_page = 4;
        $current_page = isset($_GET['page']) ? $_GET['page']: 1 ;
        $offset = ($current_page - 1) * $item_per_page;

        $max_page = ceil(sizeof($product_add)/$item_per_page);

        $product = $m_product->read_product_by_page($item_per_page, $offset);


        $view = "views/shop/v_shop.php";
        include ("templates/layout.php");

    }



}
?>