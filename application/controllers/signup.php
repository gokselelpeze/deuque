<?php

class signup extends CI_Controller{
    public function index(){
        $email = $this->input->post("emailSign");
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('surname', 'Surname', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('passconf', 'Passconf', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');

        if ($this->form_validation->run() === FALSE)
        {
            if($email == null){
                $data['userEmail'] = "";
                $this->load->view('pages/signup', $data);
            }
            else{
                $data['userEmail'] = $email;
                $this->load->view('pages/signup', $data);
            }

        }
        else
        {
            $this->load->model('signup_model');
            $this->signup_model->insert_user();
            $this->load->view('pages/index');
        }
    }
}