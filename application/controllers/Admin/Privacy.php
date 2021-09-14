<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Privacy  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }


     ////// For About Section  /////

    public function privacy()
    {   
        $data['edit_data']=$this->db->get_where('tbl_privacy',['id'=>'1'])->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/privacy',$data);
        $this->load->view('Mydashboard/footer');
      } 
      
     public function update_privacy()
      {
        $id = $this->input->post('id');
        $updateArray = array();
        $updateArray['description']=$this->input->post('description');
        $this->Adminuser->update_global_Record('tbl_privacy',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Privacy/privacy');
       }
       
     public function shipping()
     {
         $this->load->view('Mydashboard/header');
         $this->load->view('Mydashboard/add_shipping.php');
         $this->load->view('Mydashboard/footer');
     }
     
     public function add_shipping()
     {
        $formArray = array();
        $formArray['heading']=$this->input->post('heading');
        $formArray['description']=$this->input->post('description');
        $this->Adminuser->insert_Record('tbl_shipping',$formArray);
        $this->session->set_flashdata('success', 'Your Details Has Been Submitted');
        redirect(base_url().'Admin/Privacy/shipping');
     }
     
     public function edit_shipping($id)
       {
        $sql="SELECT * FROM `tbl_shipping` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_shipping',$data);
        $this->load->view('Mydashboard/footer');

       }
       
     public function update_shipping()
     {
         $id = $this->input->post('id');
         $updateArray = array();
         $updateArray['heading'] = $this->input->post('heading');
         $updateArray['description'] = $this->input->post('description');
         $this->Adminuser->update_global_Record('tbl_shipping',$id,$updateArray);
         redirect(base_url().'Admin/Privacy/all_shipping');
     }
     
      public function all_shipping()
        {
        $data['shipping']=$this->db->get_where('tbl_shipping',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_shipping_policy',$data);
        $this->load->view('Mydashboard/footer');         
       }
       
       public function delete_shipping($id)
        { 
         $this->Adminuser->delete_Record('tbl_shipping',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Privacy/all_shipping');
        }
        
        public function cancellation()
        {
         $this->load->view('Mydashboard/header');
         $this->load->view('Mydashboard/add_cancellation.php');
         $this->load->view('Mydashboard/footer');
        }
        
        public function add_cancellation()
        {
        $formArray = array();
        $formArray['heading']=$this->input->post('heading');
        $formArray['description']=$this->input->post('description');
        $this->Adminuser->insert_Record('tbl_cancellation',$formArray);
        $this->session->set_flashdata('success', 'Your Details Has Been Submitted');
        redirect(base_url().'Admin/Privacy/cancellation');
       }
       
       public function edit_cancellation($id)
       {
        $sql="SELECT * FROM `tbl_cancellation` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_cancellation',$data);
        $this->load->view('Mydashboard/footer');

       }
       
     public function update_cancellation()
     {
         $id = $this->input->post('id');
         $updateArray = array();
         $updateArray['heading'] = $this->input->post('heading');
         $updateArray['description'] = $this->input->post('description');
         $this->Adminuser->update_global_Record('tbl_cancellation',$id,$updateArray);
         redirect(base_url().'Admin/Privacy/all_cancellation');
     }
       
       public function all_cancellation()
        {
        $data['desc']=$this->db->get_where('tbl_cancellation',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_cancellation',$data);
        $this->load->view('Mydashboard/footer');         
       }
       
       public function delete_cancellation($id)
        { 
         $this->Adminuser->delete_Record('tbl_cancellation',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Privacy/all_cancellation');
        }
        
        public function return()
        {
         $this->load->view('Mydashboard/header');
         $this->load->view('Mydashboard/add_return_policy.php');
         $this->load->view('Mydashboard/footer');
        }
        
        public function add_return()
        {
        $formArray = array();
        $formArray['heading']=$this->input->post('heading');
        $formArray['description']=$this->input->post('description');
        $this->Adminuser->insert_Record('tbl_return',$formArray);
        $this->session->set_flashdata('success', 'Your Details Has Been Submitted');
        redirect(base_url().'Admin/Privacy/return');
       }
       
       public function all_return()
        {
        $data['return']=$this->db->get_where('tbl_return',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_return',$data);
        $this->load->view('Mydashboard/footer');         
       }
       
       public function edit_return($id)
       {
        $sql="SELECT * FROM `tbl_return` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_return',$data);
        $this->load->view('Mydashboard/footer');

       }
       
     public function update_return()
     {
         $id = $this->input->post('id');
         $updateArray = array();
         $updateArray['heading'] = $this->input->post('heading');
         $updateArray['description'] = $this->input->post('description');
         $this->Adminuser->update_global_Record('tbl_return',$id,$updateArray);
         redirect(base_url().'Admin/Privacy/all_return');
     }
     
     public function delete_return($id)
        { 
         $this->Adminuser->delete_Record('tbl_return',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Privacy/all_return');
        }
        
     public function refund()
        {
         $this->load->view('Mydashboard/header');
         $this->load->view('Mydashboard/add_refund.php');
         $this->load->view('Mydashboard/footer');
        }
        
        public function add_refund()
        {
        $formArray = array();
        $formArray['heading']=$this->input->post('heading');
        $formArray['description']=$this->input->post('description');
        $this->Adminuser->insert_Record('tbl_refund',$formArray);
        $this->session->set_flashdata('success', 'Your Details Has Been Submitted');
        redirect(base_url().'Admin/Privacy/refund');
       }
       
        public function all_refund()
        {
        $data['refund']=$this->db->get_where('tbl_refund',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_refund',$data);
        $this->load->view('Mydashboard/footer');         
       }
       
       public function edit_refund($id)
       {
        $sql="SELECT * FROM `tbl_refund` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_refund',$data);
        $this->load->view('Mydashboard/footer');

       }
       
     public function update_refund()
     {
         $id = $this->input->post('id');
         $updateArray = array();
         $updateArray['heading'] = $this->input->post('heading');
         $updateArray['description'] = $this->input->post('description');
         $this->Adminuser->update_global_Record('tbl_refund',$id,$updateArray);
         redirect(base_url().'Admin/Privacy/all_refund');
     }
     
     public function delete_refund($id)
        { 
         $this->Adminuser->delete_Record('tbl_refund',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Privacy/all_refund');
        }
        
}