<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Wishlist  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }


      public function add_wishlist()
      {  
         $userdata=$this->session->userdata('usersdata');
         $isavailable = $this->db->get_where('tbl_wishlist',['user_id'=>$userdata['id'] ,'product_id'=>$this->input->get('id')])->row_array();
        // print_r($isavailable);die;
         if(isset($isavailable)){
             $this->session->set_flashdata('success', 'Product Already Added to Your Wishlist... !');
            // echo 'Product Allready Added to Your Wishlist... !';
         }else{
         $formArray= array();
         $formArray['user_id']=$userdata['id'];
         $formArray['product_id']=$this->input->get('id');
         $formArray['name']=$this->input->get('name');
         $formArray['price']=$this->input->get('price');
         $formArray['qty']=$this->input->get('qty');
         $formArray['image']=$this->input->get('thumbnail_image');
         $this->Adminuser->insert_Record('tbl_wishlist',$formArray);
         $this->session->set_flashdata('success', 'Product Add to Your Wishlist Succcessfully.... !');
        // echo 'Product Add to Your Wishlist Succcessfully.... !'; 
         }
         /*$this->session->set_flashdata('success', 'Product Add to Your Wishlist Succcessfully.... !');
         redirect(base_url());*/
        }

     
    

}
 ?>