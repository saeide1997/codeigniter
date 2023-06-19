<?php

class My_controller extends CI_Controller {
    public $username;
    public $user_id;
    public function __construct() {
        parent::__construct();

        $this->load->model('login_model');
        $is_login = $this->login_model->is_auth();
        
        if(! $is_login) {
            $this->load->view('login');
            return;
        }
    }

    
}