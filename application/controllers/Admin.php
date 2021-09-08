<?php 
 
class Admin extends CI_Controller{
    //login
	function __construct(){
		parent::__construct();
        $this->load->model("m_kadmin");
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
    //==============================Lari ke Dashboardnya Admin======================================================================================================
	function index(){
		$this->load->view('admin/index');
	}
    //==============================Formulir======================================================================================================
    function f_index(){
		$this->load->view('admin/form');
	}
    //==============================Kelola User======================================================================================================
    function u_index(){
        $this->load->view('admin/user');
    }

    //==============================Kelola Admin======================================================================================================
    public function k_construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
    }

    function a_index(){
        $data["admin"] = $this->m_kadmin->getAll();
        $this->load->view('admin/admin', $data);
    }

    public function add()
    {
        $admin = $this->m_kadmin;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());

        if ($validation->run()) {
            $admin->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/a_index");
    }

    /*public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/admin');
       
        $admin = $this->m_kadmin;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());

        if ($validation->run()) {
            $admin->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["admin"] = $admin->getById($id);
        if (!$data["admin"]) show_404();
        
        $this->load->view("admin/admin", $data);
    }*/

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_kadmin->delete($id)) {
            redirect(base_url('admin/a_index'));
        }
    }

    //==============================Fungsi Logout======================================================================================================
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('dashboard'));
    }
}