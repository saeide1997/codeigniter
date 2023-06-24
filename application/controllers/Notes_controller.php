<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Notes_controller extends My_controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Notes_model');
        
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
        
    }
    function add(){
        $this->load->model('notes_model');
        $data=$_POST;
        $data['user_id']=$this->user_id;

            $this->notes_model->addnote($data);
            redirect('Notes_controller/getNotes');
    }
    function editnote($id){
        
        $this->load->model('notes_model');
         $note = $this->notes_model->editnote($id);
         $data = [
            'note' => $note
         ];

        
        // $data=$this->notes_model->editnote($id);
        // $this->load->view('notes',['data'=>$data]);

        $this->load->view('edit_notes',$data);
       

    }
    function setnote($id){
        $this->load->model('notes_model');
         $this->notes_model->setnote($id);
         
        
    }
    function deletnote($id){
        $this->load->model('notes_model');
        $this->notes_model->deletnote($id);
    }
    

    function getNotes(){
        $this->load->model('notes_model');
        $result['data']=$this->notes_model->getNotes();
        $this->load->view('notes',$result);

    }

}