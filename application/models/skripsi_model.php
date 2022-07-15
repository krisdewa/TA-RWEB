<?php
defined('BASEPATH') or exit('No direct script access allowed');

class skripsi_model extends CI_Model
{
    private $table = "skripsi";

    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
}
