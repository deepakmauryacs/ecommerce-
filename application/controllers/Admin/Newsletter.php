<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Newsletter  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

      public function newsletter()
      {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/newsletter');
        $this->load->view('Mydashboard/footer');         
      }
      
     public function add_newsletter()
     {
       $formarray=array();
       $formarray['user_email']=$this->input->post('user_email');
       $formarray['subscriber_email']=$this->input->post('subscriber_email');
       $formarray['subject']=$this->input->post('subject');
       $formarray['news_content']=$this->input->post('news_content');
       $this->Adminuser->insert_Record('tbl_newsletter',$formarray);
       $this->session->set_flashdata('success', 'Newsletter Add Succcessfully.... !');
       redirect(base_url().'Admin/Newsletter/newsletter');
       
     }
}