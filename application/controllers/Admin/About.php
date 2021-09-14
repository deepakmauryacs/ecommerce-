<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class About  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }


     ////// For About Section  /////

    public function about_section()
    {   
         $data['edit_data']=$this->db->get_where('tbl_aboutsection',['id'=>'1'])->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/about_section',$data);
        $this->load->view('Mydashboard/footer');
      } 

  public function update_about_section()
      {
       $id = $this->input->post('id');
       $updateArray = array();
       $image =$this->input->post('oldImage');
       if($_FILES['image']['name']){ 

          if(file_exists("uploads/about".$image)){
          unlink("uploads/about/".$image);
            }
          $config = array(
              'upload_path'=>'uploads/about',
              'allowed_types'=>'jpg|jpeg|gif|png',
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('image');
          $img=$this->upload->data();
          $image = $img['file_name'];
        }
        $updateArray['image']= $image;
        $updateArray['heading1']=$this->input->post('heading1');
        $updateArray['description1']=$this->input->post('description1');
        $updateArray['heading2']=$this->input->post('heading2');
        $updateArray['description2']=$this->input->post('description2');

        $this->Adminuser->update_global_Record('tbl_aboutsection',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/About/about_section');
       }
}
