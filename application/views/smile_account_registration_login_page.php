<div id="content_holder" class="fixed">
    <div class="inner">
      
      <h2 class="heading-title"><span>Account Registration or Login</span></h2>
      
     
      
      <div id="content" >
        <div class="content account-page">
          <div class="box-login">
            <div class="box-content fixed">
              <div class="stitched"></div>
              <div class="left">
                <h6>Register Account</h6>
                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                <a class="button" id="button-contact" href="<?php echo base_url();?>customer_registration/account_registar.html"><span>Continue</span></a> </div>
              <form action="<?php echo base_url();?>customer_registration/check_customer_login" method="post">
              <div class="right">
                 
                <h6>I am a returning customer</h6>
                <span class="label">E-mail Address:</span>
                <input type="text" value="" name="email_address"/>
                <br/>
                <br/>
                <span class="label">Password:</span>
                <input type="text" value="" name="password"/>
                <input type="submit" name="btn"  value="Login" id="btn7"/>
                <a href="#" class="forgotten">Forgotten Password?</a> </div>
              
              </form>
              <div class="stitched"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  

</div>