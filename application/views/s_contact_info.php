<?php echo $map['js']; ?>
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
                <img id="captcha" alt="" src="../image/captcha.jpg"/> <br/>
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