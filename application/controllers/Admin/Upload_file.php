<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Upload_file  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

      public function index()
      {
        $data['data']=$this->db->get_where('tbl_uploadfile',['id >'=> '0'])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/uploaded_files',$data);
        $this->load->view('Mydashboard/footer');         
      }
      
      public function upload()
      {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_file');
        $this->load->view('Mydashboard/footer');         
      }
      
       
       public function add_files()
       {
         $formArray= array();
         if($_FILES['image']['name'])
         {
               $config = array(
                'upload_path'=>'uploads/product',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $img=$this->upload->data();
            $formArray['image'] = $img['file_name'];
          }
         $this->resizeImage($img['file_name'],750,972);
         $this->Adminuser->insert_Record('tbl_uploadfile',$formArray);
         $this->session->set_flashdata('success', 'Category Add Succcessfully.... !');
         redirect(base_url().'Admin/Upload_file');
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
          
        public function delete_file($id)
        { 
         $this->Adminuser->delete_Record('tbl_uploadfile',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Upload_file');
        }
        
        
     
     
     

  

}
 ?>