<?php

class Membership_Management extends Controller {
    function __construct() {
        parent::__construct();
    }//end constructor

    public function index() {
        $this -> add();
    }//end index

    public function add() {
        $data['title'] = "Membership Management::Add New Membership";
        $data['module_view'] = "add_membership_view";
        $this -> base_params($data);
    }

    public function save() {
        $membership_name = $this -> input -> post("membership_name");
        $description = $this -> input -> post("description");
        
        $membership = new Membership();
        $membership -> Membership = $membership_name;
        $membership -> Description = $description;

        $membership -> save();
        redirect("membership_management/add");

    }//end save

    public function base_params($data) {
        $data['styles'] = array("jquery-ui.css");
        $data['scripts'] = array("jquery-ui.js");
        $data['content_view'] = "admin_view";
        $this -> load -> view('admin_template', $data);

    }//end base_params

}//end class
