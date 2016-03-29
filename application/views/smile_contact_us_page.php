<?php echo $map['js']; ?>
<?php 
$header_rest_category_id=$this->session->userdata('smile_rest_header_id');
if($header_rest_category_id==4){

?>

<div id="content_holder" class="fixed">
    <div class="inner">
      
      <h2 class="heading-title"><span>Contact Us</span></h2>
      
      <!-- LEFT COLUMN -->
      <div id="column-left">
        <div class="box">
          <h3 class="heading-title"><span>Our Location</span></h3>
          <div class="box-content box-contact-details">
            <ul>
                
              <li class="address"> <span>Address:</span><br />
                <?php echo $select_contact_info->smile_contact_address;?><br />
                <?php echo $select_contact_info->smile_company_email_address;?><br />
                </li>
              <li class="phone"> <span>Telephone:</span><br />
                +<?php echo $select_contact_info->smile_contact_address_telephone;?></li>
              <li class="fax"> <span>Fax:</span><br />
                +<?php echo $select_contact_info->smile_contact_address_fax;?></li>
            
            
            </ul>
          </div>
        </div>
      </div>
      <!-- END OF LEFT COLUMN -->
      
      <div id="content" class="content-column-left1">
        
         
          
          
          
          
          <div class="content contacts-page">
          <div class="box-contacts fixed">
            <div class="box-content">
              <div class="stitched"></div>
              <?php echo $map['html']; ?>
              <div class="stitched"></div>
            </div>
          </div>
          <div class="clear"></div>
          
        </div>
      
      </div>
      
      <div class="clear"></div>
      
       <div id="content" class="content-column-left1">
        
         
          
          
          
          
          <div class="content contacts-page">
          <div class="box-contacts fixed">
            <div class="box-content">
              <div class="stitched"></div>
              <div class="form"> <span class="label">Your Name:</span>
                <input type="text" value="" name="name"/>
                <br/>
                <br/>
                <span class="label">E-mail Address:</span>
                <input type="text" value="" name="name"/>
                <br/>
                <br/>
                <span class="label">Enquiry:</span>
                <textarea style="width: 98%;" rows="10" cols="40" name="text"></textarea>
                <br/>
                <br/>
                <span class="label">Enter the code in the box below:</span>
                <input type="text" value="" name="captcha"/>
                <br/>
                <img id="captcha" alt="" src="<?php echo base_url();?>/image/captcha.jpg"/> <br/>
              </div>
              <div class="stitched"></div>
            </div>
          </div>
          <div class="clear"></div>
          <div class="buttons">
            <div class="left"><a class="button" id="button-contact"><span>Submit</span></a></div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>

<?php }

