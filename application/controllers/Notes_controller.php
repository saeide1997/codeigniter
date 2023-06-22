<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Notes_controller extends My_controller {
    
    // public function __construct()
    // {
    //     parent::__construct();
        
    //     //Do your magic here
    // }
    
    function index(){
    //     $this->load->model('itemsmodel','item');
    //     $notes=$this->item->getNotes();
    //     print_r($notes);
    // }
    $this->load->view('notes');
    $name=$this->session->userdata('username');
    echo "$name+''+عزیز خوش آمدید :)" ;
    }

}