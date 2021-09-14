<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Web  extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Adminuser');
            $this->load->model('product_filter_model');
            $this->load->helper('url');
            // $this->load->library('pagination');
            $this->load->library("cart");
        }

    public function index()
        {
      //  $data['footer']=$this->Adminuser ->select_Record('footer_section');
        $data = array();
        $data['cartItems'] = $this->cart->contents();
        $this->db->order_by("id", "desc");
        $this->db->limit(8);
        $data['newarrival']=$this->db->get_where('tbl_product',['status'=>'1'])->result();
        $data['product_data']=$this->db->get_where('tbl_product',['status'=>'1'])->row();
        $this->db->limit(10);
        $data['bestseller']=$this->db->get_where('tbl_product',['status'=>'1'])->result();
        $this->db->limit(10);
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $this->db->limit(10);
        $data['slider']=$this->db->get_where('tbl_slider',['status'=>'1'])->result();
        $data['image']=$this->db->get_where('tbl_advertisement',['status'=>'1'])->result();
        $data['footer']=$this->db->get_where('tbl_footer',['status'=>'1'])->result();
        $data['test']=$this->Adminuser ->select_Record('tbl_testomonial');
        $data['slide']=$this->db->get_where('tbl_slider_index',['status'=>'1'])->result();
        $this->load->view('index',$data);
        }

      public function signup()
        {

        $this->load->view('header');
        $this->load->view('user-register');
        $this->load->view('footer');
        }

       public function login()
        {
        $this->load->view('header');
        $this->load->view('user-login');
        $this->load->view('footer');
        }
        
        public function shipping_policy()
        {
        $data['shipping']=$this->Adminuser ->select_Record('tbl_shipping');
        $this->load->view('header');
        $this->load->view('shipping_policy',$data);
        $this->load->view('footer');
        }
        
        public function cancellation_policy()
        {
        $data['cancel']=$this->Adminuser ->select_Record('tbl_cancellation');
        $this->load->view('header');
        $this->load->view('cancellation_policy',$data);
        $this->load->view('footer');
        }
        
        public function return_policy()
        {
        $data['return']=$this->Adminuser ->select_Record('tbl_return');
        $this->load->view('header');
        $this->load->view('return',$data);
        $this->load->view('footer');
        }
        
         public function refund()
        {
        $data['refund']=$this->Adminuser ->select_Record('tbl_refund');
        $this->load->view('header');
        $this->load->view('refund',$data);
        $this->load->view('footer');
        }
        
        public function forget()
        {
        $data['data']=$this->Adminuser ->select_Record('tbl_user');
        $this->load->view('header');
        $this->load->view('forget',$data);
        $this->load->view('footer');
        }

       function update_status()
         {
          $id = $this->input->post('id');
          $data['status'] = $this->input->post('status'); 
          $this->Adminuser->update_global_Record('tbl_vendor',$id,$data);

         }

        public function shop_list()
        {
        $data = array();
        $data['cartItems'] = $this->cart->contents();
        $data['data']=$this->Adminuser ->select_Record('tbl_product');
        $this->load->view('header',$data);
        $this->load->view('shop',$data);
        $this->load->view('footer');
        }
        
         public function shop($catid=''){
             $data = array();
             $data['cartItems'] = $this->cart->contents();
             $search_query='';
             if(!empty($_POST) && $_POST['search_qry']!=''){
                $search_query=$_POST['search_qry'];
             }
             $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
             $this->db->limit(10);
             $data['color']=$this->db->get_where('tbl_color',['status'=>'1'])->result();
             $this->db->limit(7);
             $data['sizes']=$this->db->get_where('tbl_size',['status'=>'1'])->result();
             $data['cartItems'] = $this->cart->contents();
             $data['url_cat_id']=$catid;
             $data['search_query']=$search_query;
             $this->load->view('header',$data);
             $this->load->view('shop',$data);
             $this->load->view('footer');
        
         }
         
         
         function fetch_data()
           {
              sleep(2);
              $minimum_price = $this->input->post('minimum_price');
              $maximum_price = $this->input->post('maximum_price');
              $size = $this->input->post('size');
              $color = $this->input->post('color');
              $category = $this->input->post('category');
              $sort_product = $this->input->post('sort_product');
              $search_query = $this->input->post('search_query');
              
              $this->load->library('pagination');
              $config = array();
              $config['base_url'] = '#';
              $config['total_rows'] = $this->product_filter_model->count_all($minimum_price, $maximum_price, $size, $color, $category, $sort_product, $search_query);
              $config['per_page'] = 12;
              $config["uri_segment"] = 3;
              $config['use_page_numbers'] = TRUE;
              
             $config['full_tag_open'] = '<nav aria-label="Page navigation example" style="display: inline-block;"><ul class="pagination">';
             $config['full_tag_close'] = '</ul></nav>';
             $config['first_tag_open'] = '<li class="page-item page-link">';
             $config['first_tag_close'] = '</li>';
             $config['prev_link'] = '&laquo';
             $config['prev_tag_open'] = '<li class="prev page-item page-link">';
             $config['prev_tag_close'] = '</li>';
             $config['next_link'] = '&raquo';
             $config['next_tag_open'] = '<li class="page-item page-link">';
             $config['next_tag_close'] = '</li>';
             $config['last_tag_open'] = '<li class="page-item page-link">';
             $config['last_tag_close'] = '</li>';
             $config['cur_tag_open'] = '<li class="active page-item page-link">';
             $config['cur_tag_close'] = '</li>';
             $config['num_tag_open'] = '<li class="page-item page-link">';
             $config['num_tag_close'] = '</li>';
             
             $config['num_links'] = 3;
             $this->pagination->initialize($config);
             $page = $this->uri->segment(3);
             
             $start = ($page - 1) * $config['per_page'];

              $output = array(
               'product_list'   => $this->product_filter_model->fetch_data($config["per_page"],$start, $minimum_price, $maximum_price, $size, $color, $category, $sort_product, $search_query),
               'pagination_link'  => $this->pagination->create_links()
              );
              echo json_encode($output);
             }
                     
       
       public function product_details($id)
       {
        $data = array();
        $data['cartItems'] = $this->cart->contents();  
        $sql="SELECT * FROM `tbl_product` WHERE `status`=1";
        $data['product']=$this->db->query($sql)->result();
        $data['product_data']=$this->db->get_where('tbl_product',['id'=>$id])->row();
        $data['color']=$this->db->get_where('tbl_color',['id'=>$id])->row();
        $data['newarrival']=$this->db->get_where('tbl_product',['status'=>'1'])->result();
        $this->load->view('header',$data);
        $this->load->view('product_details',$data);
        $this->load->view('footer');
       }

      public function cart()
       {
        $data = array();
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $data['cartItems'] = $this->cart->contents(); 
        $this->load->view('header',$data);
        $this->load->view('cart',$data);
        $this->load->view('footer');
       }
       
      public function checkout()
       {
        $data = array();
        $data['country']=$this->db->get_where('tbl_countries',['status'=>'1'])->result();
        $data['state']=$this->db->get_where('tbl_states',['status'=>'1'])->result();
         $data['city']=$this->db->get_where('tbl_cities',['status'=>'1'])->result();
        $data['cartItems'] = $this->cart->contents(); 
        $datas=$this->session->userdata('usersdata');
        $id=$datas['id'];
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $data['address']=$this->db->get_where('tbl_address',['user_id'=>$id])->result();
        $this->load->view('header',$data);
        $this->load->view('checkout',$data);
        $this->load->view('footer');
       }
       
      public function order_overview()
       {
        $data = array();
        $data['cartItems'] = $this->cart->contents(); 
        $datas=$this->session->userdata('usersdata');
        $id=$datas['id'];
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $address=$this->db->get_where('tbl_odersadress',['user_id'=>$id])->row();
        $data['address']=$this->db->get_where('tbl_address',['id'=>$address->shipping_address])->row();
        $this->load->view('header',$data);
        $this->load->view('order_overview',$data);
        $this->load->view('footer');
       }
       
      public function payment()
       {
        $data = array();
        $data['cartItems'] = $this->cart->contents(); 
        $datas=$this->session->userdata('usersdata');
        $id=$datas['id'];
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $address=$this->db->get_where('tbl_odersadress',['user_id'=>$id])->row();
        $data['address']=$this->db->get_where('tbl_address',['id'=>$address->shipping_address])->row();
         $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $this->load->view('header',$data);
        $this->load->view('payment',$data);
        $this->load->view('footer');
       }
       
      public function invoice($billing_id)
       {
        $data = array();
        $data['cartItems'] = $this->cart->contents();
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $data['orders_item']=$this->db->get_where('tbl_order_items',['billing_id'=>$billing_id])->result_array();
        $data['orders']=$this->db->get_where('tbl_orders',['billing_id'=>$billing_id])->row_array();
        $this->load->view('invoice',$data);
       }
       
     public function edit_address($id)
       {
        $sql="SELECT * FROM `tbl_address` WHERE `id`= $id ";
        $data['edit_data']=$this->db->query($sql)->row();
        $data['info']=$this->Adminuser ->select_Record('tbl_address');
        $this->load->view('header');
        $this->load->view('edit_address',$data);
        $this->load->view('footer');
       }
       
       public function update_address()
       {
        $id = $this->input->post('id');
        $updateArray = array();
        $updateArray['name']=$this->input->post('name');
        $updateArray['number']=$this->input->post('number');
        $updateArray['email']=$this->input->post('email');
        $updateArray['pincode']=$this->input->post('pincode');
        $updateArray['locality']=$this->input->post('locality');
        $updateArray['address']=$this->input->post('address');
        $updateArray['country']=$this->input->post('country');
        $updateArray['state']=$this->input->post('state');
        $updateArray['city']=$this->input->post('city');
        $updateArray['landmark']=$this->input->post('landmark');
        $updateArray['alternate_contact']=$this->input->post('alternate_contact');
        $this->Adminuser->update_global_Record('tbl_address',$id,$updateArray);
        $this->session->set_flashdata('update','Your details has been updated');
        redirect(base_url().'Web/checkout');
           
       }

       public function about()
       {
        $data['cartItems'] = $this->cart->contents();
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $data['about']=$this->Adminuser ->select_Record('tbl_aboutsection');
        $data['test']=$this->Adminuser ->select_Record('tbl_testomonial');
        $this->load->view('header', $data);
        $this->load->view('about',$data);
        $this->load->view('footer');
       }
       
       public function privacy()
       {
         $data['cartItems'] = $this->cart->contents();
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $data['privacy']=$this->Adminuser ->select_Record('tbl_privacy');
        $this->load->view('header');
        $this->load->view('privacypolicy',$data);
        $this->load->view('footer');
       }
       
        public function offer()
       {
         $data['cartItems'] = $this->cart->contents();
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $data['offer']=$this->Adminuser ->select_Record('tbl_offer');
        $this->load->view('header');
        $this->load->view('offer',$data);
        $this->load->view('footer');
       }
       
       public function shop_by_category($catid='')
       {
         $search_query='';
       //print_r($_POST);die;
       if(!empty($_POST) && $_POST['search_qry']!=''){
        $search_query=$_POST['search_qry'];
         }
          $data['cartItems'] = $this->cart->contents();
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $this->db->limit(10);
        $data['color']=$this->db->get_where('tbl_color',['status'=>'1'])->result();
        $this->db->limit(7);
        $data['sizes']=$this->db->get_where('tbl_size',['status'=>'1'])->result();
        $data['cartItems'] = $this->cart->contents();
        $data['url_cat_id']=$catid;
        $data['search_query']=$search_query;
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $data['shop']=$this->Adminuser ->select_Record('tbl_category');
        $this->load->view('header',$data);
        $this->load->view('category',$data);
        $this->load->view('footer');
       }
       
       public function delivery_information()
       {
         $data['cartItems'] = $this->cart->contents();
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $data['delivery']=$this->Adminuser ->select_Record('tbl_delivery_info');
        $this->load->view('header');
        $this->load->view('delivery_info',$data);
        $this->load->view('footer');
       }
       
       public function term()
       {
         $data['cartItems'] = $this->cart->contents();
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $data['term']=$this->Adminuser ->select_Record('tbl_term');
        $this->load->view('header');
        $this->load->view('termcondition',$data);
        $this->load->view('footer');
       }

       public function blog()
       {
         $data['cartItems'] = $this->cart->contents();
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $data['blog']=$this->Adminuser ->select_Record('tbl_blog');  
        $this->load->view('header',$data);
        $this->load->view('blog',$data);
        $this->load->view('footer');
       }
       
        public function  blog_details($eid)
        {
           $data['cartItems'] = $this->cart->contents();  
            $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
            $data['data']=$this->db->get_where('tbl_blog',['id'=>$eid])->row();
            $this->load->view('header',$data);
            $this->load->view('blog_details',$data);
            $this->load->view('footer');

         }



       public function contact()
       {
          
        $data = array();
        
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result(); 
        $data['cartItems'] = $this->cart->contents();
        $this->load->view('header',$data);
        $this->load->view('contact',$data);
        $this->load->view('footer');
       }

       public function account()
       {
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();  
        $data = array();
        $data['cartItems'] = $this->cart->contents();
        $this->load->view('header');
        $this->load->view('account');
        $this->load->view('footer');
       }

       

      public function compare()
       {
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $this->load->view('header');
        $this->load->view('compare');
        $this->load->view('footer');
       }

       public function whislist()
       {
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $data = array();
        // Retrieve cart data from the session
        $data['cartItems'] = $this->cart->contents();
        $userdata=$this->session->userdata('usersdata');
        $id=$userdata['id'];
        $data['wishlist']=$this->db->get_where('tbl_wishlist',['user_id'=>$id])->result();
        $this->load->view('header',$data);
        $this->load->view('whislist',$data);
        $this->load->view('footer');
       }

       public function product()
       {
        $data['category']=$this->db->get_where('tbl_category',['status'=>'1'])->result();
        $this->load->view('header');
        $this->load->view('product');
        $this->load->view('footer');
       }
       public function orderComplete($billing_id)
       {
            $data['orders']=$this->db->get_where('tbl_orders',['billing_id'=>$billing_id])->row_array();
            $data['shipping_address']=$this->db->get_where('tbl_address', ['id'=>$data['orders']['shipping_address'] ])->row_array();
            $data['orders_item']=$this->db->get_where('tbl_order_items',['billing_id'=>$billing_id])->result_array();
            //
            $this->load->view('header', $data);
            $this->load->view('order_complete');
            $this->load->view('footer');
       }
}