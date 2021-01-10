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
}
