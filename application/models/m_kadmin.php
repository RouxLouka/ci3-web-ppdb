<?php 

class M_kadmin extends CI_Model{
    private $table = "admin";

    public $id;
    public $email;
    public $password;

    public function rules()
    {
        return [
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            
            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->email = $post["adminemail"];
        $this->password = $post["adminpassword"];
        return $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->email = $post["email"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}