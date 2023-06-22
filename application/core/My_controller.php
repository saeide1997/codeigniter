<?php

class My_controller extends CI_Controller
{

    public $username;
    public $user_id;
    function __construct()
    {
        parent::__construct();


        // $islogin=$this->input->cookie('usernote');
        // if (!empty($islogin)) {
        //     echo $islogin;
        // }



        $login = $this->session->userdata('login');


        if (!empty($login)) {
            if ($login != true) {
                redirect('login_controller/index');
            } else {
                redirect('notes_controller/index');
            }
        }else{
            redirect('login_controller/index');
        }
            // $this->username = $this->session->userdata('username');
            // $this->user_id = $this->session->userdata('id');

            //     $this->load->model('login_model');
            //     $is_login = $this->login_model->is_auth();

            //     if(! $is_login) {
            //         $this->load->view('login');
            //         return;
            //     }
        


    }
}
