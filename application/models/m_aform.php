<?php 

class M_aform extends CI_Model{
    private $table = "userdata";

    public $id;
    public $namalengkap;
    public $nisn;

    public function rules()
    {
        return [
            ['field' => 'namalengkap',
            'label' => 'NamaLengkap',
            'rules' => 'required'],


            ['field' => 'tglkonfirmasi',
            'label' => 'TanggalKonfirmasi',
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
}