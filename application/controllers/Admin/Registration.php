<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Registration  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
   
 public function add_vendor() 
    {

        $formArray= array();
         if($_FILES['pan_card']['name'])
         {
            $config = array(
                'upload_path'=>'uploads/documents',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('pan_card');
            $img=$this->upload->data();
            $formArray['pan_card'] = $img['file_name'];
         }
          if($_FILES['adhar_card']['name'])
         {
            $config = array(
                'upload_path'=>'uploads/documents',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('adhar_card');
            $img=$this->upload->data();
            $formArray['adhar_card'] = $img['file_name'];
         }

        $nineRandomDigit = mt_rand(100000000,999999999);
        $formArray['vendor_id']=$nineRandomDigit;
        $formArray['first_name']=$this->input->post('first_name');
        $formArray['last_name']=$this->input->post('last_name');
        $formArray['email']=$this->input->post('email');
        $formArray['password']=$this->input->post('password');
        $formArray['cnf_password']=$this->input->post('cnf_password');
        $this->Adminuser->insert_Record('tbl_vendor',$formArray);
        $this->session->set_flashdata('success', 'Vendor Registration Succcessfully.... !');
        redirect(base_url());
     }

       public function vendor_details($vid)
     {  

        $data['data']=$this->db->get_where('tbl_vendor',['id'=>$vid])->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/view_vendor_detail',$data);
        $this->load->view('Mydashboard/footer');
      }
    
}