<?php

class answers_model extends CI_Model{

    public function getAllData()
    {
        $query = $this->db->query("SELECT * FROM answers");
        return $query->result();
    }

}