<?php
error_reporting(0);
class Personal_Controller extends Controller {
    function __construct() {
        parent::__construct();
        $this -> load -> library("pagination");
        $this -> load -> database();
    }//end constructor

    public function index() {
        $this -> page();
    }//end index

    public function page() {
        if ($this -> session -> userdata('username') == NULL) {
            $this -> load -> view('restricted_v');
        } else {
            $data['title'] = "Rwanda Business Directory Login Page";
            $data['content_view'] = "personal_main_v";
            $this -> base_params($data);
        }
    }

    public function personal_business_listing($offset = 0) {
        if ($this -> session -> userdata('username') == NULL) {
            $this -> load -> view('restricted_v');
        } else {
            $items_per_page = 10;
            $number_of_businesses = Businesses::getTotalNumberPersonal($this -> session -> userdata('userid'));
            $businesses = Businesses::getPagedBusinessesPersonal($offset, $items_per_page, $this -> session -> userdata('userid'));
            if ($number_of_businesses > $items_per_page) {
                $config['base_url'] = base_url() . "personal_controller/personal_business_listing/";
                $config['total_rows'] = $number_of_businesses;
                $config['per_page'] = $items_per_page;
                $config['uri_segment'] = 3;
                $config['num_links'] = 5;
                $this -> pagination -> initialize($config);
                $data['pagination'] = $this -> pagination -> create_links();
            }
            $data['businesses'] = $businesses;
            $data['title'] = "Business Management::All Businesses";
            $data['content_view'] = "personal_business_v";
            $this -> base_params($data);
        }
    }

    public function save() {
        $owner = $this -> session -> userdata('userid');
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

        if (strlen($business_id) > 0) {
            $business = Businesses::getBusiness($business_id);
            $business = $business[0];
        } else {
            $business = new Businesses();
        }

        $valid = $this -> _validate_submission();
        if ($valid == false) {
            $this -> personal_business_listing();
        } else {

            $config['upload_path'] = './';
            $config['allowed_types'] = 'jpeg|jpg';
            $config['max_size'] = '10000';

            $this -> load -> library('upload', $config);
            if (!$this -> upload -> do_upload()) {
                $data['error'] = array('error' => $this -> upload -> display_errors());
                $this -> load -> view('personal_add_business_view', $data);
            } else {
                $data = array('upload_data' => $this -> upload -> data());
                //$this -> base_params($data);
            }
            $pic = ($_FILES['userfile']['name']);
            $business -> Image = $pic;
            $business -> Owner = $owner;
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

            $business -> save();
            redirect("personal_controller/personal_business_listing");
        }//end else
    }//end save

    public function saveSelf() {
        $username = $this -> input -> post("username");
        $password = $this -> input -> post("password");
        $name = $this -> input -> post("name");
        $email = $this -> input -> post("email");
        $email_confirm = $this -> input -> post("email_confirm");

        $valid = $this -> _submit_validate();
        if ($valid == false) {
            $this -> register();
        } else {
            $user = new Users();
            $user -> Name = $name;
            $user -> Username = $username;
            $user -> Email = $email;
            $user -> Password = md5($password);
            //mkdir('/xampp/htdocs/Directory/system/Images/'.$username);
            $user -> save();
            redirect("login");
        }//end else
    }//end save

    private function _submit_validate() {
        // validation rules
        $this -> form_validation -> set_rules('username', 'Username', 'required|min_length[5]|max_length[20]|is_unique[users.username]');
        $this -> form_validation -> set_rules('email', 'Email', 'required|matches[email_confirm]|valid_email|is_unique[users.email]');
        $this -> form_validation -> set_rules('email_confirm', 'Email Confirmation', 'required|valid_email');
        $this -> form_validation -> set_rules('name', 'Full Name', 'trim|required|min_length[2]|max_length[50]');
        $this -> form_validation -> set_rules('password', 'Password', 'required|min_length[6]|max_length[50]');
        return $this -> form_validation -> run();
    }

    private function _validate_submission() {
        $this -> form_validation -> set_rules('business', 'Business Name', 'trim|required|min_length[2]|max_length[25]');
        //$this -> form_validation -> set_rules('username', 'Username', 'trim|required|min_length[2]|max_length[25]|is_unique[users.username]');
        //$this -> form_validation -> set_rules('email', 'User Email Address', 'trim|valid_email|required|is_unique[users.email]');
        return $this -> form_validation -> run();
    }//end validate_submission

    public function register() {
        $data['title'] = "User Management::Register";
        $data['content_view'] = "registration_view";
        $this -> load -> view('registration_view', $data);
    }

    public function add() {
        if ($this -> session -> userdata('username') == NULL) {
            $this -> load -> view('restricted_v');
        } else {
            $data['title'] = "Rwanda Business Directory Add Business Page";
            $data['content_view'] = "personal_add_business_view";
            $data['city_data'] = Cities::getIdName();
            $data['category_data'] = Categories::getIdName();
            $this -> base_params($data);
        }
    }

    public function edit_business($id) {
        $business = Businesses::getBusiness($id);
        $data['city_data'] = Cities::getIdName();
        $data['category_data'] = Categories::getIdName();
        $data['business'] = $business[0];
        $data['title'] = "Business Management";
        $data['content_view'] = "personal_add_business_view";
        $data['quick_link'] = "new_business";
        $this -> base_params($data);
    }

    public function base_params($data) {
        $data['scripts'] = array("jquery-ui.js");
        $data['styles'] = array("jquery-ui.css");
        $this -> load -> view('personal_view', $data);
    }//end base_params

}//end class
