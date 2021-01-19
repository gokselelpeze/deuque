<?php

class signup_model extends CI_Model
{
    public function insert_user()
    {
        $datetime = date('Y-m-d H:i:s');
        $data = array(
            'user_type' => 0,
            'user_name' => $this->input->post('username'),
            'user_password' => $this->input->post('password'),
            'name' => $this->input->post('name'),
            'surname' => $this->input->post('surname'),
            'user_mail' => $this->input->post('email'),
            'user_joinDate' => $datetime
        );

        return $this->db->insert('users', $data);
    }
    // Yazildi fakat test edilecek vakit kalmadi
 /*   public function deleteUser($userId): bool
    {
        // Delete from answers
        $this->db->where('user_id', $userId);
        $this->db->delete('answers');

        // Get questionnaire ID's from questionnaires
        $this->db->where('user_id', $userId);
        $this->db->select('questionnaire_id');
        $questionnaireIDs = $this->db->get('questionnaires');
        $ids = json_decode(json_encode($questionnaireIDs), true);

        var_dump($ids);
        // Delete relevant questions
        foreach ($ids as $qnId){
            $this->db->where('questionnaire_id', $qnId);
            $this->db->delete('questions');
        }
        // Delete questionnaires
        $this->db->where('user_id', $userId);
        $this->db->delete('questionnaires');
        // Delete user
        $this->db->where('user_id', $userId);
        $this->db->delete('users');
        return true;
    }*/
}