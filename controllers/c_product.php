<?php
class c_product extends Controller
{


    public function index()
    {
        $m_product = $this->loadModel('product');
        $this->loadView('product/v_index',$m_product);
    }
    

    public function create()
    {
        
        $this->loadView('product/v_create');
        // echo html_entity_decode($description);
    }
}
