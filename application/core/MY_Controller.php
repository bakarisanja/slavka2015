<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller 
 { 
   //set the class variable.
   var $template  = array();
   var $data      = array();
   //Load layout    
   public function layout() {
    //loading categories in every controller
    $this->load->model('Category_Model');
    $this->data['categorys'] = $this->Category_Model->getAll();
     // making temlate and send data to view.
     $this->template['header']   = $this->load->view('layout/header', $this->data, true);
     $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
     $this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
     $this->load->view('layout/index', $this->template);
   }
}