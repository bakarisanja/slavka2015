<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * class admin controller
 */
class Admin extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('username')) {
			$this->load->model('Model_admin');

			if($token = $this->Model_admin->checkAdmin('slavka1','5449abce9417344bb63eb38fa6d7419f')) {
				echo $token;
			}

		} else {
			echo "moze";
		}

      // Do your code here
	}

}