<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load form library & helper
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        // Load cart library
        $this->load->library('cart');
         $this->load->model('Adminuser'); 
    }
    
    public function conf_address(){
         if(empty($this->session->userdata('usersdata'))){
             redirect(base_url().'Web/login');
        }
        $userdata=$this->session->userdata('usersdata');
        $formArray= array();
        $formArray['user_id']=$userdata['id'];
        $formArray['shipping_address']=$this->input->post('shipping_address');
        $this->Adminuser->insert_Record('tbl_odersadress',$formArray);
        redirect(base_url().'Web/order_overview');   
       
        
        
    }
       
       
    public function conf_checkout(){
        //print_r($_POST);die;
        if(empty($this->session->userdata('usersdata'))){
            //redirect to cart page
        }
        $userdata=$this->session->userdata('usersdata');
        //print_r($userdata);die;
        $randid=$this->genRandId();
        $cartItems = $this->cart->contents();
        //$G_total= 0;
        $flag= 1;
        //print_r($cartItems);die;
        //echo $randid;die;
        $G_total= $this->cart->total();
        // if ( $G_total < 150) {                  
        //     $G_total= $G_total + 20;
           
        // }
        foreach ($cartItems as $key => $value) {
            $pro_data=$this->db->get_where('tbl_product',['id'=>$value['id']])->row_array();
            $proArray=array(
                'product_id'=>$pro_data['id'],
                'customer_id'=> $userdata['id'],
                'billing_id'=>$randid,
                'image'=>$pro_data['thumbnail_image'],
                'product_name'=>$pro_data['product_name'],
                'quantity'=>$value['qty'],
                'sell_price'=>$value['price'],
                'sub_total'=>$value['qty']*$value['price']
            );
            $data1=$this->Adminuser->insert_Record('tbl_order_items',$proArray);
           // print_r($data1) ;die;
            if(!$data1){
                $flag=0;
            }
            
        }
        if($flag){

            $formArray=array(
                'customer_id'=>$userdata['id'],
                'billing_id'=> $randid,
                'username'=>$userdata['username'],
                'email'=>$userdata['email'],
                'contact'=>$userdata['contact'],
                // 'address'=>$userdata['address'],
                'grand_total'=>$G_total,
                'payment_type'=>$_POST['payment_type'],
                'shipping_address'=>$_POST['shipping_address'],
                 'status '=>1
            );
            $data2=$this->Adminuser->insert_Record('tbl_orders', $formArray);
            
            
            //print_r($data2);
            
            

        //     $formArray1=array(
        //         'customer_id'=>$userdata['id'],
        //         'billing_id'=> $randid,
        //         'billing_first_name'=>$_POST['billing_first_name'],
        //         'billing_last_name'=>$_POST['billing_last_name'],
        //         'billing_email'=>$_POST['billing_email'],
        //         'billing_contact'=>$_POST['billing_contact'],
        //         'billing_country'=>$_POST['billing_country'],
        //         'billing_city'=>$_POST['billing_city'],
        //         'billing_zip_code'=>$_POST['billing_zip_code'],
        //         'billing_state'=>$_POST['billing_state'],
        //         'billing_address'=>$_POST['billing_address'],
            
        //     );

        //   $this->Adminuser->insert_Record('tbl_billing_details', $formArray1);
        //    echo $data2;die;
        //    print_r($formArray);die;
            $this->cart->destroy();
            if($data2 && count($this->cart->contents())==0){


                $this->session->set_flashdata('success', 'Order Successful... !');
          
                //die("sdc");
            }else{
                $this->session->set_flashdata('success', 'Order fail1 Successful... !');
               // die("sdcsdvc");
            }
            
        }else{
            $this->session->set_flashdata('success', 'Order  fai2l Successful... !');

        }


        $this->Adminuser->delete_odersadress('tbl_odersadress',$userdata['id']);
        
        redirect(base_url('Web/orderComplete/'.$randid));
    }
    public function genRandId(){
        $RandomDigit = mt_rand(1000000,9999999);
        $data=$this->db->get_where('tbl_orders',['billing_id'=>$RandomDigit])->row_array();
        if($data){
            $this->genRandId();
        }
        return $RandomDigit;


    }
    
    public function getState() {
		$states = $this->Adminuser->getRecords('tbl_states', ['country_id'=>$this->input->post('country_id')]);
		$opt='';
		if(!empty($states)){
			foreach ($states as $key => $value) {
				$opt.='<option value="'.$value['id'].'">'.$value['name'].'</option>';
			}

		}else{
			$opt.='<option value="0">No State Found...</option>';

		}
		echo json_encode($opt);die;
	}
   
    
}