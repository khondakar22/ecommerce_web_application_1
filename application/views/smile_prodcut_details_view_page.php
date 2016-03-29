<br>
<br>
<div id="content_holder" class="fixed">
   <?php 
      if(array_key_exists("smile_product_id", $product_info)){
      ?>
    
    <div class="inner">
        <div class="breadcrumb"> <a href="<?php echo base_url();?>">Home</a> » <?php echo $product_info->smile_menubar_category_name;?> » <?php echo $product_info->smile_sub_menubar_category_name;?> </div>
      <h2 class="heading-title"><span><?php echo $product_info->smile_product_name; ?></span></h2>
      
      <!-- PRODUCT INFO -->
      
      <div class="product-info fixed">
        <div class="left">
            
            
            
            
            <div class="image"> <a href="<?php echo $product_info->smile_product_id; ?>" class="cloud-zoom" id="zoom1"> <img src="<?php echo base_url().$product_info->smile_product_image;?>" height="402" width="402" alt='Smile Mobil' title="<?php echo $product_info->smile_product_name; ?>" /></a> <span class="pricetag">BDT-<?php echo $product_info->smile_product_price; ?></span> </div>
       
            
            
            
            
            
        </div>
        <div class="right">
          <div class="description"> <span>Model Name:</span> <a href="#"><?php echo $product_info->smile_product_model_name;?></a><br/>
            <span>Product Store Date:</span> <?php echo $product_info->smile_product_publication_date;?><br/>
            
            <span>Availability:</span>  
                <?php 
                if($product_info->smile_product_qunatity > 0){
                
                echo 'In Stock';}
                
                else {
                    echo 'Out Of Stock';
                }
            ?>
          </div>
            
            <div class="options">
            <div class="box">
          <h2><span>Description</span></h2>
          <div class="box-content">
            <p><?php echo $product_info->smile_product_description;?></p>
          </div>
        </div>
          </div>
            <form action="<?php echo base_url();?>cart/add_to_cart" method="post">
          <div class="cart"> <span class="label">Qty:</span>
            <input type="text" value="1" size="2" name="qty" id="qty"/>
            <input type="hidden" value="<?php echo $product_info->smile_product_id;?>" size="2" name="smile_product_id" id="qty"/>
             <?php 
            if($product_info->smile_product_qunatity > 0){
            ?>
            <input type="submit" name="btn" title="Add to Cart" value="Add to Cart" id="btn7"/>   
            <?php }
            else {
            ?>
            <input type="submit" name="btn" disabled="disabled" value="Add to Cart" id="btn7"/>
            <?php }?>
          </div>
          </form>
            <div class="tags"> <span class="label">Tags:</span> <a href="#">Classic</a> <a href="#">Touch</a> <a href="#">Android </a> <a href="#">Smart Phone</a> <a href="#">Tablet</a> <a href="#">WVGA</a> </div>
        </div>
        <div class="clear"></div>
      </div>
      <?php 
      }
      else{
      ?>
      <h1> You are looking for a content which is not in this Website</h1>
      <?php }?>
      
      <!-- END OF PRODUCT INFO -->
      
      
      
      <div class="box">
          <h2 class="heading-title"><span>Related Products</span></h2>
          <div class="box-content">
            <div class="box-product fixed">
                <ul id="latest">
                    <?php foreach ($product_by_sub_menu as $v_related_product){ ?>
                    <li>
                <div class="prod_hold"> <a class="wrap_link" href="<?php echo base_url();?>welcome/p_d_v/<?php echo $v_related_product->smile_sub_menubar_category_id;?>/<?php echo $v_related_product->smile_product_id;?>.html">
                        <span class="image"><img src="<?php echo base_url().$v_related_product->smile_product_image;?>" height="180" width="180" alt="Smile Mobile" /></span>
                </a>
                <div class="pricetag_small"> <span class="price">BDT-<?php echo $v_related_product->smile_product_price; ?></span> </div>
                <div class="info">
                  <h3><?php echo $v_related_product->smile_product_name;?></h3>
                  <p><a href="<?php echo base_url();?>welcome/p_d_v/<?php echo $v_related_product->smile_sub_menubar_category_id;?>/<?php echo $v_related_product->smile_product_id;?>.html">Click Here To Product Details </a></p>
                  
           <form action="<?php echo base_url();?>cart/add_to_cart" method="post">
          
            <input type="hidden" value="1" size="2" name="qty" id="qty"/>
            <input type="hidden" value="<?php echo $v_related_product->smile_product_id;?>" size="2" name="smile_product_id" id="qty"/>
             <?php 
            if($v_related_product->smile_product_qunatity > 0){
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
            </div>
            <div class="clear"></div>
          </div>
        </div>
      
      
      
      
      
      
      
      
      
     
      
      <?php 
      if(array_key_exists("smile_product_id", $product_info)){
      ?>
      <div id="content">
        
       
        
          
          <div class="box">
          <h2 class="heading-title"><span>Comments</span></h2>
          <div class="box-content box-rating"> <a> <span class="button_review">View Comments</span></a> <br> <br>
                <?php
                                                                  foreach ($comment_info as $v_comments){
                ?>  
            <div class="box-comments">
              <div class="content"> 
                
                 <span> <?php echo $v_comments->smile_comment_user_name;?> | <?php echo $v_comments->smile_comment_publication_date;?></span> 
                 
                   
                  <?php if($v_comments->smile_comment_product_rating_status==1)
                 {
                     ?>
                 <span> 
                 <?php 
                 echo 'Low';}
               
                 elseif ($v_comments->smile_comment_product_rating_status==2) {
                 
                     ?>
                 </span>
                 
                
                     <span> 
                 <?php 
                 echo 'Average';}
               
                 elseif ($v_comments->smile_comment_product_rating_status==3) {
                 
                     ?>
                 </span>
                 
                 <span> 
                 <?php 
                 echo 'Medium';}
               
                 elseif ($v_comments->smile_comment_product_rating_status==4) {
                 
                     ?>
                 </span>
                 
                 <span> 
                 <?php 
                 echo 'Good';}
               
                 else {
                 
                     ?>
                 </span>
                 
                 <span> 
                 <?php 
                 echo 'Best';}
              
                     ?>
                 </span>
                
                 
                 
                     
                 
                 
                 
                 
                 
                 <p><?php echo $v_comments->smile_comment_description;?></p>
                
                                                                  
                
              </div>
              
            </div>
            <?php }?>
          </div>
        </div>
          
          
          <div>
                                        <h3 style="color:green">
                                            <?php
                                              $msg=$this->session->userdata('message');
                                              if(isset($msg)){
                                                  echo $msg;
                                                  $this->session->unset_userdata('message');
                                              }
                                            ?>
                                            
                                        </h3>
                                            
                                    </div>
          
          
          <?php 
          $this->load->view('smile_post_comments');
          ?>
          
          
          
      </div>
       <?php 
      }
      else{
      ?>
      <h1> You are looking for a content which is not in this Website</h1>
      <?php }?>
      
      
    </div>
  </div>