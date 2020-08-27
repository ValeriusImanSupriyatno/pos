<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_m extends CI_Model
{
    var $table = "pelanggan";
    var $primaryKey = "id_pelanggan";

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getAll()
    {
        $this->db->where('is_active', 1);
        return $this->db->get($this->table)->result();
    }

    public function getPrimaryKey($id)
    {
        $this->db->where($this->primaryKey, $id);
        return $this->db->get($this->table)->row();
    }

    public function update($id, $data)
    {
        $this->db->where($this->primaryKey, $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where($this->primaryKey, $id);
        return $this->db->update($this->table, array("is_active" => 0));
    }

    public function restore($id)
    {
        $this->db->where($this->primaryKey, $id);
        return $this->db->update($this->table, array("is_active" => 1));
    }

    public function getHapus()
    {
        $this->db->where('is_active', 0);
        return $this->db->get($this->table)->result();
    }
}
