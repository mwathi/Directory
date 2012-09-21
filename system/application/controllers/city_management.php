<?php

class City_Management extends Controller{
    function __construct(){
        parent::__construct();
    }//end constructor
    
    public function index(){
        $this -> listing();
    }//end index
    
    public function listing(){
        $data = array();
        $data['settings_view'] = "cities_v";
        $data['city_details'] = Cities::getAllHydrated();
        $this -> table -> set_heading(array('id', 'City Name', 'Coordinate'));
        $this -> base_params($data);
    }//end listing
    
    public function save(){
        $valid = $this -> _validate_submission();
        if($valid == false){
            $this -> listing();
        }else{
            $city_name = $this -> input -> post("city_name");
            $coordinates = $this -> input -> post("coordinates");
            
            $city = new Cities();
            $city -> City_name = $city_name;
            $city -> Coordinate = $coordinates;
            
            $city -> save();
            redirect("city_management/listing");
        }//end else
    }//end save
    
    private function _validate_submission() {
        $this -> form_validation -> set_rules('city_name', 'City Name', 'trim|required|min_length[1]|max_length[25]');
        return $this -> form_validation -> run();
    }//end validate_submission
    
    public function base_params($data) {
        $data['styles'] = array("jquery-ui.css");
        $data['scripts'] = array("jquery-ui.js");
        $data['quick_link'] = "cities";
        $data['title'] = "System Settings";
        $data['content_view'] = "settings_v";
        $data['banner_text'] = "Rwanda Business Directory Settings";
        $data['link'] = "settings_management";
        
        $this -> load -> view('admin_template',$data);
    }//end base_params
}//end class
