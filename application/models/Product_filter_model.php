<?php

class Product_filter_model extends CI_Model
{
 function fetch_filter_type($type)
 {
  $this->db->distinct();
  $this->db->select($type);
  $this->db->from('tbl_product');
  $this->db->where('status', '1');
  return $this->db->get();
 }

 function make_query($minimum_price, $maximum_price, $size, $color, $category, $sort_product, $search_query)
 {
        $sql = "
        SELECT * FROM tbl_product 
        WHERE status = '1' 
        ";

       if(isset($minimum_price, $maximum_price) && !empty($minimum_price) && !empty($maximum_price))
       {
         $sql .= "
			 AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
			";
       }
     
      if(isset($size))
         {
          $size_filter = implode("','", $size);
          $sql .= " AND size IN('".$size_filter."') ";
         }
         if(isset($color))
         {
          $color_filter = implode("','", $color);
          $sql .= " AND color IN('".$color_filter."') ";
         }
         if(isset($category))
         {
          $category_filter = implode("','", $category);
          $sql .= " AND category IN('".$category_filter."') ";
         }
          if(isset($search_query)){
             $sql .= "AND product_name LIKE '%".$search_query."%' ";
         }
         if(isset($sort_product) && $sort_product>0 && $sort_product<3)
         {
             $sortby='';//asc, desc
             $sortwith='';//product_name, price
             switch ($sort_product) {
                case '1':
                    $sortby='ASC';
                    $sortwith='product_name';
                    break;
                case '2':
                    $sortby='DESC';
                    $sortwith='product_name';
                    break;
                default:
                    # code...
                    break;
            }
          $sql .= "  ORDER BY ".$sortwith." ".$sortby." ";
         }
        return $sql;
     }

function fetch_data($limit, $start, $minimum_price, $maximum_price, $size, $color, $category, $sort_product, $search_query)
 {
   $sql = $this->make_query($minimum_price, $maximum_price, $size, $color, $category, $sort_product, $search_query);

   $sql .= ' LIMIT '.$start.', ' . $limit; 
   $data = $this->db->query($sql);
   $output = '';
      if($data->num_rows() > 0)
      {
      if(isset($sort_product) && $sort_product>2 && $sort_product<5)
         {
             $sortby='';//asc, desc
             $sortwith='';//product_name, price
             switch ($sort_product)
             {
                case '3':
                    $sortby='ASC';
                    $sortwith='price';
                    break;
                case '4':
                    $sortby='DESC';
                    $sortwith='price';
                    break;
                
                default:
                    # code...
                    break;
            }
         }
   foreach($data->result_array() as $value)
      {         
             $userdata=$this->session->userdata('usersdata');
             $login_url= base_url()."Web/login";  
             $product_details_url=base_url()."Web/product_details/".$value['id'].'';
             $imageURL='';
             $new_sell_price='';
             if(!empty($value['gallery_image'])){
                 $imageURL=base_url()."uploads/product/".$value['gallery_image'].'';
             }else{
                 $imageURL=base_url()."/assetes/asetes/images/noproductimage.png";
             }
             if($value['discount_type']=='fix'){
                $price = $value['price'];
                $dis =   $value['discount'];
                $new_sell_price= $price - $dis;
             }else{
                   $price = $value['price'];
                   $per=$value['discount'];
                   $percentInDecimal = $per / 100;
                   $percent = $percentInDecimal * $price;
                   $new_sell_price= $price - $percent;
              }
             $output.='<div class="col-md-3 col-6 item-width mb-30">';
             $output.='<div class="product-item">';
             $output.='<div class="product-image"><a href="'.$product_details_url.'"> <img src="';
             $output.=''.$imageURL.'';
             $output.='" alt="Product"> </a>';
             $output.='<div class="product-detail-inner">';
             $output.='<div class="detail-inner-left align-center">';
             $output.='<ul>';
             $output.= '<li class="pro-cart-icon">';
             $output.='<button type="button" title="Add to Cart" onclick="addtocart';
             $output.="('".$value['id']."','".$value['product_name']."','".$new_sell_price."','1','".$value['gallery_image']."')";
             $output.='"><span></span>Add to Cart</button>';
             $output.='</li>';
             $output.='<li class="pro-wishlist-icon ">';
             if (!empty($userdata['username'])) {
             $output.='<a type="button" title="Wishlist" onclick="addtowishlist';
             $output.="('".$value['id']."','".$value['product_name']."','".$new_sell_price."','1','".$value['gallery_image']."')";
             $output.='" ></a>';
             }else{
              $output.='<a href="'.$login_url.'" title="Wishlist"></a>';    
             }
             $output.=' </li>';
             $output.='</ul>';
             $output.='</div>';
             $output.='</div>';
             $output.='</div>';
             $output.='<div class="product-item-details">';
             $output.='<div class="product-item-name"><a href="'.$product_details_url.'">'.$value['product_name'].'</a> </div>';
             $output.='<div class="price-box"><span class="price"> ₹ '.$new_sell_price.'<br>'.$value['weight'].'</span> ';
             if($new_sell_price!=$value['price']){
                 $output.='<del class="price old-price"> ₹ '.$value['price'].'</del>';
             }
             $output.='</div></div>';
             $output.='</div>';
             $output.='</div>';
         }
         }else{
             $output.='No Product Found...';
         }
  return $output;
 }


 function count_all($minimum_price, $maximum_price, $size, $color, $category, $sort_product, $search_query)
 {
  $sql = $this->make_query($minimum_price, $maximum_price, $size, $color, $category, $sort_product, $search_query);
  $data = $this->db->query($sql);
  return $data->num_rows();
 }
}
?>