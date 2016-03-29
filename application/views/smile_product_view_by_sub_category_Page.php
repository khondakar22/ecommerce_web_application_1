<div id="content_holder" class="fixed">
    <div class="inner">
      <div class="box">
       
        
      </div>
      <?php 
      if(array_key_exists("smile_sub_menubar_category_id", $select_sub_menu_element)){
      ?>
      
      <div class="product-filter">
        <a href="#" id="compare_total">Product</a> >> <?php echo $select_sub_menu_element->smile_sub_menubar_category_name;?>
        <div class="limit"><b>Show:</b>
          <select>
            <option value="" selected="selected">8</option>
            <option value="">25</option>
            <option value="">50</option>
            <option value="">75</option>
            <option value="">100</option>
          </select>
        </div>
        <div class="sort"><b>Sort By:</b>
          <select>
            <option value="" selected="selected">Default</option>
            <option value="">Name (A - Z)</option>
            <option value="">Name (Z - A)</option>
            <option value="">Price (Low &gt; High)</option>
            <option value="">Price (High &gt; Low)</option>
            <option value="">Rating (Highest)</option>
            <option value="">Rating (Lowest)</option>
            <option value="">Model (A - Z)</option>
            <option value="">Model (Z - A)</option>
          </select>
        </div>
      </div>
      
      <!-- LEFT COLUMN -->
      <div id="column-left">
        <div class="box">
          <h3 class="heading-title"><span>Product Category</span></h3>
          <div class="box-content box-category">
            <ul>
                <?php 
                      foreach ($all_sub_menu_category as $v_sub_cat){
                ?>
              <li><a href="<?php echo base_url();?>welcome/p_v_s_m/<?php echo $v_sub_cat->smile_sub_menubar_category_id;?>.html"><?php echo $v_sub_cat->smile_sub_menubar_category_name;?></a></li>
                <?php 
                      }
                ?>
            </ul>
          </div>
        </div>
       
      </div>
       <!--END OF LEFT COLUMN -->
      
      <div id="content" class="content-column-left">
        <div class="cat_list fixed">
         
            <ul id="latest"> 
                <?php 
                      foreach ($product_by_sub_menu as $v_product_sub){
                ?>
                <li>
          <div class="prod_hold"> <a class="wrap_link" href="<?php echo base_url();?>welcome/p_d_v/<?php echo $v_product_sub->smile_sub_menubar_category_id;?>/<?php echo $v_product_sub->smile_product_id;?>.html">
                  <span class="image"><img src="<?php echo base_url().$v_product_sub->smile_product_image;?>" alt="Spicylicious store" width="180" height="180" /></span>
            </a>
            <div class="pricetag_small"> <span class="price">BDT-<?php echo $v_product_sub->smile_product_price; ?></span> </div>
            <div class="info">
              <h3><?php echo $v_product_sub->smile_product_name; ?></h3>
              <p><a href="<?php echo base_url();?>welcome/p_d_v/<?php echo $v_product_sub->smile_sub_menubar_category_id;?>/<?php echo $v_product_sub->smile_product_id;?>.html">Click Here To Product Details</a></p>
              <form action="<?php echo base_url();?>cart/add_to_cart" method="post">
          
            <input type="hidden" value="1" size="2" name="qty" id="qty"/>
            <input type="hidden" value="<?php echo $v_product_sub->smile_product_id;?>" size="2" name="smile_product_id" id="qty"/>
             <?php 
            if($v_product_sub->smile_product_qunatity > 0){
            ?>
            <input type="submit" name="btn" title="Add to Cart" value="Add to Cart" id="btn9"/>   
            <?php }
            else {
            ?>
            <input type="submit" name="btn" disabled="disabled" value="Add to Cart" id="btn9"/>
            <?php }?>
         
          </form>
              
              
              
              
              <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
          </div>
                      <?php }?>
                    </li>
          </ul>
           
          <div class="clear"></div>
        </div>
           
        <div>
            
            
          <?php echo $pagination=NULL;?>
        </div>
          
      </div>
      
      <?php }
      else {
      ?>
      <h1> Your Content Does Not Exits in this page</h1>
      <?php }
      ?>
    </div>
  </div>