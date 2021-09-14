<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		
	}


	
	public function index()
	{
		$this->load->view('Mydashboard/login');
	}
	

	public function adminlogin(){
        
        $email=$this->input->post('email');
        $password=$this->input->post('password');
		$result=$this->db->get_where('admin', ['email'=>$email,'password'=>$password])->row_array();
		if(!empty($result)){
			$this->session->set_userdata('AdminData',$result);
			$this->session->set_flashdata('adminlogin',"Admin Login Successfully...");
			redirect(base_url().'Admin/Admin');
		}else{
			$this->session->set_flashdata('adminnotlogin',"Username or Password is not Correct. Try Again...");
			$this->session->set_flashdata('msg_class','alert-danger');
			redirect('Login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('AdminData');
		$this->session->set_flashdata('adminnotlogin',"Logout Successfully.");
		$this->session->set_flashdata('msg_class','alert-success');
		redirect('Login');
	}
	
}

?>