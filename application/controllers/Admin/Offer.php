<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Offer  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

      public function index()
      {
        $data['product']=$this->db->get_where('tbl_product',['status'=> '1'])->result();
        $data['offer']=$this->db->get_where('tbl_offer_type',['status'=> '1'])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_offer',$data);
        $this->load->view('Mydashboard/footer');         
      }
       
      
      public function all()
        {
        $data['offer']=$this->db->get_where('tbl_offer',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_offer',$data);
        $this->load->view('Mydashboard/footer');         
       }
       
       public function changes_status(){
        $data=$this->Adminuser->change_status();//die;
        if($data=="Disabled"){
          echo $fdata="You have Changed Status of offer.";
        }else{
          echo $fdata="Status not Changed. Try Aagain...";
        }
      }

      public function add_offer()
       {
         $formArray= array();
         if($_FILES['image']['name'])
         {
               $config = array(
                'upload_path'=>'uploads/offer',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $img=$this->upload->data();
            $formArray['image'] = $img['file_name'];
          }
         $formArray['offer_name']=$this->input->post('offer_name');
         $formArray['offer_price']=$this->input->post('offer_price');
         $formArray['offer_type']=$this->input->post('offer_type');
         if($this->input->post('product') && $this->input->post('product')!=''){
            $formArray['product']=implode(',', $this->input->post('product'));
        }else{
            $formArray['product']='';
        }
         $this->Adminuser->insert_Record('tbl_offer',$formArray);
         $this->session->set_flashdata('success', 'Color Add Succcessfully.... !');
         redirect(base_url().'Admin/Offer/index');
        }
        
       public function delete_offer($id)
        { 
         $this->Adminuser->delete_Record('tbl_offer',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Offer/all');
        }
        
       public function all_offer()
       {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_offer_type');
        $this->load->view('Mydashboard/footer');
       }
       
       public function add_offer_type()
       {
         $formArray= array();
         $formArray['offer_type']=$this->input->post('offer_type');
         $this->Adminuser->insert_Record('tbl_offer_type',$formArray);
         $this->session->set_flashdata('success', 'Offer Type Add Succcessfully.... !');
         redirect(base_url().'Admin/Offer/all_offer');
        }
        
        public function all_offer_type()
        {
        $data['offer']=$this->db->get_where('tbl_offer_type',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_offer_type',$data);
        $this->load->view('Mydashboard/footer');         
       }
       public function delete_offer_type($id)
        { 
         $this->Adminuser->delete_Record('tbl_offer_type',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Offer/all_offer_type');
        }
        
}