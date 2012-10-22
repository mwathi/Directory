<?php

class City_Management extends Controller {
    function __construct() {
        parent::__construct();
        $this -> load -> library("pagination");
    }//end constructor

    public function index() {
        $this -> listing();
    }//end index

    public function listing($offset = 0) {
        $items_per_page = 10;
        $number_of_cities = Cities::getTotalNumber();
        $cities = Cities::getPagedCities($offset, $items_per_page);
        if ($number_of_cities > $items_per_page) {
            $config['base_url'] = base_url() . "city_management/listing/";
            $config['total_rows'] = $number_of_cities;
            $config['per_page'] = $items_per_page;
            $config['uri_segment'] = 3;
            $config['num_links'] = 5;
            $this -> pagination -> initialize($config);
            $data['pagination'] = $this -> pagination -> create_links();
        }
        $data['cities'] = $cities;
        $data['title'] = "City Management::All Cities";
        $data['module_view'] = "Cities_v";
        $this -> base_params($data);
    }//end listing

    public function add() {
        $data['title'] = "City Management::Add New City";
        $data['quick_link'] = "new_city";
        $data['module_view'] = "add_cities_view";
        $this -> base_params($data);
    }

    public function delete($id) {
        $this -> load -> database();
        $sql = 'delete from cities where id =' . $id . ' ';
        $query = $this -> db -> query($sql);
        redirect("city_management/listing", "refresh");
    }//end save

    public function edit_city($id) {
        $city = Cities::getCity($id);
        $data['city'] = $city[0];
        $data['title'] = "City Management";
        $data['module_view'] = "add_cities_view";
        $data['quick_link'] = "new_city";
        $this -> base_params($data);
    }

    public function save() {
        $city_name = $this -> input -> post("city_name");
        $coordinate = $this -> input -> post("coordinate");
        $city_id = $this -> input -> post("city_id");

        if (strlen($city_id) > 0) {
            $city = Cities::getCity($city_id);
            $city = $city[0];

        } else {
            $city = new Cities();
        }

        $valid = $this -> _validate_submission();
        if ($valid == false) {
            $this -> listing();
        } else {
            $city -> City_name = $city_name;
            $city -> Coordinate = $coordinate;

            $city -> save();
            redirect("city_management/listing");
        }//end else
    }//end save

    private function _validate_submission() {
        $this -> form_validation -> set_rules('city_name', 'City Name', 'trim|required|min_length[1]|max_length[25]');
        return $this -> form_validation -> run();
    }//end validate_submission

    public function base_params($data) {
        $data['userstuff'] = $this -> session -> userdata('username');            
        $data['styles'] = array("jquery-ui.css");
        $data['scripts'] = array("jquery-ui.js");
        $data['quick_link'] = "city_management";
        $data['content_view'] = "admin_view";
        if ($data['userstuff'] != "matthawi") {
            $this -> load -> view('restricted_v');
        } else {
            $this -> load -> view('admin_template', $data);
        }
    }//end base_params

}//end class
