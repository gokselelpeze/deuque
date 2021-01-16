<?php
class questionnaires_model extends CI_Model
{
    public function testModel($userId)
    {
        $this->db->where('user_id', $userId);
        $query = $this->db->get('questionnaires');

        foreach ($query->result_array() as $row)
        {
            echo $row['questionnaire_id'] . "\r\n";
            echo $row['user_id'] . "\r\n";
            echo $row['questionnaire_name'] . "\r\n";
            echo "<br>";
        }

    }
}
