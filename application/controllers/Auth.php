<?php

class Login extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $is_login = $this->login_model->is_auth();
        
        if(! $is_login) {
            $this->load->view('login');
            return;
        }
        parent::__construct();

        //Do your magic here
    }
    
}
