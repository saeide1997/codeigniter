<?php

class My_controller extends CI_Controller
{

	public $username;
	public $user_id;
	function __construct()
	{
		parent::__construct();

		$login = $this->session->userdata('login');

//		var_dump($login);die();
		if (!$login) {
			if ($login != true) {
				redirect('login_controller/index');
			}
			// } else {
			//     redirect('login_controller/index');
			// }


        if (!$login) {
            if ($login != true) {

                redirect('login_controller/index');
            }
        // } else {
        //     redirect('login_controller/index');
        }
    
	}
}
}
