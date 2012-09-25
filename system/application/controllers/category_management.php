<?php

class Category_Management extends Controller {
    function __construct() {
        parent::__construct();
    }//end constructor

    public function index() {
        $this -> listing();
    }//end index

    public function listing() {
        $data = array();
        $data['settings_view'] = "categories_v";
        $data['category_details'] = Categories::getAll();
        $this -> base_params($data);
    }//end listing

    public function add() {
        $data['title'] = "Category Management::Add New Category";
        $data['quick_link'] = "new_category";
        $data['settings_view'] = "add_category_view";
        $this -> base_params($data);
    }

    public function save() {
        $category_name = $this -> input -> post("category_name");
        $description = $this -> input -> post("description");
        $category_id = $this -> input -> post("category_id");

        if (strlen($category_id) > 0) {
            $category = Categories::getCategory($category_id);
            $category = $category[0];

        } else {
            $category = new Category();
        }

        $valid = $this -> _validate_submission();
        if ($valid == false) {
            $this -> listing();
        } else {
            $category -> Category_name = $category_name;
            $category -> Description = $description;

            $category -> save();
            redirect("category_management/listing");
        }//end else
    }//end save

    public function delete($id) {
        $this -> load -> database();
        $sql = 'delete from categories where id =' . $id . ' ';
        $query = $this -> db -> query($sql);
        redirect("category_management/listing", "refresh");
    }//end save

    public function edit_category($id) {
        $category = Categories::getCategory($id);
        $data['category'] = $category[0];
        $data['title'] = "Category Management";
        $data['settings_view'] = "add_category_view";
        $data['quick_link'] = "new_category";
        $this -> base_params($data);
    }

    private function _validate_submission() {
        $this -> form_validation -> set_rules('category_name', 'Category Name', 'trim|required|min_length[1]|max_length[25]');
        $this -> form_validation -> set_rules('description', 'Description', 'trim|required|min_length[5]|max_length[25]');
        return $this -> form_validation -> run();
    }//end validate_submission

    public function base_params($data) {
        $data['styles'] = array("jquery-ui.css");
        $data['scripts'] = array("jquery-ui.js");
        $data['quick_link'] = "categories";
        $data['title'] = "System Settings";
        $data['content_view'] = "settings_v";
        $data['banner_text'] = "Rwanda Business Directory Settings";
        $data['link'] = "settings_management";

        $this -> load -> view('admin_template', $data);
    }//end base_params

}//end class
