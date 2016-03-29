<div id="content_holder" class="fixed">
    <div class="inner">
      <div id="content">
        <div class="box featured-box">
          <h2 class="heading-title"><span>Featured Products</span></h2>
          <div class="box-content">
            <ul id="myRoundabout">
              
                <?php 
                
                foreach ($featured_product as $v_featured){
                ?>
                <li>
                    <div class="prod_holder"> <a href="<?php echo base_url();?>welcome/p_d_v/<?php echo $v_featured->smile_sub_menubar_category_id;?>/<?php echo $v_featured->smile_product_id;?>.html"> <img src="<?php echo base_url().$v_featured->smile_product_image;?>" height="300" width="450" alt="Smile Mobile" /> </a>
                        <h3><?php echo $v_featured->smile_product_name;?></h3>
                </div>
                <span class="pricetag">BDT-<?php echo $v_featured->smile_product_price; ?></span> </li>
                <?php }?>
             
            </ul>
            <a href="#" class="previous_round">Previous</a> <a href="#" class="next_round">Next</a> </div>
        </div>
        
        
        <div class="box">
          <h2 class="heading-title"><span>Latest Products</span></h2>
          <div class="box-content">
            <div class="box-product fixed">
                <ul id="latest">
                    <?php foreach ($latest_product as $v_latest){ ?>
                    <li>
                <div class="prod_hold"> <a class="wrap_link" href="<?php echo base_url();?>welcome/p_d_v/<?php echo $v_latest->smile_sub_menubar_category_id;?>/<?php echo $v_latest->smile_product_id;?>.html">
                        <span class="image"><img src="<?php echo base_url().$v_latest->smile_product_image;?>" height="180" width="180" alt="Smile Mobile" /></span>
                </a>
                <div class="pricetag_small"> <span class="price">BDT-<?php echo $v_latest->smile_product_price; ?></span> </div>
                <div class="info">
                  <h3><?php echo $v_latest->smile_product_name;?></h3>
                  <p><a href="<?php echo base_url();?>welcome/p_d_v/<?php echo $v_latest->smile_sub_menubar_category_id;?>/<?php echo $v_latest->smile_product_id;?>.html">Click Here To Product Details </a></p>
                  
           <form action="<?php echo base_url();?>cart/add_to_cart" method="post">
          
            <input type="hidden" value="1" size="2" name="qty" id="qty"/>
            <input type="hidden" value="<?php echo $v_latest->smile_product_id;?>" size="2" name="smile_product_id" id="qty"/>
             <?php 
            if($v_latest->smile_product_qunatity > 0){
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
      </div>
    </div>
  </div>