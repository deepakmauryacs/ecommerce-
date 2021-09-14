<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Customers  extends CI_Controller 
{  
    function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');

  }

    public function index()
     {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/customers_list');
        $this->load->view('Mydashboard/footer');         
      }
      


    public function getCustomersList()
      {
      $column = array('id',
      'username',
      'email',
      'contact',
      'status'
      );
      $query = " SELECT * FROM tbl_user ";
      $query .=" WHERE id > 0 ";

      if(isset($_POST['order']))
      {
       $query .= ' ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
      }   
      else
      {
       $query .= ' ORDER BY id DESC ';
      }
      $number_filter_row= $this->db->query($query)->num_rows();
     // $query = '';

      if(isset($_POST["length"])&&$_POST["length"] != -1)
      {
       $query .= ' LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
      }

      $result =$this->db->query($query)->result();
      $data = array();
      $status=array('1'=>'Active','2'=>'Inactive');
      
     
      foreach($result as $key=> $user)
      {

       $sub_array = array();
       $sub_array[] = ++$key;
    
      
      // $sub_array[] = $product->billing_id;
     
        
       $sub_array[] = $user->username;
       $sub_array[] = $user->email;
       $sub_array[] = $user->contact;
     //  $sub_array[] = $user->status;
       $sub_array[] ='
               <div class="form-group">
                  <select class="form-control">
                    <option> Active </option>
                    <option> Inactice </option>
                    <option> Block </option>
                  </select>
                </div>
       ';
     
       
       $data[] = $sub_array;
      }
     //  print_r($data);
     $draw=!empty($_POST["draw"])?$_POST["draw"]:1;
      $output = array(
       "draw"       =>  intval($draw),
       "recordsTotal"   =>  $this->count_all_data(),
       "recordsFiltered"  =>  $number_filter_row,
       "data"       =>  $data
      );
      echo json_encode($output);
   }

    public function count_all_data()
      {
        $query = " SELECT * FROM  tbl_user";
        $query .=" WHERE id > 0 ";
        $row= $this->db->query($query);
        return $row->num_rows();
      }

}
 ?>