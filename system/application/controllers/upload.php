<?php

class Upload extends Controller {

    function __construct() {
        parent::__construct();
        $this -> load -> helper(array('form', 'url'));
    }

    function index() {
        $this -> load -> view('personal_add_image_view', array('error' => ' '));
    }

    function do_upload() {
        $config['upload_path'] = '/xampp/htdocs/Directory/system/Images';
        $config['allowed_types'] = 'png|jpeg|jpg|bmp';
        $config['max_size'] = '10000';

        $this -> load -> library('upload', $config);

        if (!$this -> upload -> do_upload()) {
            $error = array('error' => $this -> upload -> display_errors());

            $this -> load -> view('personal_add_image_view', $error);
        } else {
            $data = array('upload_data' => $this -> upload -> data());

            $this -> load -> view('upload_success', $data);
        }
    }

}
?>