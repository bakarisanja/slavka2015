<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * login class
 */
class Login extends CI_Controller
{

	/**
	 * check if user is valid
	 * @return [type] [description]
	 */
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin_views/login');
		}
		else
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			$username = trim($username);
			$password = trim($password);
			$password = md5($password);

			$this->load->model("Model_admin");
			if(!$token = $this->Model_admin->checkAdmin($username,$password)){
				$data['error'] = 'ne poklapa se';
				$this->load->view('admin_views/login',$data);
			}else{
				$this->session->set_userdata('token', $token);
				redirect('admin');
			}
		}
	}

}