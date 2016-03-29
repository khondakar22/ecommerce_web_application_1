<div id="content_holder" class="fixed">
    <div class="inner">
      
      <h2 class="heading-title"><span>Payment</span></h2>
      <div id="content"> 
        
        <!-- ACCORDION -->
        <div id="accordion" class="checkout">
          <h2><a href="#">Payment Method</a></h2>
          <div>
              <form action="<?php echo base_url();?>checkout/confirm_order" method="post"> 
            <p>Please select the preferred payment method to use on this order.</p>
            <table class="form">
              <tbody>
                <tr>
                  <td style="width: 1px;"><input type="radio" checked="checked" id="cod" value="pay_pal" name="payment_method"/></td>
                  <td><label for="cod">PayPal</label></td>
                </tr>
                <tr>
                  <td style="width: 1px;"><input type="radio" id="mod" value="bkash" name="payment_method"/></td>
                  <td><label for="mod">BKash</label></td>
                </tr>
                <tr>
                  <td style="width: 1px;"><input type="radio" id="tod" value="cash_on_delivery" name="payment_method"/></td>
                  <td><label for="tod">Cash On Delivery</label></td>
                </tr>
              </tbody>
            </table>
            <b>Add Comments About Your Order</b>
            <textarea style="width: 98%;" rows="8" cols="20" name="order_comments"></textarea>
            <br>
            <br>
          <div class="buttons">
              <div class="right">I have read and agree to the <a href="http://metagraphics.eu/cartmania1_5/index.php?route=information/information/info&amp;information_id=5" class="fancybox"><b>Terms &amp; Conditions</b></a>
                <input type="checkbox" value="1" name="agree"/>
                <input type="submit" name="btn" title="Add to Cart" value="Confirm Order" id="btn8"/>
            </div>
        
        
      </div>
            </form>
          </div>
          

        </div>
        <!-- END OF ACCORDION --> 
        
        
        
        
    </div>
  </div>