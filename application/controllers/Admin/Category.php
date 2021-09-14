<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Category  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

      public function product_category()
      {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_category');
        $this->load->view('Mydashboard/footer');         
      }
       
       public function add_category()
      {
         $formArray= array();
         if($_FILES['banner']['name'])
         {
               $config = array(
                'upload_path'=>'uploads/category/',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('banner');
            $img=$this->upload->data();
            
            //  print_r($img);die();
            $formArray['banner'] = $img['file_name'];
         }

         $formArray['icon']=$this->input->post('icon');
         $formArray['category_name']=$this->input->post('category_name');
         $formArray['type']=$this->input->post('type');
       
         
         
        // print_r($formArray);die();
         $this->Adminuser->insert_Record('tbl_category',$formArray);
         $this->session->set_flashdata('success', 'Category Added Succcessfully.... !');
         redirect(base_url().'Admin/Category/product_category');
        }

       public function edit_category($id)
       {
        $sql="SELECT * FROM `tbl_category` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_category',$data);
        $this->load->view('Mydashboard/footer');

       }
       
       public function update_category()
       {
        $id = $this->input->post('id');
        $updateArray = array();
        $banner =$this->input->post('oldImage');
           if($_FILES['banner']['name']){ 
    
              if(file_exists("uploads/category/".$banner)){
                }
              $config = array(
                  'upload_path'=>'uploads/category',
                  'allowed_types'=>'jpg|jpeg|gif|png',
                  );
              $this->load->library('upload',$config);
              $this->upload->do_upload('banner');
              $img=$this->upload->data();
              $banner = $img['file_name'];
            }

        $updateArray['banner']= $banner;
        $updateArray['icon']=$this->input->post('icon');
        $updateArray['category_name']=$this->input->post('category_name');
        $updateArray['type']=$this->input->post('type');
        // $updateArray['updated_at']=date('Y-m-d');
        $this->Adminuser->update_global_Record('tbl_category',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Category/all_category');
      }

      public function product_subcategory()
       {
         $data['service']=$this->Adminuser ->select_Record('tbl_category');
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_subcategory',$data);
        $this->load->view('Mydashboard/footer');         
       }


      public function add_subcategory()
      {
        $this->form_validation->set_rules('subcategory_name','Subcategory_name','required');
        if ($this->form_validation->run() == FALSE) {
        $this->session->set_flashdata('error', 'Something went Wroung !');
        $data['category_name']=$this->Adminuser->select_Record('tbl_category');
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/product_subcategory',$data);
        $this->load->view('Mydashboard/footer');

      //echo("hello");
         }else{
         $formArray= array();
         $formArray['category_name']=$this->input->post('category_name');
         $formArray['subcategory_name']=$this->input->post('subcategory_name');
         $formArray['type']=$this->input->post('type');
       
        $this->Adminuser->insert_Record('tbl_subcategory',$formArray);
        $this->session->set_flashdata('success', 'Sub-Category  Added Succcessfully.... !');
        redirect(base_url().'Admin/Category/product_subcategory');
       }
     }

      public function edit_subcategory($id)
      {
        $data['category']=$this->db->get_where('tbl_category',['id >'=>0])->result();
        $sql="SELECT * FROM `tbl_subcategory` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_subcategory',$data);
        $this->load->view('Mydashboard/footer');
   
      }
  
       public function update_subcategory()
       {
        $id = $this->input->post('id');
        $updateArray = array();
        $updateArray['category_name']=$this->input->post('category_name');
        $updateArray['subcategory_name']=$this->input->post('subcategory_name');
        $updateArray['type']=$this->input->post('type');
       
        
        
     //   print_r($updateArray);die();
        $this->Adminuser->update_global_Record('tbl_subcategory',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Category/all_subcategory');
       }

      public function all_subcategory()
        {
        $data['data']=$this->db->get_where('tbl_subcategory',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_subcategory',$data);
        $this->load->view('Mydashboard/footer');         
       }

        public function delete_subcategory($id)
        { 
         $this->Adminuser->delete_Record('tbl_subcategory',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Category/all_subcategory');
        }
        
        
       public function all_category()
       {
        $data['data']=$this->db->get_where('tbl_category',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_category',$data);
        $this->load->view('Mydashboard/footer');         
       }

        
       public function add_coupon()
       {
         $formArray= array();
         $formArray['discount_type']=implode(',', $this->input->post('discount_type'));
         $formArray['discount']=$this->input->post('discount');
         $formArray['status']=$this->input->post('status');
         $formArray['valid_from']=$this->input->post('valid_from');
         $formArray['valid_to']=$this->input->post('valid_to');
         $formArray['created_for']=$this->input->post('created_for');
        $this->Adminuser->insert_Record('tbl_cupon',$formArray);
        $this->session->set_flashdata('success', 'Coupont  Add Succcessfully.... !');
        redirect(base_url().'Admin/Product/coupon');
        } 

        public function delete_category($id)
        { 
         $this->Adminuser->delete_Record('tbl_category',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Category/all_category');
        }
        
         function update_status()
         {
          $id = $this->input->post('id');
          $data['status'] = $this->input->post('status'); 
          $this->Adminuser->update_global_Record('tbl_product',$id,$data);
    
         }
     
     

  

}
 ?>