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
		$this->load->view('admin_views/blog');
	}

	public function categories()
	{
		$this->load->view('admin_views/categories');
	}

	public function list_products() {
		$category_num = $this->uri->segment(3);
		die($category_num);
    $this->middle = 'about_me'; // passing middle to function. change this for different views.
    $this->layout();
  }
}