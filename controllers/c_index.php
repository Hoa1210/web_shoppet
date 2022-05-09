<?php
include ("models/m_product.php");

class c_index {

    public function home() {
        $m_product = new m_product();
        $product = $m_product->read_product();

        $view = "views/home/v_home.php";
        include_once ("templates/layout.php");
    }
}
?>