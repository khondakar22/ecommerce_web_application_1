 <script type="text/javascript">
<!--
//Create a boolean variable to check for a valid Internet Explorer instance.
var xmlhttp = false;
//Check if we are using IE.
try {
//If the Javascript version is greater than 5.
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");

//alert ("You are using Microsoft Internet Explorer.");
} catch (e) {
    
//If not, then use the older active x object.
try {
//If we are using Internet Explorer.
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
} catch (E) {
//Else we must be using a non-IE browser.
xmlhttp = false;
}
}
//If we are using a non-IE browser, create a javascript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
xmlhttp = new XMLHttpRequest();
//alert ("You are not using Microsoft Internet Explorer");
}

function makerequest(given_email,objID)
 {
	//alert(given_text);
        //var obj = document.getElementById(objID);
        serverPage='<?php echo base_url();?>welcome/ajax_email_check/'+given_email;
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	 {
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			//alert(xmlhttp.responseText);
                        document.getElementById(objID).innerHTML = xmlhttp.responseText;
                        if(xmlhttp.responseText =='Already Exists!'){
                            document.getElementById('cbutton').disabled=true;
                        }
                        if(xmlhttp.responseText =='Available'){
                            document.getElementById('cbutton').disabled=false;
                        }
			//document.getElementById(objcw).innerHTML = xmlhttp.responseText;
		 }
	}
xmlhttp.send(null);
}
//-->
</script>







<div id="content_holder" class="fixed">
    <div class="inner">
      
      <h2 class="heading-title"><span>Account Registration</span></h2>
      <div id="content"> 
          
          
        
        <!-- ACCORDION -->
        <div id="accordion" class="checkout">
          <h2><a href="#">Registration Information</a></h2>
          <div>
              <form action="<?php echo base_url();?>customer_registration/save_customer" method="post" autocomplete="on" onsubmit="return validateStandard(this)">
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required">*</span> First Name:</td>
                  <td><input type="text" class="large-field" value="" name="first_name"  required="required" regexp="JSVAL_RX_ALPHA_NUMERIC" err="Please Enter valid First Name" /></td>
                  <td><input type="hidden" class="large-field" value="" name="smile_customer_id"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Last Name:</td>
                  <td><input type="text" class="large-field" value="" name="last_name"  required="required" regexp="JSVAL_RX_ALPHA_NUMERIC" err="Please Enter valid Last Name"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span>Email Address:</td>
                  <td><input type="text" class="large-field" value="" name="email_address" required="required" regexp="JSVAL_RX_EMAIL" err="Please Enter valid Email Address" onblur="makerequest(this.value,'res')" /><h6 style="color: red;"> <span id="res"></span></h6></td>
                </tr>
                
                <tr>
                  <td><span class="required">*</span>Password:</td>
                  <td><input type="password" class="large-field" value="" name="password"  required="required" err="Please Enter valid Password" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" /></td>
                </tr>
                
                <tr>
                  <td><span class="required">*</span>Mobile Number:</td>
                  <td><input type="text" class="large-field" value="" name="mobile_number"  required="required" err="Please Enter valid Mobile Number" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" /></td>
                </tr>
                
                <tr>
                  <td>Company:</td>
                  <td><input type="text" class="large-field" value="" name="company_name"   err="Please Enter valid company name" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" /></td>
                </tr>
                
                <tr>
                  <td><span class="required">*</span> Address 1:</td>
                  <td><input type="text" class="large-field" value="" name="address_01"   required="required"  /></td>
                </tr>
                <tr>
                  <td>Address 2:</td>
                  <td><input type="text" class="large-field" value="" name="address_02"  /></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> City:</td>
                  <td><input type="text" class="large-field" value="" name="city"   required="required" err="Please Enter valid city name" regexp="JSVAL_RX_ALPHA_NUMERIC" /></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Post Code:</td>
                  <td><input type="text" class="large-field" value="" name="zip_code5"   required="required" /></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Country:</td>
                  <td><select class="large-field" name="country_name" required="required" >
                      <option value=""> --- Please Select --- </option>
                      <script text="text/javascript">
                      printCountryOptions();
                      </script>
                      
                    </select></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        
              <input type="submit" name="btn"  id="cbutton" title="Add to Cart" value="Continue" class="btn10"/> 
            
                        
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