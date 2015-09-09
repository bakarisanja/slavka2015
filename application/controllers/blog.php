<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * class home controller
 */
class Blog extends MY_Controller {

	public function index() {
    $this->middle = 'blog'; // passing middle to function. change this for different views.
    $this->layout();
  }
}