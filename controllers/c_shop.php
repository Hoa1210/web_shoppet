<?php
include ("models/m_product.php");

class c_shop {

    public function __construct()
    {
    }

    public function shop() {
        $m_product = new m_product();
        $product = $m_product->read_product();

        $view = "views/shop/v_shop.php";
        include ("templates/layout.php");
    }
}
?>