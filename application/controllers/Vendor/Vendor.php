<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Vendor  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
   
    public function index(){
     
        $this->load->view('Vendor/header');
        $this->load->view('Vendor/index');
        $this->load->view('Vendor/footer');

    }
}
