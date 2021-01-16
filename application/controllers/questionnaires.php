<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class questionnaires extends CI_Controller{

    public function questionnaireTest(){
        $this->load->model("questionnaires_model");
        $this->questionnaires_model->testModel($this->session->userdata('user_id'));
        $this->load->view("pages/test.php");

    }

}