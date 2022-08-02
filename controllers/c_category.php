<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");

class c_category extends Controller
{

    public function index()
    {
        $list_category = $this->loadModel('category');
        $category = $list_category->select_category();
        $this->loadView('category/v_index', $category);
    }


    public function create()
    {
        $alert = '';
        if (isset($_POST['submit'])) {
            $id    = null;
            $name    = ($_POST['name']) ? $_POST['name'] : '';
            $slug    = ($_POST['slug']) ? $_POST['slug'] : '';
            $description    = ($_POST['description']) ? $_POST['description'] : '';
            $image = ($_FILES['image']['error'] == 0) ? $_FILES['image']['name'] : '';

            $m_category = $this->loadModel('category');
            $resutl = $m_category->insert_category($id, $name, $slug, $description, $image);

            if ($resutl) {
                if (file_exists("public/uploads/category")) {
                    move_uploaded_file($_FILES['image']['tmp_name'], 'public/uploads/category/' . $_FILES['image']['name']);
                    $alert = [
                        "status" => "success",
                        "message" => "Create category successfully",
                    ];
                } else {
                    mkdir("public/uploads/category", 0777);
                    move_uploaded_file($_FILES['image']['tmp_name'], 'public/uploads/category/' . $_FILES['image']['name']);
                }
            } else {
                $alert = [
                    "status" => "error",
                    "message" => "Create category successfully",
                ];
            }
        }
        $this->loadView('category/v_create', $alert);
    }

    public function update()
    {
        $id = ($_GET['id']) ? $_GET['id'] : '';
        $m_category1 = $this->loadModel('category');
        $alert1 = (array) $m_category1->select_category_with_id($id);
        if ($alert1) {
            if (isset($_POST['submit'])) {
                $name    = ($_POST['name']) ? $_POST['name'] : $alert1['name'];
                $slug    = ($_POST['slug']) ? $_POST['slug'] : $alert1['slug'];
                $description    = ($_POST['description']) ? $_POST['description'] : $alert1['description'];
                $image = ($_FILES['image']['error'] == 0) ? $_FILES['image']['name'] : $alert1['image'];
                $updated_at = date("Y-m-d H:i:s");


                $resutl2 = $m_category1->update_category($name, $slug, $description, $image, $updated_at, $id);
                if (!empty($resutl2)) {

                    if (!file_exists("public/uploads/category/" . $image)) {
                        move_uploaded_file($_FILES['image']['tmp_name'], 'public/uploads/category/' . $_FILES['image']['name']);
                    }
                    $alert = [
                        'content' => 'Update category successfully',
                        'status' => 'success',
                    ];
                    $alert1 = array_merge((array) $m_category1->select_category_with_id($id), $alert);
                }
            }
        }
        $this->loadView('category/v_update', $alert1);
    }
}
