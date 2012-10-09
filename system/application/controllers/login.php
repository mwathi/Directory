<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends Controller{
     
    function __construct(){
        parent::__construct();
    }
     
     public function index($msg = NULL){
        $data['msg'] = $msg;
        $data['title'] = "Rwanda Business Directory Login Page";
        $this->load->view('login_view', $data);
    }
     public function process(){
        $this->load->model('login_model');        
        $result = $this->login_model->validate();
        if(!$result){
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
            redirect('home_controller/home');
        }       
    }
}
?>