<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class questionnaires extends CI_Controller{

    public function questionnaireTest(){
        $this->load->model("questionnaires_model");
        $data['usersQns'] = $this->questionnaires_model->getUsersQns($this->session->userdata('user_id'));
        $data['user'] = $this->questionnaires_model->getUserById($this->session->userdata('user_id'));
        $this->load->view("pages/test.php",$data);


    }

    public function fill($param=''){
        $this->load->model("questionnaires_model");
        $data['qn'] = $this->questionnaires_model->getQn($param);
        $data['questions'] = $this->questionnaires_model->getQuestions($param);
        $qnInfo = json_decode(json_encode($data['qn']), true);
        $userID = $qnInfo[0]['user_id'];
        $data['user'] = $this->questionnaires_model->getUserById($userID);
        $this->load->view("pages/fill.php",$data);
    }
    public function responses($param=''){
        // get responses
        $this->load->model("questionnaires_model");
        $data['qn'] = $this->questionnaires_model->getQn($param);
        $data['questions'] = $this->questionnaires_model->getQuestions($param);
        $qnInfo = json_decode(json_encode($data['qn']), true);
        $userID = $qnInfo[0]['user_id'];
        $data['user'] = $this->questionnaires_model->getUserById($userID);
        $this->load->view("pages/responses.php",$data);
    }

}