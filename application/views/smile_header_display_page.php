
<?php 
$header_category_id=$this->session->userdata('smile_header_category_id');
if($header_category_id==3){

?>
<div id="content_holder" class="fixed">
    <div class="inner">
    
      
      
      <h2 class="heading-title"><span>About Smile Mobile</span></h2>
      
      <!-- LEFT COLUMN -->
      
      <!-- END OF LEFT COLUMN -->
      
      <div id="content" class="content-column-left">
        <div class="content info-page">
          
          
          <h3><?php echo $select_header_category->smile_page_big_heading;?></h3>
          <img src="<?php echo base_url().$select_header_category->smile_about_image;?>" width="120" height="120" alt="Spicylicious" class="img-align-left" />
          <p id="p2"><?php echo $select_header_category->smile_page_big_heading_first_image_first_description; ?></p>
          <br>
          <img src="<?php echo base_url().$select_header_category->smile_heading_image;?>" width="120" height="120" alt="Spicylicious" class="img-align-right" />
          <p id="p2" ><?php echo $select_header_category->smile_page_big_heading_second_image_second_description; ?></p>
          
          <!-- TABS -->
          
          
        
          <!-- END OF TABS --> 
          
          <!-- ACCORDION -->
          
          
          <div id="accordion">
            <h2><a href="#"><?php echo $select_header_category->smile_page_small_heading; ?></a></h2>
            </div>
           <div class="one_half">
            <h3><?php echo $select_header_category->smile_page_small_heading_first_title; ?></h3>
            <p id="p3" ><?php echo $select_header_category->smile_page_small_heading_first_title_first_description; ?></p>
          </div>
          <div class="one_half last">
            <h3><?php echo $select_header_category->smile_page_small_heading_second_title; ?></h3>
            <p id="p4"><?php echo $select_header_category->smile_page_small_heading_second_title_second_description; ?></p>
          </div>
            <div class="one_half">
            <h3><?php echo $select_header_category->smile_page_small_heading_third_title; ?></h3>
            <p id="p3" ><?php echo $select_header_category->smile_page_small_heading_third_title_third_description; ?></p>
          </div>
            <div class="one_half last">
            <h3><?php echo $select_header_category->smile_page_small_heading_fourth_title; ?></h3>
            <p id="p4" ><?php echo $select_header_category->smile_page_small_heading_fourth_title_fourth_description; ?></p>
          </div>
            
          
          
          
          </div>
          
          <!-- END OF ACCORDION -->
          
          
          <div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
<?php }

elseif($header_category_id==1){
?>

<div id="content_holder">
    <div class="inner">
      
      <h2 class="heading-title"><span>My Wish List</span></h2>
      
      <!-- RIGHT COLUMN -->
      
      <!-- END OF RIGHT COLUMN -->
      
      <div id="content" class="content-column-right">
        <div class="wishlist-product">
          <table>
            <thead>
              <tr>
                <td class="remove">Remove</td>
                <td class="image">Image</td>
                <td class="name">Product Name</td>
                <td class="model">Model</td>
                <td class="stock">Stock</td>
                <td class="price">Unit Price</td>
                <td class="cart">Buy Now</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="remove"><input type="checkbox" value="44" name="remove[]"/></td>
                <td class="image"><a href="#"><img alt="Spicylicious store" src="<?php echo base_url();?>image/left_module_pic.jpg"/></a></td>
                <td class="name"><a href="#">Product name</a></td>
                <td class="model">Product 17</td>
                <td class="stock">In Stock</td>
                <td class="price"><div class="price"> $1,175.00 </div></td>
                <td class="cart"><a class="button" onclick="addToCart('44');"><span>Add to Cart</span></a></td>
              </tr>
              <tr>
                <td class="remove"><input type="checkbox" value="46" name="remove[]"/></td>
                <td class="image"><a href="#"><img alt="Spicylicious store" src="<?php echo base_url();?>image/left_module_pic.jpg"/></a></td>
                <td class="name"><a href="#">Long product name</a></td>
                <td class="model">Product 19</td>
                <td class="stock">In Stock</td>
                <td class="price"><div class="price"> $1,175.00 </div></td>
                <td class="cart"><a class="button" onclick="addToCart('46');"><span>Add to Cart</span></a></td>
              </tr>
              <tr>
                <td class="remove"><input type="checkbox" value="48" name="remove[]"/></td>
                <td class="image"><a href="#"><img alt="Spicylicious store" src="<?php echo base_url();?>image/left_module_pic.jpg"/></a></td>
                <td class="name"><a href="#">Extremely long product name goes here</a></td>
                <td class="model">product 20</td>
                <td class="stock">In Stock</td>
                <td class="price"><div class="price"> $117.50 </div></td>
                <td class="cart"><a class="button" onclick="addToCart('48');"><span>Add to Cart</span></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="buttons">
          <div class="left"><a class="button" href="<?php echo base_url();?>"><span>Back</span></a></div>
          <div class="right"><a class="button" onclick="$('#wishlist').submit();"><span>Update</span></a></div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
<?php  }
elseif($header_category_id==2){
?>
<div id="content_holder" class="fixed">
    <div class="inner">
       <h2 class="heading-title"><span>Customer Care</span></h2>
      
      <!-- LEFT COLUMN -->
      
      <!-- END OF LEFT COLUMN -->
      
      <div id="content" class="content-column-left">
        <div class="content info-page">
         
          <!-- TABS -->
          
          <!-- END OF TABS --> 
          
          <!-- ACCORDION -->
          <div id="accordion">
            <h2><a href="#">Care Center</a></h2>
            
            
            
          </div>
          <!-- END OF ACCORDION -->
          
          
         
         
         
          
          
         
          
          <div class="one_fifth">
            <h3>First Customer Care</h3>
            <p>Nunc porttitor libero nec risus pellentesque nec fringilla felis tempor. Morbi interdum nisl nec nulla cursus convallis ut quis neque.</p>
          </div>
          <div class="one_fifth">
            <h3>Second Customer Care</h3>
            <p>Nunc porttitor libero nec risus pellentesque nec fringilla felis tempor. Morbi interdum nisl nec nulla cursus convallis ut quis neque.</p>
          </div>
          <div class="one_fifth">
            <h3>Third Customer Care</h3>
            <p>Nunc porttitor libero nec risus pellentesque nec fringilla felis tempor. Morbi interdum nisl nec nulla cursus convallis ut quis neque.</p>
          </div>
          <div class="one_fifth">
            <h3>Fourth Customer Care</h3>
            <p>Nunc porttitor libero nec risus pellentesque nec fringilla felis tempor. Morbi interdum nisl nec nulla cursus convallis ut quis neque.</p>
          </div>
          <div class="one_fifth last">
            <h3>Fifth Customer Care</h3>
            <p>Nunc porttitor libero nec risus pellentesque nec fringilla felis tempor. Morbi interdum nisl nec nulla cursus convallis ut quis neque.</p>
          </div>
          <div class="clear"></div>
          
          
          <div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>




<?php }?>