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
}