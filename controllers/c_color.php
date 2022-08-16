<?php
class c_color extends Controller{

    public function index(){
        $select_all_color = $this->loadModel('color')->select_all_color();
        $this->loadView("color/v_index", $select_all_color);
    }
    
    public function create()
    {
        $create_color = '';
        if(isset($_POST['submit'])) {
            $id =  null;
            $name = ($_POST['name']) ? $_POST['name'] : null;
            $create_color = $this->loadModel('color')->create_color($id, $name);

            if (!empty($create_color)) {
                $_SESSION['alert_color'] = "Create color successfully";
            }
        }
        $this->loadView("color/v_create");
    }

    public function update(){
        
        $id = ($_GET['id']) ? $_GET['id'] : null ;
        $select_color_by_id = $this->loadModel('color')->select_color_by_id($id);
        if(isset($_POST['submit'])) {
            $name = ($_POST['name']) ? $_POST['name'] :  $select_color_by_id->name ;
            $resutl = $this->loadModel('color')->update_color_by_id($name,$id);
            if(!empty($resutl)) {
                $select_color_by_id = $this->loadModel('color')->select_color_by_id($id);
                $_SESSION['alert_color'] = "Update color successfully";
            }
        }
        $this->loadView("color/v_update",$select_color_by_id);
        
    }

    public function delete(){
        $id = ($_GET['id']) ? $_GET['id'] : null ;
        $delete_color_by_id = $this->loadModel('color')->delete_color_by_id($id);
        if(!empty($delete_color_by_id)) {
            $_SESSION['alert_color'] = "Delete color successfully";
            header("Location:" . _WEB_ROOT ."/color/index.html");
        }
    }
}