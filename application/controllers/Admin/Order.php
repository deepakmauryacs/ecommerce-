<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Order  extends CI_Controller 
{  
    function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');

  }

    public function index()
     {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_order');
        $this->load->view('Mydashboard/footer');         
      }
      
      public function invoice($billing_id)
      { 
        $data['orders_item']=$this->db->get_where('tbl_order_items',['billing_id'=>$billing_id])->result_array();
        $data['orders']=$this->db->get_where('tbl_orders',['billing_id'=>$billing_id])->row_array();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/order_invoice',$data);
        $this->load->view('Mydashboard/footer');         
      }
      

       
    public function change_status()
	{
		$where['billing_id']=$this->input->post('billing_id');
		$data['status']=$this->input->post('status');
		$this->db->update('tbl_orders',$data,$where);
		$result['status']=1;
		$result['massage']='Status change successful';
		echo json_encode($result);
	}
      


    public function getOrderList()
      {
      $column = array('id',
      'billing_id',
      'username',
      'grand_total',
      'payment_type',
      'status'
      );
      $query = " SELECT * FROM tbl_orders ";
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

      if(isset($_POST["length"])&&$_POST["length"] != -1)
      {
       $query .= ' LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
      }

      $result =$this->db->query($query)->result();
      $data = array();
      $status=array('1'=>'Active','2'=>'Inactive');
      foreach($result as $key=> $product)
      {
       $sub_array = array();
       $sub_array[] = ++$key;
       $sub_array[] = '
       <div style="width: 111px;display: flex;">
        <a href="'.base_url().'Admin/Order/invoice/'.$product->billing_id.'" ">'.$product->billing_id.'</a>
        </div>';
       $sub_array[] = $product->username;
       $sub_array[] = $product->grand_total;
       $sub_array[] = $product->payment_type;
        $sub_array[] ='
               <div class="form-group">
                 <select class="form-control" name="select"  id="select_box" name="status" onchange="change_status(`'.$product->billing_id.'`,this.value);" >
                    <option '.($product->status===''?'selected':'').' value="">Select...</option>
                    <option '.($product->status==='1'?'selected':'').' value="1"> Pending </option>
                    <option '.($product->status==='2'?'selected':'').' value="2"> Confirmed </option>
                    <option '.($product->status==='3'?'selected':'').' value="3"> On delivery </option>
                    <option '.($product->status==='4'?'selected':'').' value="4"> Delivered </option>
                    <option '.($product->status==='5'?'selected':'').' value="5"> Cancel </option>
                  </select>
                </div>
       ';
       $data[] = $sub_array;
      }
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
        $query = " SELECT * FROM  tbl_orders";
        $query .=" WHERE id > 0 ";
        $row= $this->db->query($query);
        return $row->num_rows();
      }
 }
 ?>