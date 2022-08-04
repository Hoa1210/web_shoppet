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
}
