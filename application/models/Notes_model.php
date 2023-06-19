<?php
/**
 * undocumented class
 */
class Itemsmodel extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        
    }
    function getNotes(){
        $this->db->get('note');
    }
}





?>
