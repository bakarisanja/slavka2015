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
		$this->load->model('Category_Model');
    	$data['categorys'] = $this->Category_Model->getAll();
		$this->load->view('admin_views/header',$data);
		if(!$this->session->userdata('token')){
			redirect('login');
		}
		
	}

	public function index()
	{
		echo 'pera';
		var_dump($this->session->userdata());
		$this->load->view('admin_views/blog');
		$this->load->view('admin_views/footer');
	}

	public function categories()
	{
		$this->load->view('admin_views/categories');
		$this->load->view('admin_views/footer');
	}

	public function list_products()
	{
		$data['category'] = $this->uri->segment(3);
		$this->load->view('admin_views/products', $data);
		$this->load->view('admin_views/footer');
    }

    public function insertProduct()
    {
    	if (empty($_POST['product_name']) || empty($_POST['product_about']) || empty($_FILES['product_image']) || $_FILES['product_image']['error'] || $_FILES['product_image']['type'] != 'image/jpeg'){
    		die("Empty fields are not allowed, or file is not ok!");

    	} else {
    		echo "<div style=margin-top:100px;>";
    		
    		$this->load->model('Product_Model');
    		$this->Product_Model->insertProduct('sdf','sdf','sdf');
    	}
    	
    }

    public function addCat()
	{
		$this->form_validation->set_rules('category_name', 'category name', 'required');
		$this->form_validation->set_rules('category_about', 'category about', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin_views/categories');
		} else {
			$name = $_POST['category_name'];
			$about = $_POST['category_about'];
			$name = trim($name);
			$about = trim($about);
			$about = str_replace(" ", "-", $about);
			
			$this->load->model('Category_Model');
			$this->Category_Model->addCat($name, $about);

			redirect('admin/categories', 'refresh');
		}
       
       var_dump($_POST);

	}

	public function update_delete()
	{
		if (isset($_POST['update'])) {
			$name = $_POST['category_name'];
			$about = $_POST['category_about'];
			$name = trim($name);
			$about = trim($about);
			$about = str_replace(" ", "-", $about);
			
			$this->load->model('Category_Model');
			$this->Category_Model->updateCat($_POST['category_id'], $name, $about);
			redirect('admin/categories');
		}

		if (isset($_POST['delete'])) {
			$this->load->model('Category_Model');
			$this->Category_Model->deleteCat($_POST['category_id']);
			redirect('admin/categories');
		}
	}
}