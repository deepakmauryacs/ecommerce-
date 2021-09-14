<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('Adminuser'); 
		$this->load->model('Usermodel'); 
		$this->load->helper('url');
        $this->load->library('pagination');
        $this->load->library("cart");
		
	}
   
    

    public function login(){
        $contact=$this->input->post('contact');
        $password=$this->input->post('password');
		$result=$this->db->get_where('tbl_user', ['contact'=>$contact,'password'=>$password,'status'=>'2'])->row_array();
		if(!empty($result)){
			$this->session->set_userdata('usersdata',$result);
			$this->session->set_flashdata('success',"Login Successfully...");
			redirect(base_url());
		}else{
			$this->session->set_flashdata('notlogin',"Contact Number or Password is not Correct. Try Again...");
			$this->session->set_flashdata('msg_class','alert-danger');
			redirect(base_url().'Web/login');
		}
	}

    public function sing_up() {
        
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('contact','Contact','required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
      // $this->load->view(base_url().'Addcategory');
        $this->load->view('header');
        $this->load->view('user-register');
        $this->load->view('footer');
        }else{
        $formArray= array();
        $formArray['username']=$this->input->post('username');
        $formArray['email']=$this->input->post('email');
        $formArray['contact']=$this->input->post('contact');
        $formArray['password']=$this->input->post('password');
        $this->Adminuser->insert_Record('tbl_user',$formArray);
        $this->session->set_flashdata('success', 'Registration Successful... !');
        redirect(base_url());
        
      }
    }
    
        public function address() {
        $userdata=$this->session->userdata('usersdata');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('number','Number','required');
        $this->form_validation->set_rules('pincode', 'Pincode', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        if ($this->form_validation->run() == FALSE) {
        $this->load->view('header');
        $this->load->view('checkout');
        $this->load->view('footer');
        }else{
        $formArray= array();
        $formArray['user_id']=$userdata['id'];
        $formArray['name']=$this->input->post('name');
        $formArray['number']=$this->input->post('number');
        $formArray['email']=$this->input->post('email');
        $formArray['pincode']=$this->input->post('pincode');
        $formArray['locality']=$this->input->post('locality');
        $formArray['address']=$this->input->post('address');
        $formArray['country']=$this->input->post('country');
        $formArray['state']=$this->input->post('state');
        $formArray['city']=$this->input->post('city');
        $formArray['landmark']=$this->input->post('landmark');
        $formArray['alternate_contact']=$this->input->post('alternate_contact');
        $this->Adminuser->insert_Record('tbl_address',$formArray);
        $this->session->set_flashdata('success', 'Address ADD Successful... !');
        redirect(base_url().'Web/checkout');
        
      }
    }

	public function logout()
	 {
		$this->session->unset_userdata('usersdata');
		$this->session->set_flashdata('adminnotlogin',"Logout Successfully.");
		$this->session->set_flashdata('msg_class','alert-success');
		redirect(base_url().'');
	}
	
	public function ForgotPassword()
	   {
	         $email = $this->input->post('email');      
	         $findemail = $this->Usermodel->ForgotPassword($email);  
	         if($findemail){
	       //   $this->Usermodel->sendpassword($findemail);       
	       
    	    $email = $this->input->post('email');
            $query1=$this->db->query("SELECT *  from tbl_user where email = '".$email."' ");
            $row=$query1->result_array();
            if ($query1->num_rows()>0)
      
   {
        $passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $password=$newpass['password'] = $passwordplain;
        $this->db->where('email', $email);
        $this->db->update('tbl_user', $newpass); 
        // Code here Foe Send New Password....
        $from_email = "swarnfoodcrafts@gmail.com";
        $to =    $this->input->post('email');;
      //Load email library
    //     $config = [
    //       'protocol' =>  'smtp',
    //       'smtp_host' => 'mail.raamjaap.com',
    //       'smtp_user' => 'test@raamjaap.com',
    //       'smtp_pass' => 'V6bET@wvv5bU',
    //       'smtp_port' => 465,
    //       'mailtype' => 'html',
    //       'charset' => 'iso-8859-1',
    //       'wordwrap' => TRUE
    //     ];
        
    //   $this->load->library('email', $config);
       $message ="
                <html >
                <head>
                <title>SBO</title>
                </head>
                <body>
                              <b>New Password From Swarnstore.</b></br>
                              <p>This is Your New Password:</p><br>
                              <p>$password</p>
                         
                </body>
                </html>
                 "; 
                 
                $subject = "New Password From Swarnstore";
              
				
				// Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // More headers
                $headers .= 'From: <swarnfoodcrafts@gmail.com>' . "\r\n";
                $headers .= 'Cc: gurumauryacs16@gmail.com' . "\r\n";


				mail($to,$subject,$message,$headers);
				// alert(mail);
			   $this->session->set_flashdata('success','New Password Send Your Email Please Check Your Email ID ...!');
		       redirect(base_url());
		     }

	           }else{
	          $this->session->set_flashdata('success',' Email not found!');
	          redirect(base_url().'Web/login','refresh');
	         }
	       }
	       
	       
	       public function checkout_login(){
                $contact=$this->input->post('contact');
                $password=$this->input->post('password');
        		$result=$this->db->get_where('tbl_user', ['contact'=>$contact,'password'=>$password,'status'=>'2'])->row_array();
        		if(!empty($result)){
        			$this->session->set_userdata('usersdata',$result);
        			$this->session->set_flashdata('success',"Login Successfully...");
        			redirect(base_url().'Web/checkout');
        		}else{
        			$this->session->set_flashdata('notlogin',"Contact Number or Password is not Correct. Try Again...");
        			$this->session->set_flashdata('msg_class','alert-danger');
        			redirect(base_url().'Web/checkout');
        		}
        	}

}

?>