<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Product  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

   public function index()
     {

        $this->load->view('Vendor/header');
        $this->load->view('Vendor/index');
        $this->load->view('Vendor/footer');         
      }

      public function product()
     {

        $this->load->view('Vendor/header');
        $this->load->view('Vendor/add_product');
        $this->load->view('Vendor/footer');         
      }
      
      public function add_product()
      {
        $formArray= array();
         if($_FILES['gallery_image']['name'])
        {
               $config = array(
                'upload_path'=>'uploads/product',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('gallery_image');
            $img=$this->upload->data();
            $formArray['gallery_image'] = $img['file_name'];
         }
         if($_FILES['thumbnail_image']['name'])
        {
               $config = array(
                'upload_path'=>'uploads/product',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('thumbnail_image');
            $img=$this->upload->data();
            $formArray['thumbnail_image'] = $img['file_name'];
         }
         if($_FILES['meta_image']['name'])
        {
               $config = array(
                'upload_path'=>'uploads/product',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('meta_image');
            $img=$this->upload->data();
            $formArray['meta_image'] = $img['file_name'];
         }
         $formArray['vendor_id']=$this->input->post('vendor_id');
         $formArray['product_name']=$this->input->post('product_name');
         $formArray['category_name']=$this->input->post('category_name');
         $formArray['brand_id']=$this->input->post('brand_id');
         $formArray['unit']=$this->input->post('unit');
         $formArray['min_qty']=$this->input->post('min_qty');
         $formArray['tags']=$this->input->post('tags');
         $formArray['price']=$this->input->post('price');
         $formArray['barcode']=$this->input->post('barcode');
         $formArray['meta_title']=$this->input->post('meta_title');
         $formArray['meta_description']=$this->input->post('meta_description');
         $formArray['description']=$this->input->post('description');
        $this->Adminuser->insert_Record('tbl_product',$formArray);
        $this->session->set_flashdata('success', 'Product  Add Succcessfully.... !');
        redirect(base_url().'Vendor/Product/product');
       }

       public function update_product()
        {
        $id = $this->input->post('id');
        $updateArray = array();
        $gallery_image =$this->input->post('oldImage');
       if($_FILES['gallery_image']['name']){ 

          if(file_exists("uploads/product".$gallery_image)){
          unlink("uploads/product".$gallery_image);
            }
          $config = array(
              'upload_path'=>'uploads/product',
              'allowed_types'=>'jpg|jpeg|gif|png',
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('gallery_image');
          $img=$this->upload->data();
          $gallery_image = $img['file_name'];
         }

        $thumbnail_image =$this->input->post('oldImage');
       if($_FILES['thumbnail_image']['name']){ 

          if(file_exists("uploads/product".$thumbnail_image)){
          unlink("uploads/product".$thumbnail_image);
       }
          $config = array(
              'upload_path'=>'uploads/product',
              'allowed_types'=>'jpg|jpeg|gif|png',
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('thumbnail_image');
          $img=$this->upload->data();
          $thumbnail_image = $img['file_name'];
        }
        $updateArray['gallery_image']= $gallery_image;
        $updateArray['thumbnail_image']= $thumbnail_image;
        $updateArray['product_name']=$this->input->post('product_name');
        $updateArray['brand_id']=$this->input->post('brand_id');
        $updateArray['unit']=$this->input->post('unit');
        $updateArray['min_qty']=$this->input->post('min_qty');
        $updateArray['tags']=$this->input->post('tags');
        $updateArray['description']=$this->input->post('description');
        $updateArray['updated_at']=date('Y-m-d');
        $this->Adminuser->update_global_Record('tbl_product',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Vendor/Product/view_all_product');
      }

       public function edit_product($id){
        $sql="SELECT * FROM `tbl_product` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Vendor/header');
        $this->load->view('Vendor/edit_product',$data);
        $this->load->view('Vendor/footer');

    }

     public function all_category()
       {
        $data['data']=$this->db->get_where('tbl_category',['id >'=>0])->result();
        $this->load->view('Vendor/header');
        $this->load->view('Vendor/all_category',$data);
        $this->load->view('Vendor/footer');         
       }
       
      public function view_all_product()
      {
        $data['product']=$this->Adminuser ->select_Record('tbl_product');
        $this->load->view('Vendor/header');
        $this->load->view('Vendor/all_product',$data);
        $this->load->view('Vendor/footer');         
       }

       public function delete_product($id)
      { 
         $this->Adminuser->delete_Record('tbl_product',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Vendor/Product/view_all_product');
       }

      public function product_details($vid)
      {
        $data['data']=$this->db->get_where('tbl_product',['id'=>$vid])->row();
        $this->load->view('Vendor/header');
        $this->load->view('Vendor/product_view',$data);
        $this->load->view('Vendor/footer');         
      }
      
      public function all_subcategory()
       {
        $data['data']=$this->db->get_where('tbl_subcategory',['id >'=>0])->result();
        $this->load->view('Vendor/header');
        $this->load->view('Vendor/all_subcategory',$data);
        $this->load->view('Vendor/footer');         
       }
 }
 ?>