<?php

    class user extends CI_Controller{

        public function index(){

            $this->load->view("index.php");

        }

        public function data(){
            $this->load->model("answers_model");
            $data['answers'] = $this->answers_model->getAllData();

            $this->load->view("answers.php",$data);
        }

        public function login(){
            $this->load->model("answers_model");

            $this->load->view("login.php");
        }


    }

?>