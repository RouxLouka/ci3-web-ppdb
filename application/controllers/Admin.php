<?php 
 
class Admin extends CI_Controller{
    //login
	function __construct(){
		parent::__construct();
        $this->load->model("m_aform");
        $this->load->model("m_kadmin");
        $this->load->library('form_validation');
        $this->load->model("m_auser");
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
    //==============================Lari ke Dashboardnya Admin======================================================================================================
	function index(){
		$this->load->view('admin/index');
	}
    //==============================Formulir======================================================================================================
    public function k_construct_form()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
    }

    function f_index(){
        $a_form["form"] = $this->m_aform->getAll();
		$this->load->view('admin/form', $a_form);
	}
    //==============================Kelola User======================================================================================================
    public function k_construct_user()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
    }
    function u_index(){
        $auser["user"] = $this->m_auser->getAll();
        $this->load->view('admin/user', $auser);
    }

    public function delete_auser($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_auser->delete_auser($id)) {
            redirect(base_url('admin/u_index'));
        }
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

    public function save()
	{
		$this->form_validation->set_rules('adminemail','email','required');
		$this->form_validation->set_rules('adminpassword','password','required');
		if ($this->form_validation->run()==true)
        {
            $password= $this->input->post('adminpassword');
			$data['email'] = $this->input->post('adminemail');
			$data['password'] = md5($password);
            //'password'=>md5($adminpassword)

			$this->m_kadmin->save($data);
			redirect(base_url('Admin/a_index'));
		}
		else
		{
			redirect(base_url('Admin/a_index'));
		}
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

 //==============================Kelola Admin======================================================================================================
 function v_index(){
    $this->load->view('admin/view');
}
    //==============================Fungsi Logout======================================================================================================
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('dashboard'));
    }
}