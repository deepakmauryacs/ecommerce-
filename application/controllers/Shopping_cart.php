<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping_cart extends CI_Controller {
  
  public function __construct(){
            parent::__construct();
            $this->load->model('Adminuser'); 
            $this->load->library("cart");
        }

 function index()
 {
        $data = array();
        // Retrieve cart data from the session
        $data['cartItems'] = $this->cart->contents();
        // Load the cart view
        $this->load->view('add_to_card', $data);
  }

  function insertCart(){
    //print_r($this->cart->contents());die;
       $data=array(
      'id'=>$_GET['id'],
      'name'=>$_GET['name'],
      'price'=>$_GET['price'],
      'qty'=>$_GET['qty'],
      'image' => $_GET['gallery_image']
       );
    if($this->cart->insert($data)){
      echo count($this->cart->contents());
     }
    else{
      echo "ProductnotAdded";
    }
  }
  
  function insertCarts(){
    //print_r($this->cart->contents());die;
       $data=array(
      'id'=>$_GET['id'],
      'name'=>$_GET['name'],
      'price'=>$_GET['price'],
      'qty'=>$_GET['qty'],
      'image' => $_GET['gallery_image'],
      'options' => array('Size' => $_GET['size'], 'Color' => $_GET['color'] )
      );
    
  //  print_r($data);


    if($this->cart->insert($data)){
      echo count($this->cart->contents());
    }
    else{
      echo "ProductnotAdded";
    }

  }

function wistlisttoinsertCart(){
     
    
    $id=$this->input->get('id');
    $this->Adminuser->delete_wishlist('tbl_wishlist',$id);
    
    
    $data=array(
      'id'=>$_GET['id'],
      'name'=>$_GET['name'],
      'price'=>$_GET['price'],
      'qty'=>$_GET['qty'],
      'image' => $_GET['gallery_image']
       
    );
    if($this->cart->insert($data)){
      echo count($this->cart->contents());
    }
    else{
      echo "ProductnotAdded";
    }
  }


 function load()
 {
  echo $this->view();
 }

 

 function clear()
 {
  $this->load->library("cart");
  $this->cart->destroy();
  echo $this->view();
 }

 function updateItemQty(){
        $update = 0;
        // Get cart item info
        $rowid = $this->input->get('rowid');
        $qty = $this->input->get('qty');
        // Update item in the cart
        if(!empty($rowid) && !empty($qty)){
            $data = array(
                'rowid' => $rowid,
                'qty'   => $qty
            );
            $update = $this->cart->update($data);
        }
        // Return response
        echo $update?'ok':'err';
    }
    
 
 function removeItem($rowid){
        // Remove item from cart
        $remove = $this->cart->remove($rowid);
        // Redirect to the cart page
        redirect(base_url());
        
  }
 
 }

