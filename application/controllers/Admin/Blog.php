<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Blog  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

    public function blog()
      {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_blog');
        $this->load->view('Mydashboard/footer');         
      }
      
    public function add_blog()
     {
     $formArray=array();
     if($_FILES['banner']['name'])
         {
               $config = array(
                'upload_path'=>'uploads/blog',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('banner');
            $img=$this->upload->data();
            $formArray['banner'] = $img['file_name'];
          }
     if($_FILES['meta_image']['name'])
         {
               $config = array(
                'upload_path'=>'uploads/blog',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('meta_image');
            $img=$this->upload->data();
            $formArray['meta_image'] = $img['file_name'];
          }
         $formArray['blog_title']=$this->input->post('blog_title');
         $formArray['category']=$this->input->post('category');
         $formArray['slug']=$this->input->post('slug');
         $formArray['short_description']=$this->input->post('short_description');
         $formArray['description']=$this->input->post('description');
         $formArray['meta_title']=$this->input->post('meta_title');
         $formArray['meta_description']=$this->input->post('meta_description');
         $formArray['meta_keyword']=$this->input->post('meta_keyword');
         $this->Adminuser->insert_Record('tbl_blog',$formArray);
         $this->session->set_flashdata('success', 'Blog Add Succcessfully.... !');
         redirect(base_url().'Admin/Blog/blog');
      }
      
      public function all()
        {
        $data['blog']=$this->db->get_where('tbl_blog',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_blog',$data);
        $this->load->view('Mydashboard/footer');         
        }
        
     
       
       
      public function delete_blog($id)
        { 
         $this->Adminuser->delete_Record('tbl_blog',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Blog/all');
        }
        
      public function blog_category()
       {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_blog_category');
        $this->load->view('Mydashboard/footer');         
       }
    
      public function add_blog_category()
       {
         $formarray=array();
         $formArray['category_name']=$this->input->post('category_name');
         $this->Adminuser->insert_Record('tbl_blog_category',$formArray);
         $this->session->set_flashdata('success', 'Blog Category Add Succcessfully.... !');
         redirect(base_url().'Admin/Blog/blog_category');
       }
     
     public function all_blog_category()
        {
        $data['category']=$this->db->get_where('tbl_blog_category',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_blog_category',$data);
        $this->load->view('Mydashboard/footer');         
        }
       
      public function edit_blog_category($id)
       {
        $sql="SELECT * FROM `tbl_blog_category` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_blog_category',$data);
        $this->load->view('Mydashboard/footer');

       }
     
      public function update_blog_category()
       {
        $id = $this->input->post('id');
        $updateArray = array();
        $updateArray['category_name']=$this->input->post('category_name');
        $this->Adminuser->update_global_Record('tbl_blog_category',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Blog/all_blog_category');
       }
       
      public function delete_blog_category($id)
        { 
         $this->Adminuser->delete_Record('tbl_blog_category',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Blog/all_blog_category');
        }
}