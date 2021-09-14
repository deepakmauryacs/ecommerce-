<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

  function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->library ('session');  
        $this->load->model('Adminuser');  
	}
     
    public function index()
	{
		$this->load->view('Mydashboard/login');
	}

	public function admin_login(){
        
        $email=$this->input->post('email');
        $password=$this->input->post('password');
		$result=$this->db->get_where('admin', ['email'=>$email,'password'=>$password])->row_array();
		if(!empty($result)){
		$this->session->set_userdata('userdata',$result);
        $this->session->set_userdata('userType','vendor');
		$this->session->set_flashdata('success',"Admin Login Successfully...");
		redirect(base_url().'Admin/Admin/index');
		}else{
		$this->session->set_flashdata('accountnotlogin',"Email or Password is not Correct. Try Again...");
		$this->session->set_flashdata('msg_class','alert-danger');
		redirect(base_url().'Admin/Admin_login/index');
		}
    	}
    	public function logout()
	  {
 
		$this->session->unset_userdata('userdata');
		$this->session->set_flashdata('adminnotlogin',"Admin Logout Successfully.");
		$this->session->set_flashdata('msg_class','alert-success');
		redirect(base_url().'Admin/Admin_login/index');
	 }
}