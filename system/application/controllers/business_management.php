<?php

class Business_Management extends Controller {
    function __construct() {
        parent::__construct();
    }//end constructor

    public function index() {
        $this -> listing();
    }//end index

    public function listing() {
        $data = array();
        $data['settings_view'] = "business_v";
        $data['city_data'] = Cities::getIdName();
        $data['category_data'] = Categories::getIdName();
        //$data['business_details'] = Businesses::getAllHydrated();
       
        $this -> load ->database();
        $sql = 'SELECT b.title,b.business_name,c.city_name,b.coordinate,d.category_name from businesses b,cities c,categories d where b.category = d.id and b.city = c.id';
        $query = $this -> db ->query($sql);
        $data['business_details'] = $query ->result_array();
        
        $this -> table -> set_heading(array('id','Business','City','Coordinate','Category'));
        $this -> base_params($data);
    }//end listing

    public function save() {
        $valid = $this -> _validate_submission();
        if ($valid == false) {
            $this -> listing();
        } else {
            $business_name = $this -> input -> post("business");
            $coordinates = $this -> input -> post("coordinates");
            $city = $this -> input -> post("city");
            $category = $this -> input -> post("category");

            $business = new Businesses();
            $business -> Title = $business_name;
            $business -> Business_name = $business_name;
            $business -> Coordinate = $coordinates;
            $business -> City = $city;
            $business -> Category = $category;

            $business -> save();
            redirect("business_management/listing");
        }//end else
    }//end save

    private function _validate_submission() {
        $this -> form_validation -> set_rules('business', 'Business Name', 'trim|required|min_length[1]');
        return $this -> form_validation -> run();
    }//end validate_submission

    public function base_params($data) {
        $data['styles'] = array("jquery-ui.css");
        $data['scripts'] = array("jquery-ui.js");
        $data['quick_link'] = "business";
        $data['title'] = "System Settings";
        $data['content_view'] = "settings_v";
        $data['banner_text'] = "Rwanda Business Directory Settings";
        $data['link'] = "settings_management";

        $this -> load -> view('admin_template', $data);
    }//end base_params

}//end class
