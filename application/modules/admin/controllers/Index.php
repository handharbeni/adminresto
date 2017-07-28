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
    function list_menu(){

    }
    function add_menu(){
        /*cUrl*/
    }
    function update_menu(){

    }
    function delete_menu(){

    }

    function post_order(){
        /*1 daftar nang admin*/
        /*2 diterima oleh admin */
        /*3 di asign ke kurir*/
        /*4 diterima kurir*/
        /*5 diproses kurir*/
        /*6 selesai by customer / cancel by admin & customer*/
    }
}