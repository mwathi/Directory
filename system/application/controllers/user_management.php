<?php

class User_Management extends Controller {
    function __construct() {
        parent::__construct();
    }//end constructor

    public function index() {
        $this -> listing();
    }//end index

    public function listing() {
        $data = array();
        $data['settings_view'] = "users_v";
        $data['user_details'] = Users::getAll();
        $this -> base_params($data);
    }//end listing

    public function add() {
        $data['title'] = "User Management::Add New User";
        $data['quick_link'] = "new_user";
        $data['settings_view'] = "add_users_view";
        $this -> base_params($data);
    }

    public function delete($id) {
        $this -> load -> database();
        $sql = 'delete from users where id =' . $id . ' ';
        $query = $this -> db -> query($sql);
        redirect("user_management/listing", "refresh");
    }//end save

    public function register() {
        $data['title'] = "Registration";
        $this -> load -> view('registration_view',$data);
    }//end save

    public function edit_user($id) {
        $user = Users::getUsers($id);
        $data['users'] = $user[0];
        $data['title'] = "User Management";
        $data['settings_view'] = "add_users_view";
        $data['quick_link'] = "new_user";
        $this -> base_params($data);
    }

    public function save() {
        $valid = $this -> _validate_submission();
        if ($valid == false) {
            $this -> add();
        } else {
            $username = $this -> input -> post("username");
            $password = '123456';
            $name = $this -> input -> post("name");
            $email = $this -> input -> post("email");
            
            $user = new Users();
            $user -> Name = $name;
            $user -> Username = $username;
            $user -> Email = $email;
            $user -> Password = md5($password);

            $user -> save();
            redirect("user_management/listing");
        }//end else
    }//end save


    private function _validate_submission() {
        $this -> form_validation -> set_rules('name', 'Full Name', 'trim|required|min_length[2]|max_length[25]');
        $this -> form_validation -> set_rules('username', 'Username', 'trim|required|min_length[2]|max_length[25]|is_unique[users.username]');
        $this -> form_validation -> set_rules('email', 'User Email Address', 'trim|valid_email|required|is_unique[users.email]');
        return $this -> form_validation -> run();
    }//end validate_submissionis
    
    public function saveSelf() {
        $valid = $this -> _validate_self_submission();
        if ($valid == false) {
            $this -> load->view('registration_view');            
        } else {
            $username = $this -> input -> post("username");
            $password = $this -> input -> post("password");
            $name = $this -> input -> post("name");
            $email = $this -> input -> post("email");
            $email_confirm = $this -> input -> post("email_confirm");

            $user = new Users();
            $user -> Name = $name;
            $user -> Username = $username;
            $user -> Email = $email;
            $user -> Password = $password;

            $user -> save();
            redirect("login");
        }//end else
    }//end save


    private function _validate_self_submission() {
        $this -> form_validation -> set_rules('name', 'Full Name', 'trim|required|min_length[2]|max_length[25]');
        $this -> form_validation -> set_rules('username', 'Username', 'trim|required|min_length[2]|max_length[25]|is_unique[users.username]');
        $this -> form_validation -> set_rules('email', 'User Email Address', 'trim|valid_email|required|is_unique[users.email]');
        $this -> form_validation -> set_rules('email_confirm', 'Email Address Confirmation', 'trim|valid_email|required|matches[email_confirm]');
        return $this -> form_validation -> run();
    }//end validate_submissionis
    

    public function base_params($data) {
        $data['userstuff'] = $this -> session -> userdata('username');
        $data['title'] = "User Management";
        $data['styles'] = array("jquery-ui.css");
        $data['scripts'] = array("jquery-ui.js");
        $data['quick_link'] = "users";
        $data['content_view'] = "settings_v";
        $data['banner_text'] = "NQCL Settings";
        $data['link'] = "settings_management";
        if ($data['userstuff'] != "matthawi") {
            $this -> load -> view('restricted_v');
        } else {
            $this -> load -> view('admin_template', $data);
        }
    }//end base_params

}//end class
