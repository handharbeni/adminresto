<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends MX_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('Gmodel');
        // $this->isLoggedIn();
        // $this->output->delete_cache();
    }
    function isLoggedIn(){
        if($this->session->userdata('loggedin_admin') == false){
            header("location:".base_url('admin/login'));
        }
    }
    function index(){
        // $data['view'] = 'main_html/contents';
        $this->load->view('main_html/htmls');
    }
}