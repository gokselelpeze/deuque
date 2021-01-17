<?php
class questionnaires_model extends CI_Model
{
    public function getUsersQns($userId)
    {
        $this->db->where('user_id', $userId);
        $query = $this->db->get('questionnaires');
        return $query->result();
    }

    public function getQnsCount($userId)
    {
        $query = $this->db->query("SELECT COUNT(*) FROM questionnaires WHERE user_id = ".$userId);
        return $query->result();
    }

    public function getUserById($userId)
    {
        $this->db->where('user_id', $userId);
        $query = $this->db->get('users');
        return $query->result();
    }

    public function getQn($qnId){
        $this->db->where('questionnaire_id', $qnId);
        $query = $this->db->get('questionnaires');
        return $query->result();
    }

    public function getQuestions($qnId){
        $this->db->where('questionnaire_id', $qnId);
        $query = $this->db->get('questions');
        return $query->result();
    }

}
