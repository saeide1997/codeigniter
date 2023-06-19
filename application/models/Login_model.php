<?php
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function login(){
        $username=$this->input->post('username',true); //true for forbiding xss attacks
        $password=$this->input->post('password',true);
        // $this->db->select('username','password');
        // $this->db->where('username',$_POST['username']);
        // $this->db->where('password',$_POST['password']);
        // $this->db->from('register');
        // $this->db->limit(1);
        // $is=$this->db->count_all_results();
        $user=$this->db->get_where('register',array('username'=>$username,'password'=>$password));
        $is=$user->num_rows();
        
        if ($is>0){
            $id=$user->row(0)->id;
            $data_session=array(
                'username'=>$_POST['username'],
                'login'=>true,
                'id'=>$id
            );
            $this->session->set_userdata($data_session);
            redirect('notes_controller/index');
        }else{
            redirect('login_controller/index');
        }

    }
}




?>