elseif($header_rest_category_id==1){

?>






<div id="content_holder">
    <div class="inner">
      
      <h2 class="heading-title"><span>Product Comparison</span></h2>
      <div id="content">
        <table class="compare-info">
          <thead>
            <tr>
              <td colspan="4">Product Details</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Product</td>
              <td class="name"><a href="product.html">Deliciosso</a></td>
              <td class="name"><a href="product.html">Pepper Steak</a></td>
              <td class="name"><a href="product.html">Strange Meal</a></td>
            </tr>
            <tr class="even">
              <td>Image</td>
              <td class="image"><img src="<?php echo base_url();?>image/prod_pic4.jpg" alt="Spicylicious store" /></td>
              <td class="image"><img src="<?php echo base_url();?>image/prod_pic1.jpg" alt="Spicylicious store" /></td>
              <td class="image"><img src="<?php echo base_url();?>image/prod_pic8.jpg" alt="Spicylicious store" /></td>
            </tr>
            <tr>
              <td>Price</td>
              <td> $587.50 </td>
              <td> $1,175.00 </td>
              <td> $1,175.00 </td>
            </tr>
            <tr class="even">
              <td>Model</td>
              <td>Product 16</td>
              <td>Product 17</td>
              <td>Product 19</td>
            </tr>
            <tr>
              <td>Brand</td>
              <td>McDonalds</td>
              <td>Burger King</td>
              <td>Domino's Pizza</td>
            </tr>
            <tr class="even">
              <td>Availability</td>
              <td>In Stock</td>
              <td>In Stock</td>
              <td>In Stock</td>
            </tr>
            <tr>
              <td>Rating</td>
              <td><img alt="Based on 0 reviews." src="<?php echo base_url();?>image/stars-2.png"/><br/>
                Based on 3 reviews.</td>
              <td><img alt="Based on 0 reviews." src="<?php echo base_url();?>image/stars-5.png"/><br/>
                Based on 12 reviews.</td>
              <td><img alt="Based on 0 reviews." src="<?php echo base_url();?>image/stars-3.png"/><br/>
                Based on 7 reviews.</td>
            </tr>
            <tr class="even">
              <td>Summary</td>
              <td class="description"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever..</td>
              <td class="description"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever..</td>
              <td class="description"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever..</td>
            </tr>
            <tr>
              <td>Weight</td>
              <td>0.00kg</td>
              <td>0.00kg</td>
              <td>0.00kg</td>
            </tr>
            <tr class="even">
              <td>Dimensions (L x W x H)</td>
              <td>0.00mm x 0.00mm x 0.00mm</td>
              <td>0.00mm x 0.00mm x 0.00mm</td>
              <td>0.00mm x 0.00mm x 0.00mm</td>
            </tr>
          </tbody>
          <thead>
            <tr>
              <td colspan="4">Memory</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>test 1</td>
              <td>8gb</td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
          <thead>
            <tr>
              <td colspan="4">Processor</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>No. of Cores</td>
              <td>1</td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td></td>
              <td><a class="button" href="#"><span>Add to Cart</span></a></td>
              <td><a class="button" href="#"><span>Add to Cart</span></a></td>
              <td><a class="button" href="#"><span>Add to Cart</span></a></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="hidden" value="43" name="remove"/>
                <a href="#"><span>Remove</span></a></td>
              <td><input type="hidden" value="44" name="remove"/>
                <a href="#"><span>Remove</span></a></td>
              <td><input type="hidden" value="46" name="remove"/>
                <a href="#"><span>Remove</span></a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

<?php  }
elseif($header_rest_category_id==2){
?>




<div id="content_holder" class="fixed">
    <div class="inner">
      
      <h2 class="heading-title"><span>Finding Offers</span></h2>
      
      <!-- LEFT COLUMN -->
      
      <!-- END OF LEFT COLUMN -->
      
      <div id="content" class="content-column-left">
        <div class="content info-page">
          <div id="accordion">
            <h2><a href="#">Offers</a></h2>
            
            
          </div>
          <!-- TABS -->
          <div id="tabs" class="htabs"> <a href="#tab1">Offer 1</a> <a href="#tab2">Offer 2</a> <a href="#tab3">Offer 3</a> </div>
          <div id="tab1" class="tab-content">
            <p>Nunc porttitor libero nec risus pellentesque nec fringilla felis tempor. Morbi interdum nisl nec nulla cursus convallis ut quis neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse lacinia gravida purus. Proin varius porttitor sem, a facilisis neque sagittis eget. Duis enim risus, pellentesque eu dapibus quis, malesuada nec augue. Nulla porttitor tincidunt rhoncus. Nunc ultricies metus eget enim tristique scelerisque. Integer sed nunc nec purus egestas ullamcorper. Aliquam ante massa, vestibulum vel facilisis ut, cursus vitae tortor. Ut quis est sit amet justo interdum facilisis ut vehicula odio. Mauris at nisl non nunc aliquet laoreet a sit amet magna.</p>
          </div>
          <div id="tab2" class="tab-content"> <img src="<?php echo base_url();?>image/sample_pic.jpg" width="120" height="120" alt="Spicylicious" class="img-align-left" />
            <p>Nunc porttitor libero nec risus pellentesque nec fringilla felis tempor. Morbi interdum nisl nec nulla cursus convallis ut quis neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse lacinia gravida purus. Proin varius porttitor sem, a facilisis neque sagittis eget. Duis enim risus, pellentesque eu dapibus quis, malesuada nec augue. Nulla porttitor tincidunt rhoncus. Nunc ultricies metus eget enim tristique scelerisque. Integer sed nunc nec purus egestas ullamcorper. Aliquam ante massa, vestibulum vel facilisis ut, cursus vitae tortor. Ut quis est sit amet justo interdum facilisis ut vehicula odio. Mauris at nisl non nunc aliquet laoreet a sit amet magna.</p>
          </div>
          <div id="tab3" class="tab-content">
            <p>Nunc porttitor libero nec risus pellentesque nec fringilla felis tempor. Morbi interdum nisl nec nulla cursus convallis ut quis neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse lacinia gravida purus. Proin varius porttitor sem, a facilisis neque sagittis eget. Duis enim risus, pellentesque eu dapibus quis, malesuada nec augue.</p>
            <ul>
              <li>Delivery Information</li>
              <li>Privacy policy</li>
              <li>Terms and conditions</li>
              <li>Contact Us</li>
              <li>site map</li>
            </ul>
          </div>
          
          
          
          
          <!-- END OF TABS --> 
          
          <!-- ACCORDION -->
          
          <!-- END OF ACCORDION -->
          
          
          
          
        
          <div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>

<?php }

