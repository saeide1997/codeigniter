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

		$query = $this->db->get('note');
		$notes = $query->result_array();
    	$this->load->view('notes');

    }
    // function addnote(){
    //     $this->load->view('add_notes');
        
    // }
    function getNotes(){
        $this->load->model('notes_model');
	 	$result =$this->notes_model->getNotes();

		echo json_encode($result);

    }
    function add(){
        $this->load->model('notes_model');
        $data=$_POST;
        $data['user_id']=$this->user_id;

            $this->notes_model->addnote($data);
            redirect('Notes_controller/getNotes');
    }
    function saveNote(){
        $this->load->model('notes_model');
	 	$note = $this->notes_model->setnote();
		echo 200;
    }
    function deletnote($id){
        $this->load->model('notes_model');
        $this->notes_model->deletnote($id);
    }

    



}
