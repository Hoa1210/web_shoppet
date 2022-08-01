<?php
class Controller
{

    public function loadModel($modelName)
    {
        $modelName = 'm_' . $modelName;

        if (file_exists('models/' . $modelName . '.php')) {
            require_once 'models/' . $modelName . '.php';
            return new $modelName();
        }
    }
    public function loadView($viewName, $data = [])
    {
        // if(!empty($data)){
        //     extract($data);
        // }
        if (file_exists('views/' . $viewName . '.php')) {
            if(strlen(strstr($viewName, "auth")) > 0) {
                // kiểm tra trong $viewName có auth không , bằng cách lấy ra chuỗi con trong $viewName rồi kiểm tra độ dài 
                require_once 'views/' . $viewName . '.php';
            }else{
                require_once 'views/layouts/master.php';
            }
            
        }
    }
}
