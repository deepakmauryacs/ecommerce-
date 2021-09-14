 <!-- Bread Crumb STRAT -->
  <div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Shop</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="<?php echo base_url();?>">Home</a>/</li>
            <li><span>Shop</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- Bread Crumb END -->  
  <!-- CONTAIN START -->
  <section class="ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-3 mb-sm-30 col-xl-20per">
          <div class="sidebar-block">
            <div class="sidebar-box listing-box mb-40 mb-xs-15"><span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Categories</h3>
              </div>
              <div class="sidebar-contant">
                <ul>
                 <?php $sr=1;
                  if(!empty($category)){
                  foreach ($category as $row)
                  {
                 ?>
                 <li><a href="#"><input type="checkbox" name="category_name" class="product_category common_selector" <?php echo isset($url_cat_id) && $url_cat_id==$row->id ? "checked" : ""; ?> value="<?php echo $row->id; ?>" id="category<?=$sr; ?>"> <?php echo $row->category_name; ?> </a></li>
                 <?php  $sr++;
                      }
                    }
                  ?>
                  <input type="hidden" id="category_count" value="<?=$sr;?>"/>
                </ul>
              </div>
            </div>
            <div class="sidebar-box mb-40 mb-xs-15"><span class="opener plus"></span>
              <div class="sidebar-title">
                <h3>Shop by</h3> 
              </div>
              <div class="sidebar-contant">
                  <!--<div class="list-group">
                     <h3>Price</h3>
                     <input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="65000" />
                    <p id="price_show">1000 - 65000</p>
                    <div id="price_range"></div>
                </div>--> 
               <div class="price-range mb-30">
                  <div class="inner-title">Price range</div>
                  <input class="price-txt" type="text" id="amount">
                  <div id="slider-range"></div>
                  <input type="hidden" id="min_price" value="1">
                  <input type="hidden" id="max_price" value="2000">
                </div>
               </div>
            </div>
          </div>
        </div>
        <div class="col-xl-10 col-lg-9 col-xl-80per"> 
          <div class="shorting mb-30">
            <div class="row">
              <div class="col-lg-6">
                <div class="view">
                  <div class="list-types grid active "><a href="javascript:void(0)">
                    <div class="grid-icon list-types-icon"></div>
                    </a> 
                  </div>
                </div>
                <div class="short-by float-right-sm"> <span>Sort By :</span>
                  <div class="select-item select-dropdown">
                      <select  name="speed" id="sort-price">
                        <option value="0" selected="selected">Sort By</option>
                        <option value="1">Name (A to Z)</option>
                        <option value="2">Name(Z - A)</option>
                      </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-listing">
            <div class="inner-listing">
                <input type="hidden" value="<?=isset($search_query)?$search_query:'' ?>" id="search_query_id">
               <div class="row" id="product_list">
               </div>
              <div class="row">
                <div class="col-12">
                  <div class="more-product-btn text-center" id="pagination_link">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 
