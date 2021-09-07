<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('login');
	}
 
	function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$where = array(
			'email' => $email,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("$level",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $email,
				'status' => "login",
				'level' => $level
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("$level"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}