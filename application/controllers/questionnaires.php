<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class questionnaires extends CI_Controller{

    public function questionnaireTest(){
        $this->load->model("questionnaires_model");
        $data['usersQns'] = $this->questionnaires_model->getUsersQns($this->session->userdata('user_id'));
        $data['user'] = $this->questionnaires_model->getUserById($this->session->userdata('user_id'));
        $this->load->view("pages/test.php",$data);


    }

}