<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Subscriber  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
  
  public function subscribe(){
     
      $data['contact_number']=$this->input->post('contact_number');
      $this->Adminuser->insert_Record('tbl_subscription',$data);
      $this->session->set_flashdata('success', 'Thank You For Subscribe Succcessfully.... !');
      redirect(base_url());
      
  }
  
    public function view_subscriber()
      {
        $data['subscriber']=$this->Adminuser ->select_Record('tbl_subscription');
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_subscriber',$data);
        $this->load->view('Mydashboard/footer');         
      }
      
    public function delete_subscriber($id)
     { 
        $this->Adminuser->delete_Record('tbl_subscription',$id);
        $this->session->set_flashdata('delete','Your details has been deleted');
        redirect(base_url().'Admin/Subscriber/view_subscriber');
      }
}