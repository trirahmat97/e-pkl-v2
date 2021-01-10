<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPkl extends CI_Model
{
    public function showPerusahaanById($table, $where)
    {
        return $this->db->get($table, $where)->result();
    }

    public function showPklById($table, $where = null)
    {
        return $this->db->get($table)->result();
    }

    public function getData($table)
    {
        return $this->db->get($table)->result();
    }

    public function get($table)
    {
        return $this->db->get($table)->result();
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function getWhere($table, $where)
    {
        return $this->db->get_where($table, $where)->row();
    }

    public function getWhere2($table, $where)
    {
        return $this->db->get_where($table, $where)->result();
    }

    public function update($table, $data, $id)
    {
        return $this->db->update($table, $data, $id);
    }

    public function delete($table, $id)
    {
        $this->db->delete($table, $id);
    }
}
