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
		$this->load->model('Model_admin');

		if($token = $this->Model_admin->checkAdmin('slavka1','5449abce9417344bb63eb38fa6d7419f')){
			$set_token = array('token' => $this->token);
			$this->session->set_userdata($set_token);
			redirect('admin');
		} else {
			$this->load->view('admin_views/login');
		}
	}

}