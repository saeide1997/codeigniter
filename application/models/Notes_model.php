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
    function getNotes()
    {

        // $this->db->get('note');
        $query = $this->db->get('note');
        return json_encode($query->result());


    }

    function addnote()
    {

        $title = $this->input->post('title', true); //true for forbiding xss attacks
        $desc = $this->input->post('description', true);
        $date = $this->input->post('date', true); //true for forbiding xss attacks
        $data = array(
            'title' => $title,
            'description' => $desc,
            'date' => $date,
        );
        // if ($id == 0) {
        //     return $this->db->insert('note', $data);
        // } else {
        //     $this->db->where('id', $id);
        //     return $this->db->update('note', $data);

        // $this->db->insert('note', $data);
        // $row = $this->db->affected_rows();
        // if ($row == 1) {
        //     redirect('notes_controller/index');
        // }
        return json_encode($this->db->insert('note', $data));
    }
    function editnote($id)
    {
        $this->load->helper('form');
        $this->load->helper('date');
        $query = $this->db->where('id',$id)->get('note');
        $data=$query->row();


        return json_encode($data);

    }
    function setnote($id)
    {
        $title = $this->input->post('title', true); //true for forbiding xss attacks
        $desc = $this->input->post('description', true);
        $date = $this->input->post('date', true); //true for forbiding xss attacks

        $data = array(
            'title' => $title,
            'description' => $desc,
            'date' => $date,
            'id' => $id
        );
        $this->db->where('id', $id);
        return json_encode($this->db->update('note', $data));
        
    }


    function deletnote($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('note');
        redirect('Notes_controller/getNotes');
    }


}



?>