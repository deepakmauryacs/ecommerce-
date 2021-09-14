<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Product  extends CI_Controller 
{  
    function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
    $this->load->model('csv_import_model');
    $this->load->library('csvimport');
    $this->load->library('image_lib');
  }
   public function index()
     {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/index');
        $this->load->view('Mydashboard/footer');         
      }
      
   function get_sub_category()
    {
        $id = $this->input->post('id',TRUE);
        $data = $this->Adminuser->get_sub_category($id)->result();
        echo json_encode($data);
    }
    
     public function allqrcode()
      {
        $data['data']=$this->Adminuser ->select_Record('tbl_qrcode');
   
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_qrcode',$data);
        $this->load->view('Mydashboard/footer');         
      }
      
     public function code()
      { 
        $sql="SELECT * FROM `tbl_product`";
        $data['data']=$this->db->query($sql)->result();
        // echo 'pre';
        // print_r($data);
        // $data['data']=$this->db->get_where('tbl_product')->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/qr',$data);
        $this->load->view('Mydashboard/footer');         
      }
    
      public function Qrcode($id)
      {
        $sql="SELECT * FROM `tbl_product` WHERE `id`= $id ";
        $data['qr_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/qrcode',$data);
        $this->load->view('Mydashboard/footer');         
      }
      
      
   
      public function add_qrcode()
      { 
      
        $formArray= array();
        if($_FILES['qr_code']['name'])
        {
               $config = array(
                'upload_path'=>'uploads/product',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('qr_code');
            $img=$this->upload->data();
            $formArray['qr_code'] = $img['file_name'];
         }
         
         $formArray['product_name']=$this->input->post('product_name');
         $formArray['product_id']=$this->input->post('product_id');
         $this->Adminuser->insert_Record('tbl_qrcode',$formArray);
         $this->session->set_flashdata('success', 'QR Code Add Succcessfully.... !');
         redirect(base_url().'Admin/Product/view_all_product');
         
      
      }
        
         public function delete_qrcode($id)
        { 
         $this->Adminuser->delete_Record('tbl_qrcode',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Product/allqrcode');
        }
    
    
     public function product_bulk_upload()
      {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/product_bulk_upload');
        $this->load->view('Mydashboard/footer');         
      }
      
      function import()
	  {
		$file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
		foreach($file_data as $row)
	   	{
				$data[] = array(
			    'product_unique_id' =>  $row["product_unique_id"],
			    'country_code'      =>  $row["country_code"],
			    'ean_code'          =>  $row["ean_code"],
				'vendor_id'	        =>	$row["vendor_id"],
        		'product_name'		=>	$row["product_name"],
        		'category'			=>	$row["category"],
        		'category_number'   =>  $row["category_number"],
        		'sub_category'   	=>	$row["sub_category"],
        		'sub_category_number' => $row["sub_category_number"],
        		'brand'		        =>	$row["brand"],
        		'batch_no'		    =>	$row["batch_no"],
        		'fssai_lic_no'      =>	$row["fssai_lic_no"],
        		'ingredients'	    =>	$row["ingredients"],
        		'manufacture_date'	=>	$row["manufacture_date"],
        		'expiry_date'       =>	$row["expiry_date"],
        		'weight'	   	    =>	$row["weight"],
        		'quantity'			=>	$row["quantity"],
        		'unit'	            =>	$row["unit"],
        		'min_qty'	    	=>	$row["min_qty"],
        		'tags'	            =>	$row["tags"],
        		'price'	            =>	$row["price"],
        		'discount_type'		=>	$row["discount_type"],
        		'discount'      	=>	$row["discount"],
        		'gallery_image'		=>	$row["gallery_image"],
        		'thumbnail_image'	=>	$row["thumbnail_image"],
        		'meta_title'		=>	$row["meta_title"],
        		'meta_keyword'		=>	$row["meta_keyword"],
        		'meta_description'	=>	$row["meta_description"],
        		'product_item_code' =>  $row["product_item_code"],
        		'description'		=>	$row["description"],
        		'today'	        	=>	$row["today"],
        		'status'		    =>	$row["status"],
			);
		   }
	    	$this->csv_import_model->insert($data);
	   // 	$str = $this->db->last_query();
	   // 	print_r($str);
 	  }
    
    
    
    
    
    
    public function all_vendor()
     {
        $data['user']=$this->Adminuser ->select_Record('tbl_vendor');
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_vendor',$data);
        $this->load->view('Mydashboard/footer');         
      }

      public function product()
      {
        $data['category'] = $this->Adminuser->get_category()->result();
        $data['brand']=$this->db->get_where('tbl_brand',['status'=> '1'])->result();
        $data['batch']=$this->db->get_where('tbl_batch_no',['status'=> '1'])->result();
        $data['weight']=$this->db->get_where('tbl_weight',['status'=> '1'])->result();
        $data['quantity']=$this->db->get_where('tbl_quantity',['status'=> '1'])->result();
        $data['unit']=$this->db->get_where('tbl_unit',['status'=> '1'])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_product',$data);
        $this->load->view('Mydashboard/footer');         
      }

      public function add_product()
       {
        $formArray= array();
        $img1=array();
        $img2=array();
        $img3=array();
        $img4=array();
        if($_FILES['gallery_image']['name'])
         {
            $config = array(
                'upload_path'=>'uploads/product',
                'allowed_types'=>'jpg|jpeg|gif|png'
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('gallery_image');
            $img=$this->upload->data();
            $formArray['gallery_image'] = $img['file_name'];
         }
        if($_FILES['thumbnail_image']['name'])
         {
            $config = array(
               'upload_path'=>'uploads/product',
               'allowed_types'=>'jpg|jpeg|gif|png'
            );
            $this->load->library('upload',$config);
            $this->upload->do_upload('thumbnail_image');
            $img1=$this->upload->data();
            $formArray['thumbnail_image'] = $img1['file_name'];
         }
         if($_FILES['thumbnail_image1']['name'])
         {
            $config = array(
               'upload_path'=>'uploads/product',
               'allowed_types'=>'jpg|jpeg|gif|png'
            );
            $this->load->library('upload',$config);
            $this->upload->do_upload('thumbnail_image1');
            $img2=$this->upload->data();
            $formArray['thumbnail_image1'] = $img2['file_name'];
         }
         if($_FILES['thumbnail_image2']['name'])
         {
            $config = array(
               'upload_path'=>'uploads/product',
               'allowed_types'=>'jpg|jpeg|gif|png'
            );
            $this->load->library('upload',$config);
            $this->upload->do_upload('thumbnail_image2');
            $img3=$this->upload->data();
            $formArray['thumbnail_image2'] = $img3['file_name'];
         }
         if($_FILES['thumbnail_image3']['name'])
         {
            $config = array(
               'upload_path'=>'uploads/product',
               'allowed_types'=>'jpg|jpeg|gif|png'
            );
            $this->load->library('upload',$config);
            $this->upload->do_upload('thumbnail_image3');
            $img4=$this->upload->data();
            $formArray['thumbnail_image3'] = $img4['file_name'];
         }
         $this->resizeImage($img1['file_name'],750,972);
         $formArray['vendor_id']=$this->input->post('vendor_id');
         $formArray['product_name']=$this->input->post('product_name');
         $formArray['category']=$this->input->post('category');
         $formArray['sub_category']=$this->input->post('sub_category');
         $formArray['brand']=$this->input->post('brand');
         $formArray['batch_no']=$this->input->post('batch_no');
         $formArray['fssai_lic_no']=$this->input->post('fssai_lic_no');
         $formArray['ingredients']=$this->input->post('ingredients');
         $formArray['manufacture_date']=$this->input->post('manufacture_date');
         $formArray['expiry_date']=$this->input->post('expiry_date');
         $formArray['weight']=$this->input->post('weight');
         $formArray['quantity']=$this->input->post('quantity');
         $formArray['unit']=$this->input->post('unit');
         $formArray['min_qty']=$this->input->post('min_qty');
         $formArray['tags']=$this->input->post('tags');
         $formArray['discount_type']=$this->input->post('discount_type');
         $formArray['discount']=$this->input->post('discount');
         $formArray['price']=$this->input->post('price');
         $formArray['barcode']=$this->input->post('barcode');
         $formArray['meta_title']=$this->input->post('meta_title');
         $formArray['meta_keyword']=$this->input->post('meta_keyword');
         $formArray['meta_description']=$this->input->post('meta_description');
         $formArray['description']=$this->input->post('description');
         $this->Adminuser->insert_Record('tbl_product',$formArray);
         $this->session->set_flashdata('success', 'Product Added Succcessfully.... !');
         redirect(base_url().'Admin/Product/product');
       }
      
      
    public function resizeImage($filename,$width,$height)
     {
      $source_path = FCPATH . 'uploads/product/' . $filename;
      $target_path = FCPATH . 'uploads/product/'.$width.'x'.$height.'/';
      if (!file_exists($target_path)) {
      mkdir($target_path, 0777, true);
     }
      
     $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'width' =>290,
          'height' => 350
      );
      $this->load->library('image_lib', $config_manip);
      if (!$this->image_lib->resize()) {
      echo $this->image_lib->display_errors();
      }
      $this->image_lib->clear();
     }

      
     public function edit_product($id)
      {
        $sql="SELECT * FROM `tbl_product` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $data['category'] = $this->db->get_where('tbl_category',['status'=> '1'])->result();
        $data['brand']=$this->db->get_where('tbl_brand',['status'=> '1'])->result();
        $data['color']=$this->db->get_where('tbl_color',['status'=> '1'])->result();
        $data['size']=$this->db->get_where('tbl_size',['status'=> '1'])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_product',$data);
        $this->load->view('Mydashboard/footer');
      }

      public function update_product()
       {
        $id = $this->input->post('id');
        $updateArray = array();
        $img1=array();
        $gallery_image =$this->input->post('oldImage');
        if($_FILES['gallery_image']['name']){
          if(file_exists("uploads/product".$gallery_image)){
            }
          $config = array(
              'upload_path'=>'uploads/product',
              'allowed_types'=>'jpg|jpeg|gif|png'
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('gallery_image');
          $img1=$this->upload->data();
          $gallery_image = $img1['file_name'];
        }

        $thumbnail_image =$this->input->post('oldImage1');
        if($_FILES['thumbnail_image']['name']){ 

        if(file_exists("uploads/product".$thumbnail_image)){
            }
        $config = array(
              'upload_path'=>'uploads/product',
              'allowed_types'=>'jpg|jpeg|gif|png'
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('thumbnail_image');
          $img1=$this->upload->data();
          $thumbnail_image = $img1['file_name'];
        }
        
        $thumbnail_image1=$this->input->post('oldImage2');
        if($_FILES['thumbnail_image1']['name']){
        if(file_exists("uploads/product".$thumbnail_image1)){
           
        }
        $config = array(
            'upload_path'=>'uploads/product',
            'allowed_types'=>'jpg|jpeg|gif|png'
            );
         $this->load->library('upload',$config);
         $this->upload->do_upload('thumbnail_image1');
         $img1=$this->upload->data();
         $thumbnail_image = $img1['file_name'];
        }
        
        $thumbnail_image2=$this->input->post('oldImage3');
        if($_FILES['thumbnail_image2']['name']){
        if(file_exists("uploads/product".$thumbnail_image2)){
        }
        $config=array(
            'upload_path'=>'uploads/product',
            'allowed_types'=>'jpg|jpeg|gif|png'
            );
        $this->load->library('upload',$config);
        $this->upload->do_upload('thumbnail_image2');
        $img1=$this->upload->data();
        $thumbnail_image2 = $img1['file_name'];
        }
        
        $thumbnail_image3=$this->input->post('oldImage4');
        if($_FILES['thumbnail_image3']['name']){
            
        if(file_exists("upload/product".$thumbnail_image3)){
        }
        $config=array(
            'upload_path'=>'uploads/product',
            'allowed_type'=>'jpg|jpeg|gif|png'
            );
        $this->load->library('upload',$config);
        $this->upload->do_upload('thumbnail_image3');
        $img1=$this->upload->data();
        $thumbnail_image3= $img1['file_name'];
        }
        $updateArray['gallery_image']= $gallery_image;
        $updateArray['thumbnail_image']= $thumbnail_image;
        $updateArray['thumbnail_image1']=$thumbnail_image1;
        $updateArray['thumbnail_image2']=$thumbnail_image2;
        $updateArray['thumbnail_image3']=$thumbnail_image3;
        $updateArray['product_name']=$this->input->post('product_name');
        $updateArray['category']=$this->input->post('category');
        $updateArray['sub_category']=$this->input->post('sub_category');
        $updateArray['brand']=$this->input->post('brand');
        $updateArray['unit']=$this->input->post('unit');
        $updateArray['min_qty']=$this->input->post('min_qty');
        $updateArray['tags']=$this->input->post('tags');
        $updateArray['discount_type']=$this->input->post('discount_type');
        $updateArray['discount']=$this->input->post('discount');
        $updateArray['price']=$this->input->post('price');
        $updateArray['barcode']=$this->input->post('barcode');
        $updateArray['meta_title']=$this->input->post('meta_title');
        $updateArray['meta_keyword']=$this->input->post('meta_keyword');
        $updateArray['meta_description']=$this->input->post('meta_description');
        $updateArray['description']=$this->input->post('description');
        // $updateArray['updated_at']=date('Y-m-d');
        $this->Adminuser->update_global_Record('tbl_product',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Product/view_all_product');
      }

      public function view_all_product()
       {
        $data['product']=$this->Adminuser->select_Record('tbl_product');
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_product',$data);
        $this->load->view('Mydashboard/footer');         
       }

       public function delete_product($id)
       { 
         $this->Adminuser->delete_Record('tbl_product',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Product/view_all_product');
       }

     public function delete_vendor($id)
     { 
         $this->Adminuser->delete_Record('tbl_vendor',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Registration/all_vendor');
      }
     
      public function vendor_details($vid)
      {  

        $data['data']=$this->db->get_where('tbl_vendor',['id'=>$vid])->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/view_vendor_detail',$data);
        $this->load->view('Mydashboard/footer');
       }

       public function product_details($vid)
       {
        $data['data']=$this->db->get_where('tbl_product',['id'=>$vid])->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/product_view',$data);
        $this->load->view('Mydashboard/footer');         
       }
        
      public function product_category()
       {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_category');
        $this->load->view('Mydashboard/footer');         
       }
       
       public function add_category()
      {
         $formArray= array();
         if($_FILES['banner']['name'])
         {
               $config = array(
                'upload_path'=>'uploads/category/',
                'allowed_types'=>'jpg|jpeg|gif|png',
                'max_width'=>'210',
                'max_height'=>'272',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('banner');
            $img=$this->upload->data();
            $formArray['banner'] = $img['file_name'];
          }

         if($_FILES['icon']['name'])
          {
               $config = array(
                'upload_path'=>'uploads/category',
                'allowed_types'=>'jpg|jpeg|gif|png',
                'max_width'=>'263',
                'max_height'=>'350',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('icon');
            $img=$this->upload->data();
            $formArray['icon'] = $img['file_name'];
         }
         $formArray['category_name']=$this->input->post('category_name');
         $formArray['parent_category']=$this->input->post('parent_category');
         $formArray['type']=$this->input->post('type');
         $formArray['meta_title']=$this->input->post('meta_title');
         $formArray['meta_description']=$this->input->post('meta_description');
         $formArray['commision_rate']=$this->input->post('commision_rate');
        $this->Adminuser->insert_Record('tbl_category',$formArray);
        $this->session->set_flashdata('success', 'Category Add Succcessfully.... !');
        redirect(base_url().'Admin/Product/product_category');
        }

       public function edit_category($id)
       {
        $sql="SELECT * FROM `tbl_category` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_category',$data);
        $this->load->view('Mydashboard/footer');
       }
       
       public function update_category()
        {
        $id = $this->input->post('id');
        $updateArray = array();
        $gallery_image =$this->input->post('oldImage');
       if($_FILES['banner']['name']){ 
          if(file_exists("uploads/category".$banner)){
            }
          $config = array(
              'upload_path'=>'uploads/category',
              'allowed_types'=>'jpg|jpeg|gif|png',
              'max_width'=>'210',
              'max_height'=>'272',
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('banner');
          $img=$this->upload->data();
          $banner = $img['file_name'];
         }

        $icon =$this->input->post('oldImage');
       if($_FILES['icon']['name']){ 

          if(file_exists("uploads/category".$icon)){
            }
          $config = array(
              'upload_path'=>'uploads/category',
              'allowed_types'=>'jpg|jpeg|gif|png',
              'max_width'=>'263',
              'max_height'=>'350',
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('icon');
          $img=$this->upload->data();
          $icon = $img['file_name'];
        }
        $updateArray['banner']= $banner;
        $updateArray['icon']= $icon;
        $updateArray['category_name']=$this->input->post('category_name');
        $updateArray['parent_category']=$this->input->post('parent_category');
        $updateArray['type']=$this->input->post('type');
        $updateArray['meta_title']=$this->input->post('meta_title');
        $updateArray['meta_description']=$this->input->post('meta_description');
        $updateArray['commision_rate']=$this->input->post('commision_rate');
        $updateArray['updated_at']=date('Y-m-d');
        $this->Adminuser->update_global_Record('tbl_category',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Product/all_category');
        }

      public function product_subcategory()
        {
         $data['service']=$this->Adminuser ->select_Record('tbl_category');
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_subcategory',$data);
        $this->load->view('Mydashboard/footer');         
        }

      public function add_subcategory()
        {
        $this->form_validation->set_rules('subcategory_name','Subcategory_name','required');
        if ($this->form_validation->run() == FALSE) {
        $this->session->set_flashdata('error', 'Something went Wroung !');
        $data['category_name']=$this->Adminuser->select_Record('tbl_category');
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/product_subcategory',$data);
        $this->load->view('Mydashboard/footer');
         }else{
         $formArray= array();
         if($_FILES['banner']['name'])
         {
               $config = array(
                'upload_path'=>'uploads/subcategory',
                'allowed_types'=>'jpg|jpeg|gif|png',
                'max_width'=>'210',
                'max_height'=>'272',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('banner');
            $img=$this->upload->data();
            $formArray['banner'] = $img['file_name'];
           }

         if($_FILES['icon']['name'])
          {
               $config = array(
                'upload_path'=>'uploads/subcategory',
                'allowed_types'=>'jpg|jpeg|gif|png',
                'max_width'=>'263',
                'max_height'=>'350',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('icon');
            $img=$this->upload->data();
            $formArray['icon'] = $img['file_name'];
          }
         $formArray['category_name']=$this->input->post('category_name');
         $formArray['subcategory_name']=$this->input->post('subcategory_name');
         $formArray['type']=$this->input->post('type');
         $formArray['meta_title']=$this->input->post('meta_title');
         $formArray['meta_description']=$this->input->post('meta_description');
         $formArray['commision_rate']=$this->input->post('commision_rate');
         $this->Adminuser->insert_Record('tbl_subcategory',$formArray);
         $this->session->set_flashdata('success', 'Sub-Category Product  Add Succcessfully.... !');
         redirect(base_url().'Admin/Product/product_subcategory');
          }
          }

      public function edit_subcategory($id)
      {
        $sql="SELECT * FROM `tbl_subcategory` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_subcategory',$data);
        $this->load->view('Mydashboard/footer');
   
      }
  
       public function update_subcategory()
       {
        $id = $this->input->post('id');
        $updateArray = array();
        $gallery_image =$this->input->post('oldImage');
       if($_FILES['banner']['name']){ 

          if(file_exists("uploads/subcategory".$banner)){
            }
          $config = array(
              'upload_path'=>'uploads/subcategory',
              'allowed_types'=>'jpg|jpeg|gif|png',
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('banner');
          $img=$this->upload->data();
          $banner = $img['file_name'];
        }

        $icon =$this->input->post('oldImage');
        if($_FILES['icon']['name']){ 

          if(file_exists("uploads/subcategory".$icon)){
            }
          $config = array(
              'upload_path'=>'uploads/subcategory',
              'allowed_types'=>'jpg|jpeg|gif|png',
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('icon');
          $img=$this->upload->data();
          $icon = $img['file_name'];
        }
        $updateArray['banner']= $banner;
        $updateArray['icon']= $icon;
        $updateArray['category_name']=$this->input->post('category_name');
        $updateArray['subcategory_name']=$this->input->post('subcategory_name');
        $updateArray['type']=$this->input->post('type');
        $updateArray['meta_title']=$this->input->post('meta_title');
        $updateArray['meta_description']=$this->input->post('meta_description');
        $updateArray['commision_rate']=$this->input->post('commision_rate');
        $updateArray['updated_at']=date('Y-m-d');
        $this->Adminuser->update_global_Record('tbl_subcategory',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Product/all_subcategory');
        }

      public function all_subcategory()
        {
        $data['data']=$this->db->get_where('tbl_subcategory',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_subcategory',$data);
        $this->load->view('Mydashboard/footer');         
        }

      public function delete_subcategory($id)
        { 
         $this->Adminuser->delete_Record('tbl_subcategory',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Product/all_subcategory');
        }
      public function all_category()
        {
        $data['data']=$this->db->get_where('tbl_category',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_category',$data);
        $this->load->view('Mydashboard/footer');         
       }

     function update_status()
      {
      $id = $this->input->post('id');
      $data['status'] = $this->input->post('status'); 
      $this->Adminuser->update_global_Record('tbl_product',$id,$data);

      }
      
      public function change_status()
	  {
		$where['id']=$this->input->post('id');
		$data['status']=$this->input->post('status');
		$this->db->update('tbl_orders',$data,$where);
		$result['status']=1;
		$result['massage']='Status change successful';
		echo json_encode($result);
	  }
	  
	  public function changes_status(){
        $data=$this->Adminuser->change_product_status();//die;
        if($data=="Disabled"){
          echo $fdata="You have Changed Status of offer.";
        }else{
          echo $fdata="Status not Changed. Try Aagain...";
        }
      }

      public function getProductList()
      {
      $column = array('id',
      'thumbnail_image',
      'product_name',
      'category',
      'brand',
      'unit',
      'min_qty',
      'tags',
      'price',
      'discount_type',
      'discount',
      'barcode',
      'gallery_image',
      'meta_title',
      'meta_keyword',
      'meta_description',
      'description',
      'today',   
      'sub_category', 
      'status',
      'vendor_id'
      );
      $query = " SELECT * FROM tbl_product ";
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
      $qr='';
      foreach($result as $key=> $product)
      {
       $desc=$product->description;
       $des=str_replace(" ","_",$desc);
       $qr="Product Name : ".$product->product_name."/ Product Category : ".$product->category."/ Product No. : ".$product->fssai_lic_no."/ Product Manufacture Date :".$product->manufacture_date."/ Product Expiry Date :".$product->expiry_date."/ Product Subcategory :".$product->sub_category."/ Product Brand :".$product->brand."/ Product Batch No. :".$product->batch_no."/ Product Ingredients :".$product->ingredients."/ Product Weight :".$product->weight."/ Product Quantity :".$product->quantity."/  Product Unit :".$product->unit."/ Product Min Qty :".$product->min_qty."/ Product Tags :".$product->tags."/ Product Price :".$product->price."/ Product Discount Type :".$product->discount_type."<br>Product Discount :".$product->discount;
       $sub_array = array();
       $sub_array[] = ++$key;
       
       if(!empty($product->gallery_image)){
       $sub_array[] = '<img src="'.base_url().'uploads/product/'.$product->gallery_image.'" style="width: 50px;height: 50px;">';
       }else{
       $sub_array[] = '<img src="'.base_url().'assetes/asetes/images/noimage.png" style="width: 50px;height: 50px;">';    
       }
      
       $sub_array[] = $product->product_name;
       $sub_array[] = $product->category;
       $sub_array[] = $product->brand;
       $sub_array[] = $product->unit;
       $sub_array[] = '<img src="https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl='.$qr.'" style="height: 50px; width: 50px;">';
       $sub_array[] = '
       <label class="switch">
          <input type="checkbox" checked>
          <span class="slider round"></span>
        </label>';
       $sub_array[] ='
       <label class="switch">
          <input type="checkbox" >
          <span class="slider round"></span>
        </label>';
        
        $sub_array[] = '
       <div style="width: 111px;display: flex;">
        <a href="'.base_url().'Admin/Product/Qrcode/'.$product->id.'" class="btn btn-success" style="color: white;">Add QR Code</a>
        </div>';
       $sub_array[] = '
       <div style="width: 111px;display: flex;">
        <a href="'.base_url().'Admin/Product/product_details/'.$product->id.'" class="btn btn-success" style="color: white;"><i class="fa fa-eye"></i></a>
        <a href="'.base_url().'Admin/Product/edit_product/'.$product->id.'" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
        <a href="'.base_url().'Admin/Product/delete_product/'.$product->id.'"  class="btn btn-danger"  onclick="return confirm(`Are you sure to Delete ?`)"> <i class="fa fa-trash"></i></a>
        </div>';
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
        $query = " SELECT * FROM  tbl_product";
        $query .=" WHERE id > 0 ";
        $row= $this->db->query($query);
        return $row->num_rows();
      }

}
 ?>