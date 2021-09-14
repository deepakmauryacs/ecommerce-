<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Staff  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

      public function staffs()
      {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_staff');
        $this->load->view('Mydashboard/footer');         
      }
      
     public function add_staff()
     {
       $formarray=array();
       $formarray['name']=$this->input->post('name');
       $formarray['email']=$this->input->post('email');
       $formarray['phone']=$this->input->post('phone');
       $formarray['password']=$this->input->post('password');
       $formarray['role']=$this->input->post('role');
       $this->Adminuser->insert_Record('tbl_staff',$formarray);
       $this->session->set_flashdata('success', 'Staff Add Succcessfully.... !');
       redirect(base_url().'Admin/Staff/staffs');
     }
     
      public function all_staff()
       {
        $data['data']=$this->db->get_where('tbl_staff',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_staff',$data);
        $this->load->view('Mydashboard/footer');         
       }
       
       public function delete_staffs($id)
        { 
         $this->Adminuser->delete_Record('tbl_staff',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Staff/all_staff');
        }
        
         public function edit_staff($id)
       {
        $sql="SELECT * FROM `tbl_staff` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_staff.php',$data);
        $this->load->view('Mydashboard/footer');

       }
       
       public function update_staff()
       {
        $id = $this->input->post('id');
        $updateArray = array();
        $updateArray['name']=$this->input->post('name');
        $updateArray['email']=$this->input->post('email');
        $updateArray['phone']=$this->input->post('phone');
        $updateArray['password']=$this->input->post('password');
        $updateArray['role']=$this->input->post('role');
        $this->Adminuser->update_global_Record('tbl_staff',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Staff/all_staff');
      }
      
      public function role()
      {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_role');
        $this->load->view('Mydashboard/footer');         
      }
      
       public function add_staff_role()
     {
       $formarray=array();
       $formarray['name']=$this->input->post('name');
       $this->Adminuser->insert_Record('tbl_staff_role',$formarray);
       $this->session->set_flashdata('success', 'Role Add Succcessfully.... !');
       redirect(base_url().'Admin/Staff/role');
     }
     
     public function all_role()
       {
        $data['data']=$this->db->get_where('tbl_staff_role',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_role',$data);
        $this->load->view('Mydashboard/footer');         
       }
       
       public function delete_role($id)
        { 
         $this->Adminuser->delete_Record('tbl_staff_role',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Staff/all_role');
        }
}