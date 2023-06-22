<?php
class Register_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function adduser()
    
    {
        $username = $this->input->post('username', true); //true for forbiding xss attacks
        $password = $this->input->post('password', true);
        $email = $this->input->post('email', true); //true for forbiding xss attacks
        $repassword = $this->input->post('repassword', true);
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'repassword'=>$repassword
        );
        $this->db->insert('register',$data);
        $row=$this->db->affected_rows();
        if ($row==1){
            redirect('dashboard_controller/index');
        }
    }
}
?>