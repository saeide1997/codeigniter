<?php

class My_controller extends CI_Controller
{

    public $username;
    public $user_id;
    function __construct()
    {
        parent::__construct();


        $login = $this->session->userdata('login');

        if (!$login) {
            if ($login != true) {

                redirect('login_controller/index');
            }
        // } else {
        //     redirect('login_controller/index');
        }
    // $s = $this->session->userdata();
    // var_dump($s);
    
    $this->username = $this->session->userdata('username');
    $this->user_id = $this->session->userdata('id');

    //     $this->load->model('login_model');
    //     $is_login = $this->login_model->is_auth();

    //     if(! $is_login) {
    //         $this->load->view('login');
    //         return;
    //     }

} 
    
}