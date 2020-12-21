<?php

    class user extends CI_Controller{

        public function index(){

            echo "all data";

        }

        public function data(){
            $this->load->model("answers_model");
            $data['answers'] = $this->answers_model->getAllData();

            $this->load->view("answers.php",$data);
        }

        

    }

?>