<?php

class main extends CI_Controller
{

    public function index()
    {
        $this->load->view("pages/index.php");
    }

    public function login()
    {
        $this->load->view("login/login-page.php");
    }

    public function signup()
    {
        $this->load->view("pages/signup.php");
    }

    public function profile($param = '')
    {
        $this->load->model("questionnaires_model");
        $data['usersQns'] = $this->questionnaires_model->getUsersQns($param);
        $data['user'] = $this->questionnaires_model->getUserById($param);
        $data['count'] = $this->questionnaires_model->getQnsCount($param);
        if ($data['user'] != null)
            $this->load->view("pages/profile.php", $data);
        else
            $this->load->view("pages/oops.php");
    }

    public function search()
    {
        $searched = $this->input->post("searched");
        $this->load->model("questionnaires_model");
        $data['searchedQns'] = $this->questionnaires_model->getSearchedQns($searched);
        $data['searchedUsers'] = $this->questionnaires_model->getSearchedUsers($searched);

        $this->load->view("pages/search.php", $data);
    }

    public function aboutUs()
    {
        $this->load->view("pages/about-us.php");
    }

    public function show()
    {
        $this->load->view("pages/show.php");
    }

    public function contact()
    {
        $this->load->view("pages/contact.php");
    }

    public function questionnaires()
    {
        $this->load->model("questionnaires_model");
        $data['recentQns'] = $this->questionnaires_model->getRecentQns();
        $data['popularQns'] = $this->questionnaires_model->getPopularQns();
        $this->load->view("pages/questionnaires.php", $data);
    }

    public function oops()
    {
        $this->load->view("pages/oops.php");
    }
    public function admin()
    {
        if($this->session->userdata('user_type') == 1){
            $searched = $this->input->post("searched");
            $this->load->model("questionnaires_model");
            $data['searchedQns'] = $this->questionnaires_model->getSearchedQns($searched);
            $data['searchedUsers'] = $this->questionnaires_model->getSearchedUsers($searched);
            $this->load->view("pages/admin.php",$data);
        }
        else{
            $this->load->view("pages/oops.php");
        }
    }
    public function history()
    {
        if($this->session->userdata('user_type') == 1){
            $this->load->model("questionnaires_model");
            $data['deletedQns'] = $this->questionnaires_model->getDeletedQns();
            $this->load->view("pages/history.php",$data);
        }
        else{
            $this->load->view("pages/oops.php");
        }
    }



}

?>