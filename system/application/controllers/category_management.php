<?php

class Category_Management extends Controller {
    function __construct() {
        parent::__construct();
        $this -> load -> library("pagination");
    }//end constructor

    public function index() {
        $this -> listing();
    }//end index

    public function listing($offset = 0) {
        $items_per_page = 20;
        $number_of_categories = Categories::getTotalNumber();
        $categories = Categories::getPagedCategories($offset, $items_per_page);
        if ($number_of_categories > $items_per_page) {
            $config['base_url'] = base_url() . "category_management/listing/";
            $config['total_rows'] = $number_of_categories;
            $config['per_page'] = $items_per_page;
            $config['uri_segment'] = 3;
            $config['num_links'] = 5;
            $this -> pagination -> initialize($config);
            $data['pagination'] = $this -> pagination -> create_links();
        }
        $data['categories'] = $categories;
        $data['title'] = "Category Management::All Categories";
        $data['module_view'] = "categories_v";
        $this -> base_params($data);        
    }//end listing

    public function add() {
        $data['title'] = "Category Management::Add New Category";
        $data['quick_link'] = "new_category";
        $data['module_view'] = "add_category_view";
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
            $category = new Categories();
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
        $data['module_view'] = "add_category_view";
        $data['quick_link'] = "new_category";
        $this -> base_params($data);
    }

    private function _validate_submission() {
        $this -> form_validation -> set_rules('category_name', 'Category Name', 'trim|required|min_length[1]|max_length[25]');
        $this -> form_validation -> set_rules('description', 'Description', 'trim|required|min_length[5]|max_length[250]');
        return $this -> form_validation -> run();
    }//end validate_submission

    public function base_params($data) {
        $data['styles'] = array("jquery-ui.css");
        $data['scripts'] = array("jquery-ui.js");
        $data['quick_link'] = "category_management";
        $data['content_view'] = "admin_view";
        $this -> load -> view('admin_template', $data);
    }//end base_params

}//end class
