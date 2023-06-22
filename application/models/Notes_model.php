<?php
/**
 * undocumented class
 */
class Notes_model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }
    function addnote($data)
    {
        // $title = $this->input->post('title', true); //true for forbiding xss attacks
        // $desc = $this->input->post('desc', true);
        // $date = $this->input->post('date', true); //true for forbiding xss attacks
        // $data = array( 
        //     'title' => $title,
        //     'description' => $desc,
        //     'date' => $date,
        // );
        // $this->db->insert('note', $data);
        // $row = $this->db->affected_rows();
        // if ($row == 1) {
        //     redirect('notes_controller/index');
        // }
            $this->db->insert('note',$data);
    }
    function getNotes()
    {
        
        // $this->db->get('note');


        $query = $this->db->get('note');
        $query->result();

    
    }
}





?>