<?php

class Business_Management extends Controller {
    function __construct() {
        parent::__construct();
        $this -> load -> library("pagination");
    }//end constructor

    public function index() {
        $this -> listing();
    }//end index

    public function listing($offset = 0) {
        $items_per_page = 10;
        $number_of_businesses = Businesses::getTotalNumber();
        $businesses = Businesses::getPagedBusinesses($offset, $items_per_page);
        if ($number_of_businesses > $items_per_page) {
            $config['base_url'] = base_url() . "business_management/listing/";
            $config['total_rows'] = $number_of_businesses;
            $config['per_page'] = $items_per_page;
            $config['uri_segment'] = 3;
            $config['num_links'] = 5;
            $this -> pagination -> initialize($config);
            $data['pagination'] = $this -> pagination -> create_links();
        }
        $data['businesses'] = $businesses;
        $data['title'] = "Business Management::All Businesses";
        $data['module_view'] = "business_v";
        $this -> base_params($data);
    }//end listing

    public function add() {
        $data['title'] = "Business Management::Add New Business";
        $data['quick_link'] = "new_business";
        $data['module_view'] = "add_business_view";
        $data['city_data'] = Cities::getIdName();
        $data['category_data'] = Categories::getIdName();
        $this -> base_params($data);
    }

    public function save() {
        $business_name = $this -> input -> post("business");
        $coordinates = $this -> input -> post("coordinates");
        $city = $this -> input -> post("city");
        $category = $this -> input -> post("category");
        $business_id = $this -> input -> post("business_id");
        $building = $this -> input -> post("building");
        $floor = $this -> input -> post("floor");
        $road = $this -> input -> post("road");
        $box = $this -> input -> post("box");
        $telephone = $this -> input -> post("telephone");
        $fax = $this -> input -> post("fax");
        $mobile = $this -> input -> post("mobile");
        $email = $this -> input -> post("email");
        $website = $this -> input -> post("website");
        $company_information = $this -> input -> post("company_information");
        $getting_there = $this -> input -> post("getting_there");
        $products_services = $this -> input -> post("products_services");
        
                   
        if (strlen($business_id) > 0) {
           $business= Businesses::getBusiness($business_id);
           $business= $business[0];
        } else {
           $business = new Businesses();
        }
        
        $valid = $this -> _validate_submission();
        if ($valid == false) {
            $this -> listing();
        } else {
            $business -> Title = $business_name;
            $business -> Business_name = $business_name;
            $business -> Coordinate = $coordinates;
            $business -> City = $city;
            $business -> Category = $category;
            $business -> Building = $building;
            $business -> Floor = $floor;
            $business -> Road = $road;
            $business -> Box = $box;
            $business -> Telephone = $telephone;
            $business -> Fax = $fax;
            $business -> Mobile = $mobile;
            $business -> Email = $email;
            $business -> Website = $website;
            $business -> Company_information = $company_information;
            $business -> Getting_there = $getting_there;
            $business -> Products_services = $products_services;

            $business -> save();
            redirect("business_management/listing");
        }//end else
    }//end save

    public function delete($id) {
        $this -> load -> database();
        $sql = 'delete from businesses where id =' . $id . ' ';
        $query = $this -> db -> query($sql);
        redirect("business_management/listing", "refresh");
    }//end save

    public function edit_business($id) {
        $business = Businesses::getBusiness($id);
        $data['city_data'] = Cities::getIdName();
        $data['category_data'] = Categories::getIdName();
        $data['business'] = $business[0];
        $data['title'] = "Business Management";
        $data['module_view'] = "add_business_view";
        $data['quick_link'] = "new_business";
        $this -> base_params($data);
    }

    private function _validate_submission() {
        $this -> form_validation -> set_rules('business', 'Business Name', 'trim|required|min_length[1]');
        return $this -> form_validation -> run();
    }//end validate_submission

    public function base_params($data) {
        $data['scripts'] = array("jquery-ui.js", "tab.js");    
        $data['styles'] = array("jquery-ui.css","tab.css","pagination.css");
        $data['quick_link'] = "business_management";
        $data['content_view'] = "admin_view";
        $this -> load -> view('admin_template', $data);
    }//end base_params

}//end class
