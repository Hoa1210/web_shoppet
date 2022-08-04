<?php
class c_size extends Controller
{

    public function index()
    {

        $name_size = $this->loadModel('size')->select_all_size();
        $this->loadView("size/v_index", $name_size);
    }

    public function create()
    {
        $create_size = '';
        if(isset($_POST['submit'])) {
            $id =  null;
            $name = ($_POST['name']) ? $_POST['name'] : null;
            $create_size = $this->loadModel('size')->create_size($id, $name);

            if (!empty($create_size)) {
                $_SESSION['alert_size'] = "Create size successfully";
            }
        }
        $this->loadView("size/v_create");
    }

    public function update(){
        
        $id = ($_GET['id']) ? $_GET['id'] : null ;
        $select_size_by_id = $this->loadModel('size')->select_size_by_id($id);
        if(isset($_POST['submit'])) {
            $name = ($_POST['name']) ? $_POST['name'] :  $select_size_by_id->name ;
            $resutl = $this->loadModel('size')->update_size_by_id($name,$id);
            if(!empty($resutl)) {
                $select_size_by_id = $this->loadModel('size')->select_size_by_id($id);
                $_SESSION['alert_size'] = "Update size successfully";
            }
        }
        $this->loadView("size/v_update",$select_size_by_id);
        
    }
}