elseif($header_rest_category_id==3){

?>


<div id="content_holder" class="fixed">
    <div class="inner">
      
      <h2 class="heading-title"><span>Smile Affiliates</span></h2>
      
      <!-- LEFT COLUMN -->
      
      <!-- END OF LEFT COLUMN -->
      
      <div id="content" class="content-column-left">
        <div class="content info-page">
         
          <!-- END OF TABS --> 
          
          <!-- ACCORDION -->
          <div id="accordion">
            <h2><a href="#">Affiliates 1</a></h2>
            <div>
              <p>Nunc porttitor libero nec risus pellentesque nec fringilla felis tempor. Morbi interdum nisl nec nulla cursus convallis ut quis neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse lacinia gravida purus. Proin varius porttitor sem, a facilisis neque sagittis eget. Duis enim risus, pellentesque eu dapibus quis, malesuada nec augue.</p>
              <ul>
                <li>Delivery Information</li>
                <li>Privacy policy</li>
                <li>Terms and conditions</li>
                <li>Contact Us</li>
                <li>site map</li>
              </ul>
            </div>
            <h2><a href="#">Affiliates 2</a></h2>
            <div>
              <p>Nunc porttitor libero nec risus pellentesque nec fringilla felis tempor. Morbi interdum nisl nec nulla cursus convallis ut quis neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse lacinia gravida purus. Proin varius porttitor sem, a facilisis neque sagittis eget. Duis enim risus, pellentesque eu dapibus quis, malesuada nec augue.</p>
              <ul>
                <li>Delivery Information</li>
                <li>Privacy policy</li>
                <li>Terms and conditions</li>
                <li>Contact Us</li>
                <li>site map</li>
              </ul>
            </div>
            <h2><a href="#">Affiliates 3</a></h2>
            <div>
              <p>Nunc porttitor libero nec risus pellentesque nec fringilla felis tempor. Morbi interdum nisl nec nulla cursus convallis ut quis neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse lacinia gravida purus. Proin varius porttitor sem, a facilisis neque sagittis eget. Duis enim risus, pellentesque eu dapibus quis, malesuada nec augue.</p>
              <ul>
                <li>Delivery Information</li>
                <li>Privacy policy</li>
                <li>Terms and conditions</li>
                <li>Contact Us</li>
                <li>site map</li>
              </ul>
            </div>
            
            
          </div>
          <!-- END OF ACCORDION -->
          
         
          <div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>


<?php } ?>
