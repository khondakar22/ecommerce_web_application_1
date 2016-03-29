<div id="content_holder" class="fixed">
    <div class="inner">
      
      <h2 class="heading-title"><span>Checkout</span></h2>
      <div id="content"> 
        
        <!-- ACCORDION -->
        <div id="accordion" class="checkout">
          
          
          <h2><a href="#">Shipping Details</a></h2>
          <div>
              <form action="<?php echo base_url();?>checkout/save_shipping" method="post" autocomplete="on" onsubmit="return validateStandard(this)"> 
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required">*</span> Name:</td>
                  <td><input type="text" class="large-field" value="" name="shipping_name" required="required" regexp="JSVAL_RX_ALPHA_NUMERIC" err="Please Enter valid Name"/></td>
                  
                </tr>
                <tr>
                  <td><span class="required">*</span> Email Address:</td>
                  <td><input type="text" class="large-field" value="" name="shipping_email_address" required="required" regexp="JSVAL_RX_EMAIL" err="Please Enter valid Email Address"/></td>
                </tr>
                <tr>
                  <td>Company Name:</td>
                  <td><input type="text" class="large-field" value="" name="company" err="Please Enter valid company name" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" /></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Address:</td>
                  <td><input type="text" class="large-field" value="" name="address" required="required" /></td>
                </tr>
                <tr>
                  <td><span class="required">*</span>Mobile No:</td>
                  <td><input type="text" class="large-field" value="" name="mobile_no"  required="required" err="Please Enter valid Mobile Number" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" /></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> City:</td>
                  <td><input type="text" class="large-field" value="" name="shipping_city" required="required" err="Please Enter valid city name" regexp="JSVAL_RX_ALPHA_NUMERIC" /></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Post Code:</td>
                  <td><input type="text" class="large-field" value="" name="postal_code" required="required"  /></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Country:</td>
                  <td><select class="large-field" name="shipping_country" required="required" >
                      <option value=""> --- Please Select --- </option>
                      <script text="text/javascript">
                      printCountryOptions();
                      </script>
                    </select></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        
              <input type="submit" name="btn" title="Add to Cart" value="Continue" id="btn8"/> 
            
                        
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <?php
                        $customer_id=$this->session->userdata('smile_customer_id');
                        ?>
                        <a href="checkout/shipping_same_as_registration/<?php echo $customer_id ?>"> My delivery address is the same as my Registration address</a>
            
                        
                    </td>
                </tr>
                
              </tbody>
            </table>
          
           </form>
          </div>
          
          
          
          
          
        </div>
        <!-- END OF ACCORDION --> 
        
      </div>
    </div>
  </div>