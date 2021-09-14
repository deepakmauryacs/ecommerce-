<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Brand  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }

      public function index()
      {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/add_brand');
        $this->load->view('Mydashboard/footer');         
      }
       
      
      public function all()
        {
        $data['brand']=$this->db->get_where('tbl_brand',['id >'=>0])->result();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_brand',$data);
        $this->load->view('Mydashboard/footer');         
       }
       
     public function changes_status(){
        $data=$this->Adminuser->change_brand_status();//die;
        if($data=="Disabled"){
          echo $fdata="You have Changed Status of offer.";
        }else{
          echo $fdata="Status not Changed. Try Aagain...";
        }
      }

      public function add_brand()
       {
         $formArray= array();
         if($_FILES['image']['name'])
         {
               $config = array(
                'upload_path'=>'uploads/brand',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $img=$this->upload->data();
            $formArray['image'] = $img['file_name'];
          }

         $formArray['brand_name']=$this->input->post('brand_name');
         $this->Adminuser->insert_Record('tbl_brand',$formArray);
         $this->session->set_flashdata('success', 'Brand Add Succcessfully.... !');
         redirect(base_url().'Admin/Brand');
        }

       public function edit_brand($id)
       {
        $sql="SELECT * FROM `tbl_brand` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_brand',$data);
        $this->load->view('Mydashboard/footer');

       }
       
       public function update_brand()
       {
        $id = $this->input->post('id');
        $updateArray = array();
        $image =$this->input->post('oldImage');
           if($_FILES['image']['name']){ 
              if(file_exists("uploads/brand/".$image)){
              unlink("uploads/brand/".$image);
                }
              $config = array(
                  'upload_path'=>'uploads/brand',
                  'allowed_types'=>'jpg|jpeg|gif|png',
                  );
              $this->load->library('upload',$config);
              $this->upload->do_upload('image');
              $img=$this->upload->data();
              $image = $img['file_name'];
            }

        $updateArray['image']= $image;
        $updateArray['brand_name']=$this->input->post('brand_name');
        // $updateArray['updated_at']=date('Y-m-d');
        $this->Adminuser->update_global_Record('tbl_brand',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Brand/all');
      }


        public function delete_brand($id)
        { 
         $this->Adminuser->delete_Record('tbl_brand',$id);
         $this->session->set_flashdata('delete','Your details has been deleted');
         redirect(base_url().'Admin/Brand/all');
        }
}
 ?>