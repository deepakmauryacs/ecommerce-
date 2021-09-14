<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class ShopBy  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

      public function index()
      {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/shop_by_category');
        $this->load->view('Mydashboard/footer');         
      }
       
      
      public function all()
        {
        $data['shop']=$this->db->get_where('tbl_category',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_shop',$data);
        $this->load->view('Mydashboard/footer');         
       }

      public function add_shop_category()
       {
         $formArray= array();
         if($_FILES['image']['name'])
         {
               $config = array(
                'upload_path'=>'uploads/shopby',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $img=$this->upload->data();
            $formArray['image'] = $img['file_name'];
          }
         $formArray['name']=$this->input->post('name');
         $this->Adminuser->insert_Record('tbl_shop_by',$formArray);
         $this->session->set_flashdata('success', 'Color Add Succcessfully.... !');
         redirect(base_url().'Admin/ShopBy/index');
        }
        
       public function delete_shop($id)
        { 
         $this->Adminuser->delete_Record('tbl_category',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/ShopBy/all');
        }
        
}