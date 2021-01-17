<?php

class signup_model extends CI_Model
{
    public function insert_user()
    {
        $data = array(
            'user_type' => 0,
            'user_name' => $this->input->post('username'),
            'user_password' => $this->input->post('password'),
            'name' => $this->input->post('name'),
            'surname' => $this->input->post('surname'),
            'user_mail' => $this->input->post('email')
        );

        return $this->db->insert('users', $data);
    }
}