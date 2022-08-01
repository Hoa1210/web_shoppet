<?php

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

