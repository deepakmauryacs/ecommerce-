<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_login extends CI_Controller {

  function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->library ('session');  
        $this->load->model('Adminuser');  
	}
     
    public function index()
	{
		$this->load->view('Vendor/login');
	}

	public function vendor_login(){
        
        $email=$this->input->post('email');
        $password=$this->input->post('password');
		$result=$this->db->get_where('tbl_vendor', ['email'=>$email,'password'=>$password])->row_array();
		if(!empty($result)){
		$this->session->set_userdata('vendordata',$result);
        $this->session->set_userdata('userType','vendor');
		$this->session->set_flashdata('success',"Vendor Login Successfully...");
		redirect(base_url().'Vendor/Vendor/index');
		}else{
		$this->session->set_flashdata('accountnotlogin',"Email or Password is not Correct. Try Again...");
		$this->session->set_flashdata('msg_class','alert-danger');
		redirect(base_url());
		}
    	}
    	public function vendor_logout()
	  {
 
		$this->session->unset_userdata('vendordata');
		$this->session->set_flashdata('adminnotlogin',"Logout Successfully.");
		$this->session->set_flashdata('msg_class','alert-success');
		redirect(base_url().'Vendor/Vendor_login/index');
	 }
}