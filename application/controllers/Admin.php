<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * class admin controller
 */
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->view('admin_views/header');
		if(!$this->session->userdata('token')){
			redirect('login');
		}
		
	}

	public function index()
	{
		echo 'pera';
		var_dump($this->session->userdata());
	}

	public function insert()
	{
		echo 'mica';
	}
}