<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Conatct  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
    $this->load->library('email');
    $this->load->library('form_validation');
  }
  
  public function add_contact() {
    
   // print_r($_POST);
   //  die;
     $this->form_validation->set_rules('name', 'Name', 'required');
     $this->form_validation->set_rules('email', 'Email', 'required');
     
    if ($this->form_validation->run() == FALSE) {
            
            $this->session->set_flashdata('info', 'Thank You Contact Us. Our Team will be response soon....!');
            $this->load->view('header');
            $this->load->view('contact');
            $this->load->view('footer');
      
	       }else{
	        $formArray= array();
	        $formArray['name']=$this->input->post('name');
	        $formArray['email']=$this->input->post('email');
	        $formArray['subject']=$this->input->post('subject');
	        $formArray['message']=$this->input->post('message');
	        $this->Adminuser->insert_Record('tbl_contact',$formArray);
	        $this->session->set_flashdata('success', 'Thank You For Contact Us. Our Team will be response soon....!');
	        redirect(base_url().'Web/contact');
	       
	    }
    
  }
        public function view_all_contact()
         {
        $data['contact']=$this->Adminuser ->select_Record('tbl_contact');
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_contact',$data);
        $this->load->view('Mydashboard/footer');         
      }

      public function delete_contact($id)
     { 
         $this->Adminuser->delete_Record('tbl_contact',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Conatct/view_all_contact');
      }

     public function add_subscription()
     {

        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == FALSE) {
            
            $this->session->set_flashdata('info', 'Thank You For Contact Us. Our Team will be response soon....!');
            $this->load->view('header');
            $this->load->view('index');
            $this->load->view('footer');
      
         }else{
          $formArray= array();
          $formArray['email']=$this->load->input('email');
          $this->Adminuser->insert_Record('tbl_subscription',$formArray);
          $this->session->set_flashdata('success', 'Thank Yor Contact Us.......');
          redirect(base_url().'Web/index');

     }
} 


        // public function test()
        // {
        //  $this->send_mail('abcd','Hello Dark Shadow','kannaujiya29aniket@gmail.com','info@raamjaap.com');
        // }
        public  function send_mail($subject,$message,$to_email,$from_email)
       {
       
        $to_email = $this->input->post('email');
        $config = [
          'protocol' =>  'smtp',
          'smtp_host' => 'mail.raamjaap.com',
          'smtp_user' => 'info@raamjaap.com',
          'smtp_pass' => 'G}gjCCOcapFy',
          'smtp_port' => 465,
          'mailtype'  => 'html', 
          'charset'   => 'utf-8'
          
        ];

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');
        $this->email->from($from_email, 'Canadian Immigration');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
        return "mail send";
        //xvNB4T9G[t,7
    }
}