<?php
error_reporting(E_ALL ^ E_NOTICE);
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_Controller extends Controller {
    function __construct() {
        parent::__construct();
    }

    public function index() {

        $this -> home();
    }

    public function home() {

        $data['userstuff'] = $this -> session -> userdata('names');
        $data['memberstuff'] = $this -> session -> userdata('membership');
        $data['title'] = "Rwanda Business Directory";
        $data['categoryinformation'] = Categories::getName();
        $data['populars'] = Categories::getPopularCategories();
        $data['content_view'] = "main_v";
        $data['link'] = "home";
        $this -> load -> view("template", $data);
    }

    private function check_isvalidated() {
        if (!$this -> session -> userdata('validated')) {
            redirect('login');
        }
    }

    public function do_logout() {
        $this -> session -> sess_destroy();
        redirect('login');
    }

    function search($search_terms = '', $start = 0) {
        // If the form has been submitted, rewrite the URL so that the search
        // terms can be passed as a parameter to the action. Note that there
        // are some issues with certain characters here.
        if ($this -> input -> post('q')) {
            redirect('/home_controller/search/' . $this -> input -> post('q'));
        } elseif ($this -> input -> post('r')) {
            redirect('/home_controller/search/' . $this -> input -> post('r'));
        }

        if ($search_terms) {

            // Determine the number of results to display per page
            $results_per_page = $this -> config -> item('results_per_page');

            // Mark the start of search
            $this -> benchmark -> mark('search_start');

            // Load the model, perform the search and establish the total
            // number of results
            $this -> load -> model('search');
            $results = $this -> search -> find($search_terms, $start, $results_per_page);
            $total_results = $this -> search -> count_search_results($search_terms);

            // Mark the end of search
            $this -> benchmark -> mark('search_end');

            // Call a method to setup pagination
            $this -> _setup_pagination('/home_controller/search/' . $search_terms . '/', $total_results, $results_per_page);

            // Work out which results are being displayed
            $first_result = $start + 1;
            $last_result = min($start + $results_per_page, $total_results);
        } elseif ($search_terms2) {
            // Determine the number of results to display per page
            $results_per_page = $this -> config -> item('results_per_page');

            // Mark the start of search
            $this -> benchmark -> mark('search_start');

            // Load the model, perform the search and establish the total
            // number of results
            $this -> load -> model('search');
            $results = $this -> search -> find($search_terms2, $start, $results_per_page);
            $total_results = $this -> search -> count_search_results($search_terms2);

            // Mark the end of search
            $this -> benchmark -> mark('search_end');

            // Call a method to setup pagination
            $this -> _setup_pagination('/home_controller/search/' . $search_terms2 . '/', $total_results, $results_per_page);

            // Work out which results are being displayed
            $first_result = $start + 1;
            $last_result = min($start + $results_per_page, $total_results);
        }

        $data['content_view'] = "searched_v";
        $data['search_terms'] = $search_terms;
        $data['title'] = "Rwanda Business Directory: Search Results";
        $data['search_terms2'] = $search_terms2;
        $data['first_result'] = @$first_result;
        $data['last_result'] = @$last_result;
        $data['total_results'] = @$total_results;
        $data['results'] = @$results;
        $this -> load -> view('template', $data);

        // Enable the profiler
        //$this->output->enable_profiler(TRUE);
    }

    function _setup_pagination($url, $total_results, $results_per_page) {
        // Ensure the pagination library is loaded
        $this -> load -> library('pagination');

        // This is messy. I'm not sure why the pagination class can't work
        // this out itself...
        $uri_segment = count(explode('/', $url));

        // Initialise the pagination class, passing in some minimum parameters
        $this -> pagination -> initialize(array('base_url' => site_url($url), 'uri_segment' => 4, 'total_rows' => $total_results, 'per_page' => $results_per_page));
    }

    function moreInfoSearch($search_terms = '') {
        // If the form has been submitted, rewrite the URL so that the search
        // terms can be passed as a parameter to the action. Note that there
        // are some issues with certain characters here.
        if ($this -> input -> post('q')) {
            redirect('/home_controller/moreInfoSearch/' . $this -> input -> post('q'));
        } elseif ($this -> input -> post('r')) {
            redirect('/home_controller/moreInfoSearch/' . $this -> input -> post('r'));
        }

        if ($search_terms) {

            $this -> load -> model('search');
            $results = $this -> search -> moreInfoFind($search_terms);        
        } elseif ($search_terms2) {
            $this -> load -> model('search');
            $results = $this -> search -> moreInfoFind($search_terms2);
        }

        $data['content_view'] = "searched_more_v";
        $data['search_terms'] = $search_terms;
        $data['search_terms2'] = $search_terms2;
        $data['results'] = @$results;
        $data['title'] = "Rwanda Business Directory: Search Results";
        $this -> load -> view('template_noad', $data);

        // Enable the profiler
        //$this->output->enable_profiler(TRUE);
    }

}
