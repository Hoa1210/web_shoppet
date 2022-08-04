<?php
class c_size extends Controller
{

    public function index()
    {

        $name_size = $this->loadModel('size')->select_all_size();
        $this->loadView("size/v_index", $name_size);
    }

