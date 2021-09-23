<?php 

class M_login extends CI_Model{
	
		public function __construct()
		{
			parent::__construct();
		}
	 
		function register($email,$password)
		{
			$data_user = array(
				'email'=>$email,
				'password'=>md5($password),
			);
			$this->db->insert('user',$data_user);
		}
	
		/*function login_user($email,$password)
		{
			$query = $this->db->get_where('user',array('email'=>$email));
			if($query->num_rows() > 0)
			{
				$data_user = $query->row();
				if (password_verify($password, $data_user->password)) {
					$this->session->set_userdata('email',$email);
					//$this->session->set_userdata('is_login',TRUE);
					return TRUE;
				} else {
					return FALSE;
				}
			}
			else
			{
				return FALSE;
			}
		}*/	

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}