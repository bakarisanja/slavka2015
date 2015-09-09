<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('token')) {
			echo "nisi ulogovan";
		} else {
			echo "ulogovan si";
		}
	}
}