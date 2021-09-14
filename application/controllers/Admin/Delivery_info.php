<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Delivery_info  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }


     ////// For About Section  /////

    public function delivery()
    {   
        $data['edit_data']=$this->db->get_where('tbl_delivery_info',['id'=>'1'])->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/delivery_info',$data);
        $this->load->view('Mydashboard/footer');
      }
     
    public function update_delivery()
      {
        $id = $this->input->post('id');
        $updateArray = array();
        $updateArray['description']=$this->input->post('description');
        $this->Adminuser->update_global_Record('tbl_delivery_info',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Delivery_info/delivery');
       }
}