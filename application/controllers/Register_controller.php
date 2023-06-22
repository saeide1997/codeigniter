<?php

class Register_controller extends CI_Controller
{
    function index()
    {
        $this->load->view('register');
    }
    function auth(){
        $this->load->helper('form');

        $this->load->library('Form_validation');

        $rules = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]'
            ),
            array(
                'field' => 'repassword',
                'label' => 'Reapet Password',
                'rules' => 'required|matches[password]'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ),

        );
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == false) {

            $this->load->view('register');
        }else{
            $this->load->model('register_model');
            $this->register_model->adduser();
        }
    }

}    