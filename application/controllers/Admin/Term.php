<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Term  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }


     ////// For About Section  /////

    public function term_condition()
    {   
        $data['edit_data']=$this->db->get_where('tbl_term',['id'=>'1'])->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/term&condition',$data);
        $this->load->view('Mydashboard/footer');
      } 
      
     public function update_term_condition()
      {
        $id = $this->input->post('id');
        $updateArray = array();
        $updateArray['description']=$this->input->post('description');
        $this->Adminuser->update_global_Record('tbl_term',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Term/term_condition');
       }
       
       
       
       public function privacy()
     {   
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/privacy');
        $this->load->view('Mydashboard/footer');
      } 
      
     public function update_privacy()
      {
        $id = $this->input->post('id');
        $updateArray = array();
        $updateArray['description']=$this->input->post('description');
        $this->Adminuser->update_global_Record('tbl_privacy',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Term/privacy');
       }
}