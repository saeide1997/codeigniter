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
        return $query->result();
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

    function setnote()
    {
        $title = $this->input->post('title', true); //true for forbiding xss attacks
        $desc = $this->input->post('description', true);
        $date = $this->input->post('date', true); //true for forbiding xss attacks
		$edit_id = $this->input->post('editID', true);

		$data = array(
			'title' => $title,
			'description' => $desc,
			'date' => $date,
		);

		if ($edit_id == '') {
			$res = $this->db->insert('note',$data);
		}else{
			$this->db->where('id', $edit_id);
			$res = $this->db->update('note', $data);
		}
		return $res;
        
    }

    function deletnote($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('note');
        redirect('Notes_controller/getNotes');
    }


}



?>
