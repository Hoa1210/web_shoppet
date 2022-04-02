<?php
include ("models/m_product.php");
class c_home {

    public function home() {
        $item_per_page = 6;
        $offset = 0;
        $m_product = new m_product();
        $product = $m_product->read_product_by_page($item_per_page, $offset);

        $view = "views/home/v_home.php";
        include_once ("templates/layout.php");
    }
}
?>