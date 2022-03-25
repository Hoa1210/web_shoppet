<?php
class c_about_us {

    public function __construct()
    {
    }

    public function about() {
        $view = "views/about_us/v_about_us.php";
        include ("templates/layout.php");
    }
}
?>