<?php
class Sponsored_Links extends Controller {
    function __construct() {
        parent::__construct();
        $this -> load -> library("pagination");
    }//end constructor

    public function index() {
        $this -> listing();
    }//end index

    public function add() {
        $data['title'] = "Sponsored Links::Add New Link";
        $data['module_view'] = "add_sponsorship_link_view";
        $this -> base_params($data);
    }

    public function listing($offset = 0) {
        $items_per_page = 20;
        $number_of_sponsors = Sponsored_Link::getTotalNumber();
        $sponsors = Sponsored_Link::getPagedSponsors($offset, $items_per_page);
        if ($number_of_sponsors > $items_per_page) {
            $config['base_url'] = base_url() . "sponsored_links/listing/";
            $config['total_rows'] = $number_of_sponsors;
            $config['per_page'] = $items_per_page;
            $config['uri_segment'] = 3;
            $config['num_links'] = 5;
            $this -> pagination -> initialize($config);
            $data['pagination'] = $this -> pagination -> create_links();
        }
        $data['sponsors'] = $sponsors;
        $data['title'] = "Sponsored Links::All Links";
        $data['module_view'] = "sponsored_links_view";
        $this -> base_params($data);
    }//end listing

    public function save() {
        $id = $this -> input -> post("id");
        $linkname = $this -> input -> post("linkname");
        $link = $this -> input -> post("link");
        $description = $this -> input -> post("description");

        if (strlen($id) > 0) {
            $sponsoredLink = Sponsored_Link::getSponsor($id);
            $sponsoredLink = $sponsoredLink[0];
        } else {
            $sponsoredLink = new Sponsored_Link();
        }
        $sponsoredLink -> Link = $link;
        $sponsoredLink -> Name = $linkname;
        $sponsoredLink -> Description = $description;

        $sponsoredLink -> save();
        redirect("sponsored_links/listing");

    }//end save

    public function delete($id) {
        $this -> load -> database();
        $sql = 'delete from sponsored_link where id =' . $id . ' ';
        $query = $this -> db -> query($sql);
        redirect("sponsored_links/listing", "refresh");
    }//end save

    public function edit_link($id) {
        $sponsor = Sponsored_Link::getSponsor($id);
        $data['sponsor'] = $sponsor[0];
        $data['title'] = "Sponsored Links";
        $data['module_view'] = "add_sponsorship_link_view";
        $data['quick_link'] = "new_link";
        $this -> base_params($data);
    }

    public function base_params($data) {
        $data['userstuff'] = $this -> session -> userdata('username');
        $data['styles'] = array("jquery-ui.css", "tab.css", "pagination.css");
        $data['scripts'] = array("jquery-ui.js");
        $data['content_view'] = "admin_view";
        if ($data['userstuff'] != "matthawi") {
            $this -> load -> view('restricted_v');
        } else {
            $this -> load -> view('admin_template', $data);
        }
    }//end base_params

}//end class
