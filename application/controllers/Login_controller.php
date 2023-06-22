<?php

class Login_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function index()
	{
		$this->load->view('login');
		//
	}
	function auth()
	{

		$this->load->helper('form');

		$this->load->library('Form_validation');

		$rules = array(
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required'
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			),

		);
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == false) {

			$this->load->view('login');
		} else {
			$username = $this->input->post('username', true); //true for forbiding xss attacks
			$password = $this->input->post('password', true);
			$remember = $this->input->post('remember', true);
			$this->db->select(['username', 'password']);
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->from('register');
			$this->db->limit(1);
			$is = $this->db->get()->result();
			if ($is) {
				$data_session=array(
					'username'=>$username,
					'login'=>true
				);
				$this->session->set_userdata($data_session);


				redirect('notes_controller/index');



			} else {
				$this->load->view('login');
				echo '<script type="text/javascript">';
				echo 'alert("نام کاربری یا مز ورود اشتباه است!!!")';
				echo '</script>';

			}
			// $user = $this->db->get_where('register', array('username' => $username, 'password' => $password));
			// $is = $user->num_rows(); //if num_row>0 = user exist.

			// if ($is > 0) {
			//     $id = $user->row(0)->id;
			//     $data_session = array(
			//         'username' => $_POST['username'],
			//         'login' => true,
			//         'id' => $id
			//     );
			//     $this->session->set_userdata($data_session);
			// if ($remember == 1) {
			//     $data_cookie = array(
			//         'name' => 'usernote',
			//         'value' => '{$username}_islogin_{$id}',
			//         'expire' => time() + 60 * 60 * 24 * 365

			//     );
			//     $this->input->set_cookie($data_cookie);
			// }
			// redirect('notes_controller/index');
			// } else {
			//     redirect('login_controller/index');
			// }

		}
	}

}
