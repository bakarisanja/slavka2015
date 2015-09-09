<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * class home controller
 */
class About_me extends MY_Controller {

	public function index() {
    $this->middle = 'about_me'; // passing middle to function. change this for different views.
    $this->layout();
  }
}