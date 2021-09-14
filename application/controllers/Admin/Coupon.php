<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Coupon  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

   
       public function coupon()
       {
           
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_cupon');
        $this->load->view('Mydashboard/footer');         
        }

        public function all_coupon()
       {
        $data['data']=$this->db->get_where('tbl_cupon',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_coupon',$data);
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
        redirect(base_url().'Admin/Coupon/coupon');
        
        } 
      
       public function delete_coupon($id)
        { 
         $this->Adminuser->delete_Record('tbl_cupon',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Coupon/all_coupon');
        }
       
       public function edit_coupon($id)
       {
        $sql="SELECT * FROM `tbl_cupon` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_coupon.php',$data);
        $this->load->view('Mydashboard/footer');

       }
       
       public function update_coupon()
       {
        $id = $this->input->post('id');
        $updateArray = array();
        $updateArray['discount']= $this->input->post('discount');
        $updateArray['discount_type']=$this->input->post('discount_type');
        $updateArray['status']=$this->input->post('status');
        $updateArray['valid_from']=$this->input->post('valid_from');
        $updateArray['valid_to']=$this->input->post('valid_to');
        $updateArray['created_for']=$this->input->post('created_for');
        $this->Adminuser->update_global_Record('tbl_cupon',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Coupon/all_coupon');
      }


  

}
 ?>