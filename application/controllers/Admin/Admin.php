<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Admin  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
   
    public function index(){
     
      $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/index');
        $this->load->view('Mydashboard/footer');

    }

    public function profile(){
     
        // $data['h']=$this->Adminuser ->select_Record('admin');
        $data['userdata']=$this->db->get_where('admin',['id'=>'1'])->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/profile',$data);
        $this->load->view('Mydashboard/footer');

    }

        public function update_profile()
           {
             $id = $this->input->post('id');
             $username = $this->input->post('username');
             $email = $this->input->post('email');
             $contact = $this->input->post('contact');
             $address = $this->input->post('address');
             $updateArray = array('username'=>$username,'email'=>$email,'contact'=>$contact,'address'=>$address);
             $this->Adminuser->update_global_Record('admin',$id,$updateArray);
             $this->session->set_flashdata('success','Your details has been updated');
             redirect(base_url().'Admin/Admin/profile');

          }

       public function password(){
        
            $this->load->view('Mydashboard/header');
            $this->load->view('Mydashboard/update_password');
            $this->load->view('Mydashboard/footer');
        }

        public function update_password()
          {
              $id = 1;
              $password = $this->input->post('password');
              $new_password = $this->input->post('new_password');
              $repeat_password = $this->input->post('repeat_password');
              
              $check=1;
              $row=$this->db->get_where('admin',['id'=>$id,'password'=>$password])->row();
              if(empty($row))
              {  $check=0;
                  $this->session->set_flashdata('delete','Your psassword not match!');
              }
              
              if($new_password!=$repeat_password)
              {   $check=0;
                  $this->session->set_flashdata('delete','New psassword and repeat password not match!');
              }
              if($check)
              {
                  $updateArray = array('password'=>$new_password);
                  $this->Adminuser->update_global_Record('admin',$id,$updateArray);
                  $this->session->set_flashdata('success','Your Psassword has been updated');  
              }
              redirect(base_url().'Admin/Admin/password');
           }

}
?>