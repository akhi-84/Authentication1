<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $table = 'user';
    private $id = 'user.id';

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
    public function update($data,$id)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }
    
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}

