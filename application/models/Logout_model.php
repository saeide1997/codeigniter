<?php
/**
 * undocumented class
 */
class Logout_model extends CI_Model
{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function logout(){
        unset($_SESSION['login']);
        redirect('login_controller/index');
    }
}

?>