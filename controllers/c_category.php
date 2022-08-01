<?php

class c_category extends Controller
{

    public function index()
    {
        $list_category = $this->loadModel('category');
        $category = $list_category->select_category();
        $this->loadView('category/v_index', $category);
    }

