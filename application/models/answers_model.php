<?php

class answers_model extends CI_Model{

    public function getAllData()
    {
        $query = $this->db->query("SELECT * FROM answers");
        return $query->result();
    }

    public function getQuestionnaireById()
    {
        $query = $this->db->query("SELECT * FROM questionnaires");
        return $query->result();
    }

}