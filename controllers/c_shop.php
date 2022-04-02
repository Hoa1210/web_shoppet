<?php
include ("models/m_product.php");
include ("models/m_search.php");
class c_shop {

    public function shop() {
        $m_product = new m_product();
        $product_add = $m_product->read_product();

        $item_per_page = 8;
        $current_page = isset($_GET['page']) ? $_GET['page']: 1 ;
        $offset = ($current_page - 1) * $item_per_page;

        $max_page = ceil(sizeof($product_add)/$item_per_page);

        $product = $m_product->read_product_by_page($item_per_page, $offset);


        $view = "views/shop/v_shop.php";
        include ("templates/layout.php");

    }


    public function search() {

        if(isset($_POST['tim_kiem'])) {

            $tu_khoa = $_POST['tu_khoa'];

            $m_product = new m_search();
            $product_add = $m_product->read_product_by_name($tu_khoa);

            $item_per_page = 8;
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $offset = ($current_page - 1) * $item_per_page;

            $max_page = ceil(sizeof($product_add) / $item_per_page);

            $m_search = new m_search();
            $search = $m_product->read_product_by_page($tu_khoa,$item_per_page,$offset);
            if (sizeof($search) < 8) {
                $item_per_page = sizeof($search);
            }

            $view = "views/search/v_search.php";
            include("templates/layout.php");
        }

    }

}
?>