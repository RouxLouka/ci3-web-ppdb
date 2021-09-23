<?php 
 
class User extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
		}
	}
//==========================================================DASHBORD=========================================================================== 
	function index(){
		$this->load->view('user/index');
	}
//===================================================BAGIAN DAFTAR===============================================================================
	function d_index(){
		$this->load->view('user/daftar');
	}
//==========================================================LOGOUT===============================================================================
	function logout(){
        $this->session->sess_destroy();
        redirect(base_url('dashboard'));
    }
}