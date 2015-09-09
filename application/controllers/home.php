<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * class home controller
 */
class Home extends MY_Controller {

	public function index() {
    $this->middle = 'home'; // passing middle to function. change this for different views.
    $this->layout();
  }
}
