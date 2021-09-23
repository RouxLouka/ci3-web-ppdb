<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('form_validation');
	}
 
	public function index()
	{
		$this->load->view('register');
	}
 
	public function proses()
	{
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run()==true)
	   	{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->m_login->register($email,$password);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}
}
