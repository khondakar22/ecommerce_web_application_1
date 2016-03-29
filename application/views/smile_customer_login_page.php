<div id="content_holder" class="fixed">
    <div class="inner">
      
      <h2 class="heading-title"><span>Account Registration or Login</span></h2>
      
      <form action="<?php echo base_url();?>customer_registration/check_customer_login" method="post" autocomplete="on" onsubmit="return validateStandard(this)" >
      
      <div id="content" >
        <div class="content account-page">
          <div class="box-login">
            <div class="box-content fixed">
              <div class="stitched"></div>
              <div>
                                        <h3 style="color:red">
                                            <?php
                                              $msg=$this->session->userdata('exception');
                                              if(isset($msg)){
                                                  echo $msg;
                                                  $this->session->unset_userdata('exception');
                                              }
                                            ?>
                                            
                                        </h3>
                                            
                                    </div>
              <div class="center">
                <h6>I am a returning customer</h6>
                <span class="label">E-mail Address:</span>
                <input type="text" value="" name="email_address" required="required" regexp="JSVAL_RX_EMAIL" err="Please Enter valid Email Address"/>
                <br/>
                <br/>
                <span class="label">Password:</span>
                <input type="password" value="" name="password" required="required" err="Please Enter valid Password" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE"/>
                <input type="submit" name="btn"  value="Login" id="btn7"/>
                <a href="#" class="forgotten">Forgotten Password?</a>  </div>
              <div class="stitched"></div>
            </div>
          </div>
        </div>
      </div>
          </form>
      <div class="clear"></div>
    </div>
  

</div>