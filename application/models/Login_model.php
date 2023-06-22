<?php
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function login(){
        
        $username=$this->input->post('username',true); //true for forbiding xss attacks
        $password=$this->input->post('password',true);
        $remember=$this->input->post('remember',true);
        $this->db->select('username','password');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $this->db->from('register');
        $this->db->limit(1);
        $is=$this->db->count_all_results();
         echo $is;

        // $user=$this->db->get_where('register',array('username'=>$username,'password'=>$password));
        // $is=$user->num_rows();//if num_row>0 = user exist.
        
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
        // if ($is>0){
        //     $id=$user->row(0)->id;
        //     $data_session=array(
        //         'username'=>$_POST['username'],
        //         'login'=>true,
        //         'id'=>$id
        //     );
        //     $this->session->set_userdata($data_session);
        //     if($remember==1){
        //         $data_cookie=array(
        //             'name'=>'usernote',
        //             'value'=>'{$username}_islogin_{$id}',
        //             'expire'=>time()+60*60*24*365

        //         );
        //         $this->input->set_cookie($data_cookie);
        //     }
        //     redirect('notes_controller/index');
        // }else{
        //     redirect('login_controller/index');
        // }

	public function is_auth()
	{
		return $this->session->userdata('username');
    }
}




?>
