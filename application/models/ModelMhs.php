<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMhs extends CI_Model
{
    public function showMahasiswa($table, $where)
    {
        return $this->db->get_where($table, $where)->result();
    }

    public function showMhsById($table, $where)
    {
        return $this->db->get_where($table, $where)->result();
    }

    public function getMhs($table)
    {
        return $this->db->get($table)->result();
    }
}
