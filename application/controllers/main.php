<?php

    class main extends CI_Controller{

        public function index(){

            $this->load->view("pages/index.php");

        }

        public function data(){
            $this->load->model("answers_model");
            $data['answers'] = $this->answers_model->getAllData();

            $this->load->view("pages/answers.php",$data);
        }

        public function login(){
            $this->load->view("login/login-page.php");
        }

        public function signup(){
            $this->load->view("pages/signup.php");
        }
        public function profile(){
            $this->load->view("pages/profile.php");
        }
        public function aboutUs(){
            $this->load->view("pages/about-us.php");
        }
        public function show(){
            $this->load->view("pages/show.php");
        }
        public function contact(){
            $this->load->view("pages/contact.php");
        }
        public function questionnaires(){
            $this->load->view("pages/questionnaires.php");
        }



    }

?>