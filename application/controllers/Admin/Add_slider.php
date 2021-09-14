<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */

class Add_slider  extends CI_Controller 
{  
     function __construct()
  {
    parent::__construct();
    $this->load->model('Adminuser');
  }
   
    public function index()
      {  
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/slider');
        $this->load->view('Mydashboard/footer');
      }



     public function viewall_slider()
      {
        $data['slider']=$this->Adminuser ->select_Record('tbl_slider');
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_slider',$data);
        $this->load->view('Mydashboard/footer');         
      }
     
    public function add_slider() 
    {  
        $formArray= array();
        if($_FILES['slider_1']['name'])
        {
            $config = array(
                'upload_path'=>'uploads/slider',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('slider_1');
            $img=$this->upload->data();
            $formArray['slider_1'] = $img['file_name'];
        }
         $formArray['slogan']=$this->input->post('slogan');
         $formArray['title']=$this->input->post('title');
         $formArray['offer']=$this->input->post('offer');
         $this->Adminuser->insert_Record('tbl_slider',$formArray);
         $this->session->set_flashdata('success', 'Slider  Add Succcessfully.... !');
         redirect(base_url().'Admin/Add_slider');
      }
      public function slider_index()
      {
          $this->load->view('Mydashboard/header');
          $this->load->view('Mydashboard/add_slider_index');
          $this->load->view('Mydashboard/footer');
          
      }
      
      public function index_slider()
      {
          $formArray=array();
          if($_FILES['slider_1']['name'])
          {
              $config = array(
                  'upload_path' => 'uploads/slider',
                  'allowed_types' =>'jpg|jpeg|gif|png',
                  );
                $this->load->library('upload',$config);
                $this->upload->do_upload('slider_1');
                $img= $this->upload->data();
                $formArray['slider_1'] = $img['file_name'];
          }
          if($_FILES['slider_2']['name'])
           {
              $config = array(
                  'upload_path' => 'uploads/slider',
                  'allowed_types' => 'jpg|jpeg|gif|png',
                  );
                 $this->load->library('upload',$config);
                 $this->upload->do_upload('slider_2');
                 $img = $this->upload->data();
                 $formArray['slider_2'] = $img['file_name'];
           }
          $this->Adminuser->insert_Record('tbl_slider_index',$formArray);
          $this->session->set_flashdata('success','Slider Index Added Successfull');
          redirect(base_url().'Admin/Add_slider/slider_index');
      }
      
      public function edit_index_slider($id)
       {
        $sql="SELECT * FROM `tbl_slider_index` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/slider_index',$data);
        $this->load->view('Mydashboard/footer');

       }
       
      public function update_index_slider()
         
        {
        $id = $this->input->post('id');
        $updateArray = array();
        $slider_1 =$this->input->post('oldImage');
        if($_FILES['slider_1']['name']){ 

          if(file_exists("uploads/slider".$slider_1)){
            }
          $config = array(
              'upload_path'=>'uploads/slider',
              'allowed_types'=>'jpg|jpeg|gif|png',
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('slider_1');
          $img=$this->upload->data();
          $slider_1 = $img['file_name'];
        }
         $slider_2 =$this->input->post('oldImage1');
        if($_FILES['slider_2']['name']){ 

          if(file_exists("uploads/slider".$slider_2)){
            }
          $config = array(
              'upload_path'=>'uploads/slider',
              'allowed_types'=>'jpg|jpeg|gif|png',
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('slider_2');
          $img=$this->upload->data();
          $slider_2 = $img['file_name'];
        }
        $updateArray['slider_1']= $slider_1;
        $updateArray['slider_2']= $slider_2;
        $this->Adminuser->update_global_Record('tbl_slider_index',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Add_slider/viewall_index_slider');
      }
      
      public function viewall_index_slider()
      {
       $data['index_slider']=$this->Adminuser->select_Record('tbl_slider_index');
       $this->load->view("Mydashboard/header");
       $this->load->view("Mydashboard/all_index_slider.php",$data);
       $this->load->view('Mydashboard/footer');
      }
      
       public function delete_index_slider($id)
     { 
        $this->Adminuser->delete_Record('tbl_slider_index',$id);
        $this->session->set_flashdata('delete','Your details has been deleted');
        redirect(base_url().'Admin/Add_slider/viewall_index_slider');
      }
      
      public function edit_slider($id)
       {
        $sql="SELECT * FROM `tbl_slider` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_slider',$data);
        $this->load->view('Mydashboard/footer');

       }

      public function update_slider()
         
        {
        $id = $this->input->post('id');
        $updateArray = array();
        $slider_1 =$this->input->post('oldImage');
        if($_FILES['slider_1']['name']){ 

          if(file_exists("uploads/slider".$slider_1)){
            }
          $config = array(
              'upload_path'=>'uploads/slider',
              'allowed_types'=>'jpg|jpeg|gif|png',
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('slider_1');
          $img=$this->upload->data();
          $slider_1 = $img['file_name'];
        }
        $updateArray['slider_1']= $slider_1;
        $updateArray['slogan']=$this->input->post('slogan');
        $updateArray['title']=$this->input->post('title');
        $updateArray['offer']=$this->input->post('offer');
        $this->Adminuser->update_global_Record('tbl_slider',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Add_slider/viewall_slider');
      }    

     public function delete_slider($id)
     { 
        $this->Adminuser->delete_Record('tbl_slider',$id);
        $this->session->set_flashdata('delete','Your details has been deleted');
        redirect(base_url().'Admin/Add_slider/viewall_slider');
      }

      public function view_test()
      {
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/testomonial');
        $this->load->view('Mydashboard/footer');         
      }
    
      public function add_testomonial() 
       {  
        $formArray= array();
        if($_FILES['image']['name'])
        {
            $config = array(
                'upload_path'=>'uploads/testomonial',
                'allowed_types'=>'jpg|jpeg|gif|png',
                );
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $img=$this->upload->data();
            $formArray['image'] = $img['file_name'];
        }

         $formArray['name']=$this->input->post('name');
         $formArray['description']=$this->input->post('description');
        $this->Adminuser->insert_Record('tbl_testomonial',$formArray);
        $this->session->set_flashdata('success', 'Testomonial  Add Succcessfully.... !');
        redirect(base_url().'Admin/Add_slider/view_test');
      }

      public function viewall_testomonial()
      {
        $data['slider']=$this->Adminuser ->select_Record('tbl_testomonial');
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_testomonial',$data);
        $this->load->view('Mydashboard/footer');         
       }

       public function edit_testomonial($id)
       {
        $sql="SELECT * FROM `tbl_testomonial` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/edit_testomonial',$data);
        $this->load->view('Mydashboard/footer');

        }

        public function update_testomonial()
         
       {
       $id = $this->input->post('id');
       $updateArray = array();
       $image =$this->input->post('oldImage');
       if($_FILES['image']['name']){ 

          if(file_exists("uploads/testomonial".$image)){
            }
          $config = array(
              'upload_path'=>'uploads/testomonial',
              'allowed_types'=>'jpg|jpeg|gif|png',
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('image');
          $img=$this->upload->data();
          $image = $img['file_name'];
       }
        $updateArray['image']= $image;
        $updateArray['name']=$this->input->post('name');
        $updateArray['description']=$this->input->post('description');
        $this->Adminuser->update_global_Record('tbl_testomonial',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Add_slider/viewall_testomonial');
      }    

      public function delete_testomonial($id)
      { 
        $this->Adminuser->delete_Record('tbl_testomonial',$id);
        $this->session->set_flashdata('delete','Your details has been deleted');
        redirect(base_url().'Admin/Add_slider/viewall_testomonial');
      }
    
    public function edit_advertisement()
       {
        $data['edit_data']=$this->db->get_where('tbl_advertisement',['id'=> 1])->row();
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/advertisement',$data);
        $this->load->view('Mydashboard/footer');

        }
      
      public function update_advertisement()
         
       {
       $id = $this->input->post('id');
       $updateArray = array();
       $image_1 =$this->input->post('oldImage');
       if($_FILES['image_1']['name']){ 

          if(file_exists("uploads/advertisement".$image_1)){
            }
          $config = array(
              'upload_path'=>'uploads/advertisement',
              'allowed_types'=>'jpg|jpeg|gif|png',
              );
          $this->load->library('upload',$config);
          $this->upload->do_upload('image_1');
          $img=$this->upload->data();
          $image_1 = $img['file_name'];
       }
        $updateArray['image_1']= $image_1;
        $updateArray['heading_1']=$this->input->post('heading_1');
        $updateArray['heading_2']=$this->input->post('heading_2');
        $this->Adminuser->update_global_Record('tbl_advertisement',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Admin/Add_slider/viewall_advertisement');
      }   

        public function viewall_advertisement()
      {
        $data['data']=$this->Adminuser ->select_Record('tbl_advertisement');
        $this->load->view('Mydashboard/header');
        $this->load->view('Mydashboard/all_advertisement',$data);
        $this->load->view('Mydashboard/footer');         
       }
       
          

}





