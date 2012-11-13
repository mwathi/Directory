<?php

class Sponsored_Links extends Controller {
    function __construct() {
        parent::__construct();
    }//end constructor

    public function index() {
        $this -> add();
    }//end index

    public function add() {
        $data['title'] = "Sponsored Links::Add New Link";
        $data['module_view'] = "add_sponsorship_link_view";
        $this -> base_params($data);
    }

    public function save() {
        $name = $this -> input -> post("name");
        $link = $this -> input -> post("link");
        $description = $this -> input -> post("description");
        
        $sponsoredLink = new Link();
        $sponsoredLink -> Link = $link;
        $sponsoredLink -> Name = $name;
        $sponsoredLink -> Description = $description;

        $sponsoredLink -> save();
        redirect("sponsored_links/add");

    }//end save

    public function base_params($data) {
        $data['userstuff'] = $this -> session -> userdata('username');
        $data['styles'] = array("jquery-ui.css");
        $data['scripts'] = array("jquery-ui.js");
        $data['content_view'] = "admin_view";
        if ($data['userstuff'] != "matthawi") {
            $this -> load -> view('restricted_v');
        } else {
            $this -> load -> view('admin_template', $data);
        }
    }//end base_params

}//end class
