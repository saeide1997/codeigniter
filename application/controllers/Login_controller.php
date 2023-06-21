<?php

class Login_controller extends CI_Controller
{
	function index()
	{
		$this->load->view('login');
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
		}


	}

}
