




<div id="login">
                    <form class="form-signin" method="post" action="<?php echo base_url();?>s_administrator/add_admin_user" autocomplete="on" onsubmit="return validateStandard(this)" >
		<div class="widget widget-4">
			<div class="widget-head">
				<h4 class="heading">Restricted area</h4>
			</div>
		</div>
		<h2 class="glyphicons unlock form-signin-heading"><i></i> Please sign in</h2>
                <div>
                    <h3  style="color:red">
                        <?php 
                        $exc=$this->session->userdata('exception');
                                if(isset($exc)){
                                    echo $exc;
                                    $this->session->unset_userdata('exception');
                                }
                        
                        ?>
                    </h3>
                </div>
                <div>
                    <h3  style="color:green">
                        <?php 
                        $msg=$this->session->userdata('message');
                                if(isset($msg)){
                                    echo $msg;
                                    $this->session->unset_userdata('message');
                                }
                        
                        ?>
                    </h3>
                </div>
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
        serverPage='<?php echo base_url();?>s_s_a/ajax_email_check/'+given_email;
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
              
                
                
                
                
                
                

                
		<div class="uniformjs">
                    <table>
                        <tr>
                            <td> Enter User Name </td>
                            <td> <input type="text" class="input-block-level" placeholder="User Name" required="required" regexp="JSVAL_RX_ALPHA_NUMERIC" err="Please Enter valid user name" name="user_name"> </td>
                        </tr>
                        
                         <tr>
                            <td> Enter Email Address </td>
                            <td> <input type="text" class="input-block-level" placeholder="Email address" err="Please Enter valid Email Address" regexp="JSVAL_RX_EMAIL" required="required"  name="email_address" onblur="makerequest(this.value,'res')"  ></td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                               
                            </td>
                        </tr>
                            
                        <tr>
                            <td> Type Password </td>
                            <td> <input type="password" class="input-block-level" placeholder="Password" required="required" err="Please Enter valid Password" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE"   name="password"></td>
                        </tr>
                        
                        <tr>
                            <td> Confirm Password </td>
                            <td> <input type="password" class="input-block-level" placeholder="Confirm Password"    name="confirm_password" required="required" equals="password" err="Password does not Match"></td>
                        </tr>
                        
                         <tr>
                            <td> Select Access Level </td>
                            <td>
                                <select name="access_level" >
                                    <optgroup>
                                        <option >
                                            Select....
                                        </option>
                                        <option value="1">
                                            Supper Admin
                                        </option>
                                        <option value="0">
                                            Normal Admin
                                        </option>
                                    </optgroup>
                                </select>
                                
                            </td>
                        </tr>
                         
                        
			 
			
                    
                    </table>
                        
                        
		</div>
<input type="submit" name="btn" value="Create Account" id="cbutton" class="btn btn-large btn-primary"  >
                
                <div> If You have Account Then <a href="<?php echo base_url();?>s_administrator"> Sign </a> in.</div>  
	</form>
</div>	