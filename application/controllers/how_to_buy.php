<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * class home controller
 */
class How_to_buy extends MY_Controller {

	public function index() {
    $this->middle = 'how_to_buy'; // passing middle to function. change this for different views.
    $this->layout();
  }
}