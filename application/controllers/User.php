<?php 
 
class User extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('user/index');
	}

	function d_index(){
		$this->load->view('user/daftar');
	}
}