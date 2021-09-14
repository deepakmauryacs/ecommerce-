<?php
class Adminuser extends CI_model
{    
	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_count(){
        return $this->db->count_all("tbl_product");
     }

    public function get_product($limit, $start){
        $this->db->limit($limit, $start);
        $query = $this->db->get("tbl_product");
        return $query->result();
     }
     
    public function get_category_product($limit, $start) 
	{
        $this->db->limit($limit, $start);
        $query = $this->db->get("tbl_product");
        return $query->result();
    }
    
     function get_category(){
           $query = $this->db->get('tbl_category');
            return $query;  
    }
  
    function get_sub_category($id){
          $query = $this->db->get_where('tbl_subcategory', array('category_name' => $id));
          return $query;
       }
       
       
    public function islogin($data){  
    $query=$this->db->get_where('admin',array('username'=>$data['username'],'password'=>$data['password']));  
    return $query->num_rows();  
    }  

	 public function select_Record($table){
	    $this->db->select('*');
		$this->db->from($table);
	    $query= $this->db->get();
		return $query->result();
	 }
	
	 public function selectRecord($table, $con){
	 	$this->db->order_by("id", "desc");
	    return $this->db->get_where($table, $con)->result_array();
	 }
	 
	public function selectRecords($table, $con){
	 	$this->db->order_by("id", "desc");
	 	$this->db->limit(8);
	    return $this->db->get_where($table, $con)->result_array();
	 }


	 public function select_desc_Record($table){
	    $this->db->select('*');
		$this->db->from($table);
		$this->db->limit($end_limit,$start_limit);
		$this->db->order_by("id", "desc");
	    $query= $this->db->get();
		return $query->result();
	 }

	  public function select_desc_limit_Records($table,$con){
	   	$this->db->order_by("id","desc");
		return $this->db->get_where($table, $con)->result_array();
	 }



     public  function insert_Record($table,$formArray){
	  	return	$this->db->insert($table,$formArray);
	    }

	 public function update_Record($id,$updateArray)
	   {
		$this->db->where('id',$id);
		$this->db->update('banner',$updateArray);
	   }


    public function update_global_Record($table,$id,$updateArray)
      {
	$this->db->where('id',$id);
	$this->db->update($table,$updateArray);
      }

     public function delete_Record($table,$id)
        {
         $this->db->where('id', $id);
         $this->db->delete($table); 
        }
        
     public function delete_wishlist($table,$id)
        {
         $this->db->where('product_id', $id);
         $this->db->delete($table); 
        }
        
      public function delete_odersadress($table,$id)
        {
         $this->db->where('user_id', $id);
         $this->db->delete($table); 
        }

     public function find_row($table,$id)
         {
            return $this->db->get_where($table, array('id' => $id))->row_array();
         }
      
   //     public function update_course_status($id,$status){
			//   $data['status'] = $status;
			//   $this->db->where('id', $id);
			//   $this->db->update('status',$data);
			// }
     
    public function change_status(){
      $status='';
      if($this->db->get_where('tbl_offer', [ 'id'=>$_GET['id'] ])->row_array()['status']=="0"){
        $status='1';
      }else{
        $status='0';
      }
      //echo $status;die;
      $res=$this->db->update('tbl_offer', ['status'=>$status] ,[ 'id'=> $_GET['id']]);
      if($res){
        return "Disabled";
      }
    }  
    
    public function change_brand_status(){
      $status='';
      if($this->db->get_where('tbl_brand', [ 'id'=>$_GET['id'] ])->row_array()['status']=="2"){
        $status='1';
      }else{
        $status='2';
      }
      //echo $status;die;
      $res=$this->db->update('tbl_brand', ['status'=>$status] ,[ 'id'=> $_GET['id']]);
      if($res){
        return "Disabled";
      }
    }  
     
     public function change_color_status(){
      $status='';
      if($this->db->get_where('tbl_color', [ 'id'=>$_GET['id'] ])->row_array()['status']=="2"){
        $status='1';
      }else{
        $status='2';
      }
      //echo $status;die;
      $res=$this->db->update('tbl_color', ['status'=>$status] ,[ 'id'=> $_GET['id']]);
      if($res){
        return "Disabled";
      }
    }
    
    public function change_product_status(){
      $status='';
      if($this->db->get_where('tbl_product', [ 'id'=>$_GET['id'] ])->row_array()['status']=="2"){
        $status='1';
      }else{
        $status='2';
      }
      //echo $status;die;
      $res=$this->db->update('tbl_product', ['status'=>$status] ,[ 'id'=> $_GET['id']]);
      if($res){
        return "Disabled";
      }
    }
	
}
?>