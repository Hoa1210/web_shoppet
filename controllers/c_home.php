<?php
class c_home {

    public function __construct()
    {
    }

    public function home() {

        $view = "views/home/v_home.php";

        include_once ("templates/layout.php");
    }
}
?>