<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Footer  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

      public function footer()
      {
        $data['edit_data']=$this->db->get_where('tbl_footer',['id'=>'1'])->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/footer_section',$data);
        $this->load->view('Mydashboard/footer');         
      }
      
      public function update_footer_logo_section()
      {
       $id = $this->input->post('id');
       $updateArray = array();
       $logo =$this->input->post('oldImage');
       if($_FILES['logo']['name']){ 
          $config = array(
              'upload_path'=>'uploads/footer',
              'allowed_types'=>'jpg|jpeg|gif|png',
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('logo');
          $img=$this->upload->data();
          $logo = $img['file_name'];
        }
        $updateArray['logo']= $logo;
        $updateArray['description']=$this->input->post('description');
        

        $this->Adminuser->update_global_Record('tbl_footer',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Footer/footer');
       }
       
       public function update_information_section()
       {
        $id = $this->input->post('id');
        $updateArray = array();
        $updateArray['phone']=$this->input->post('phone');
        $updateArray['email']=$this->input->post('email');
        $updateArray['address']=$this->input->post('address');
        $this->Adminuser->update_global_Record('tbl_footer',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Footer/footer');
       }
       
        public function social()
      {
        $data['edit_data']=$this->db->get_where('tbl_social_media',['id'=>'1'])->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/social',$data);
        $this->load->view('Mydashboard/footer');         
      }
      
      public function update_social()
       {
        $id = $this->input->post('id');
        $updateArray = array();
        $updateArray['facebook']=$this->input->post('facebook');
        $updateArray['instagram']=$this->input->post('instagram');
        $updateArray['youtube']=$this->input->post('youtube');
        $updateArray['linkdin']=$this->input->post('linkdin');
        $updateArray['twitter']=$this->input->post('twitter');
        $this->Adminuser->update_global_Record('tbl_social_media',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Footer/social');
       }
}