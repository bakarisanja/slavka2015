<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * class home controller
 */
class Category extends MY_Controller {

	public function index() {
   
  }

   public function list_products() {
		$category_num = $this->uri->segment(2);
		die($category_num);
  }

}