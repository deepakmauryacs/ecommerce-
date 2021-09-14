<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Color  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

      public function index()
      {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_color');
        $this->load->view('Mydashboard/footer');         
      }
       
      
      public function all()
        {
        $data['color']=$this->db->get_where('tbl_color',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_color',$data);
        $this->load->view('Mydashboard/footer');         
       }
      
      public function changes_status(){
        $data=$this->Adminuser->change_color_status();//die;
        if($data=="Disabled"){
          echo $fdata="You have Changed Status of offer.";
        }else{
          echo $fdata="Status not Changed. Try Aagain...";
        }
      }
      
      
      public function add_color()
       {
         $formArray= array();
         $formArray['color_name']=$this->input->post('color_name');
         $this->Adminuser->insert_Record('tbl_color',$formArray);
         $this->session->set_flashdata('success', 'Color Add Succcessfully.... !');
         redirect(base_url().'Admin/Color/all');
        }

       public function edit_color($id)
       {
        $sql="SELECT * FROM `tbl_color` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_color',$data);
        $this->load->view('Mydashboard/footer');

       }
       
       public function update_color()
       {
        $id = $this->input->post('id');
        $updateArray = array();
        $updateArray['color_name']=$this->input->post('color_name');
        // $updateArray['updated_at']=date('Y-m-d');
        $this->Adminuser->update_global_Record('tbl_color',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Color/all');
      }


        public function delete_color($id)
        { 
         $this->Adminuser->delete_Record('tbl_color',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Color/all');
        }
        
        // Batch Number Controller Start
        
        public function all_batch()
        {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/batch_number');
        $this->load->view('Mydashboard/footer');         
       }
        
        
         public function add_batch_number()
       {
         $formArray= array();
         $formArray['batch_no']=$this->input->post('batch_no');
         $this->Adminuser->insert_Record('tbl_batch_no',$formArray);
         $this->session->set_flashdata('success', 'Color Add Succcessfully.... !');
         redirect(base_url().'Admin/Color/all_batch');
        }
        
       public function all_batch_number()
        {
        $data['batch']=$this->db->get_where('tbl_batch_no',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_batch',$data);
        $this->load->view('Mydashboard/footer');         
       }
       
       public function delete_batch($id)
        { 
         $this->Adminuser->delete_Record('tbl_batch_no',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Color/all_batch_number');
        }
    
    // Weight Controller Start
    
       public function all_weight()
        {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_weight');
        $this->load->view('Mydashboard/footer');         
        }
        
        
         public function add_weight()
        {
         $formArray= array();
         $formArray['weight']=$this->input->post('weight');
         $this->Adminuser->insert_Record('tbl_weight',$formArray);
         $this->session->set_flashdata('success', 'Color Add Succcessfully.... !');
         redirect(base_url().'Admin/Color/all_weight');
        }
        
        public function weight()
        {
        $data['weight']=$this->db->get_where('tbl_weight',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_weight',$data);
        $this->load->view('Mydashboard/footer');         
       }
       public function delete_weight($id)
        { 
         $this->Adminuser->delete_Record('tbl_weight',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Color/weight');
        }
        
        // Weight Controller Start
    
        public function all_quantity()
        {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_quantity');
        $this->load->view('Mydashboard/footer');         
        }
        
        
         public function add_quantity()
        {
         $formArray= array();
         $formArray['quantity']=$this->input->post('quantity');
         $this->Adminuser->insert_Record('tbl_quantity',$formArray);
         $this->session->set_flashdata('success', 'Quantity Add Succcessfully.... !');
         redirect(base_url().'Admin/Color/all_quantity');
        }
        
        public function quantity()
        {
        $data['quantity']=$this->db->get_where('tbl_quantity',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_quantity',$data);
        $this->load->view('Mydashboard/footer');         
       }
       public function delete_quantity($id)
        { 
         $this->Adminuser->delete_Record('tbl_quantity',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Color/quantity');
        }
        
        // Unit Controller Start
    
        public function unit()
        {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_unit');
        $this->load->view('Mydashboard/footer');         
        }
        
        public function add_unit()
        {
         $formArray= array();
         $formArray['unit']=$this->input->post('unit');
         $this->Adminuser->insert_Record('tbl_unit',$formArray);
         $this->session->set_flashdata('success', 'Unit Add Succcessfully.... !');
         redirect(base_url().'Admin/Color/unit');
        }
        public function all_unit()
        {
        $data['unit']=$this->db->get_where('tbl_unit',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_unit',$data);
        $this->load->view('Mydashboard/footer');         
       }
}
?>