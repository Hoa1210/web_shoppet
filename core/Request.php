<?php
class Request{

    public $controller = 'home';
    public $method = 'index';
    public function __construct(){
        $this->getSystemParameters();
    }
    public function post($name){
        return $_POST[$name] ?? null;
    }

    public function get($name){
        return $_GET[$name] ?? null;
    }

    private function getSystemParameters(){
        if($this->get('controller') != null){
            $this->controller = 'c_' . $this->get('controller');
        }else{
            $this->controller = 'c_' . $this->controller;
        }
        if($this->get('method') != null){
            $this->method = $this->get('method');
        }else{
            $this->method = $this->method;
        }
    }
}