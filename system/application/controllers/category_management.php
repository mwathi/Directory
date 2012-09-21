<?php

class Category_Management extends Controller{
    function __construct(){
        parent::__construct();
    }//end constructor
    
    public function index(){
        $this -> listing();
    }//end index
    
    public function listing(){
        $data = array();
        $data['settings_view'] = "categories_v";
        $data['category_details'] = Categories::getAllHydrated();
        $this -> table -> set_heading(array('id', 'Category Name', 'Description'));
        $this -> base_params($data);
    }//end listing
    
    public function save(){
        $valid = $this -> _validate_submission();
        if($valid == false){
            $this -> listing();
        }else{
            $category_name = $this -> input -> post("category_name");
            $description = $this -> input -> post("description");
            
            $category = new Categories();
            $category -> Category_name = $category_name;
            $category -> Description = $description;
            
            $category -> save();
            redirect("category_management/listing");
        }//end else
    }//end save
    
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
        
        $this -> load -> view('admin_template',$data);
    }//end base_params
}//end class
