<?php
class Usermodel extends CI_model
{    

	function __construct() {
        parent::__construct();
        $this->load->database();
    }
     

  public function ForgotPassword($email)
     {
            $this->db->select('email');
            $this->db->from('tbl_user'); 
            $this->db->where('email', $email); 
            $query=$this->db->get();
            return $query->row_array();
     }

 public function sendpassword($data)
{
        $email = $data['email'];
        $query1=$this->db->query("SELECT *  from tbl_user where email = '".$email."' ");
        $row=$query1->result_array();
        if ($query1->num_rows()>0)
      
   {
        $passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $password=$newpass['password'] =$passwordplain;
        $this->db->where('email', $email);
        $this->db->update('tbl_user', $newpass); 
        // Code here Foe Send New Password....
        $from_email = "test@raamjaap.com";
        $to_email = $data['email'];
       //Load email library
        $config = [
         'protocol' =>  'smtp',
          'smtp_host' => 'mail.secondbestopinion.com',
          'smtp_user' => 'info@secondbestopinion.com',
          'smtp_pass' => '[c94]AaiQ--7',
          'smtp_port' => 465,
          'mailtype'  => 'html', 
          'charset'   => 'utf-8'
        ];
        
       $this->load->library('email', $config);
       $message ="
                <html >
                <head>
                <title>SBO</title>
                </head>
                <body>
                  <b>New Password From Smallbasketstore.</b></br>
                  <table style=\"border: none;\">
                      <tr>
                             <td>This is Your New Password:</td>
                             <td>$password</td>
                     </tr>
                           
                  </table>
                </body>
                </html>
                "; 
                $this->email->set_newline("\r\n");
                $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
                $this->email->set_header('Content-type', 'text/html');
                $this->email->from($from_email, 'Identification');
                $this->email->to($to_email);
                $this->email->cc("swarnfoodcrafts@gmail.com");
                $this->email->bcc("gurumauryacs16@gmail.com");
                $this->email->subject('New Password From Smallbasketstore');
                $this->email->message($message);
                $this->email->send();
                if (!$this->email->send()) {
             
                show_error($this->email->print_debugger());
                  
    		     //$this->session->set_flashdata('msg','Failed to send password, please try again!');
        		     //redirect(base_url());
        		 } else {
        		    $this->session->set_flashdata('msg','Password sent to your email!');
        		    redirect(base_url());
        		 }
        		   redirect(base_url().'user/Login','refresh');        
        		 }
        		 else
        		 {  
        		  $this->session->set_flashdata('msg','Email not found try again!');
        		  redirect(base_url().'user/Login','refresh');
        		 }
                
   
		
		
		   
      
       
     
     }
  }
?>