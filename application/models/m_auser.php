<?php 

class M_auser extends CI_Model{
    private $table = "user";

    public $id;
    public $email;
    public $tgldaftar;

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

    /*public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->email = $post["email"];
        $this->description = $post["description"];
        return $this->db->insert($this->table, $this);
    }*/

    /*public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->email = $post["email"];
        $this->description = $post["description"];
        return $this->db->update($this->table, $this, array('id' => $post['id']));
    }*/

    public function delete_auser($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}