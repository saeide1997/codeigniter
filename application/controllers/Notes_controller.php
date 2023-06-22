<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Notes_controller extends My_controller {
    
    public function __construct()
    {
        parent::__construct();
        
        //Do your magic here
    }
    
    function index(){
    //     $this->load->model('itemsmodel','item');
    //     $notes=$this->item->getNotes();
    //     print_r($notes);
    // }
    $this->load->view('notes');
    // $name=$this->session->userdata('username');
    // echo "$name+''+عزیز خوش آمدید :)" ;
    }
    function addnote(){
        $this->load->view('add_notes');
        $this->load->model('notes_model');
        $data=$_POST;
        $data['user_id']=$this->user_id;

            $this->notes_model->addnote($data);
    }

    // function getNotes(){
    //     $this->load->model('notes_model');
    //     $this->notes_model->getNotes();
    //     $this->load->view('notes');

    // }

}