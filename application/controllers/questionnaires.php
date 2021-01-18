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
        if($data['qn'] == null){
            redirect('oops');
        }
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
        if($data['qn'] == null){
            redirect('oops');
        }
        $data['questions'] = $this->questionnaires_model->getQuestions($param);
        $qnInfo = json_decode(json_encode($data['qn']), true);
        $userID = $qnInfo[0]['user_id'];
        $data['user'] = $this->questionnaires_model->getUserById($userID);
        $this->load->view("pages/responses.php",$data);
    }

    public function questionnaire(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('qnName', 'QnName', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view("pages/questionnaire.php");
        }
        else
        {
            $qnId = $this->generateRandomString();
            $data = array(
                'qnName' => $this->input->post('qnName'),
                'description' => $this->input->post('description'),
                'qnId' => $qnId
            );
            $this->load->model('questionnaires_model');
            $this->questionnaires_model->insertQn($qnId);
            $this->load->view('pages/create_question',$data);
        }
    }

    public function createQuestion(){
        $this->load->view('pages/create_question');
    }

    public function importQuestion(){
        $data['qnId'] = $this->input->post('qnId');
        $data['qnName'] = $this->input->post('qnName');
        $action = $this->input->post('action');
        if ($action == 'add') {
            $this->load->model('questionnaires_model');
            $this->questionnaires_model->insertQuestion();
            $this->load->view('pages/create_question',$data);
        }
        else if($action == 'save'){
            $this->load->model('questionnaires_model');
            $this->questionnaires_model->insertQuestion();
            $this->load->view('sections/created_succesfully',$data);
        }
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


}