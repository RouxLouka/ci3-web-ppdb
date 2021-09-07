<?php 
 
class Admin extends CI_Controller{
    //login
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
    //Lari ke Dashboardnya Admin
	function index(){
		$this->load->view('admin/index');
	}
    //Formulir
    function f_index(){
		$this->load->view('admin/form');
	}
    //Kelola User
    function u_index(){
        $this->load->view('admin/user');
    }
    //Kelola Admin
    function a_index(){
        $this->load->view('admin/admin');
    }
    //Fungsi Logout
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('dashboard'));
    }
}