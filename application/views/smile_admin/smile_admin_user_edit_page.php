
<div id="content">
    <div class="widget widget-gray widget-body-white">
        <div class="widget-head">
            <h4 class="heading">Edit Menu bar Category</h4>
        </div>
       
        
        
        <form name="edit_admin_info" action="<?php echo base_url()?>s_s_a/update_admin_info" method="post">
            
        <table>
            <tr> <td> Admin Name: </td> <td> <input type="text" name="smile_admin_user_name" class="span5" value="<?php echo $admin_account_info->smile_admin_user_name;?>"/></td>  
                                                <td> <input type="hidden" name="smile_admin_user_id" class="span5" value="<?php echo $admin_account_info->smile_admin_user_id;?>"/></td>
            </tr>
            
            <tr><td> Admin Email Address: </td><td> <input type="text" rows="4"class="span5" name="smile_admin_email_address" value="<?php echo $admin_account_info->smile_admin_email_address;?>"></td></tr>
            
            <tr><td> Admin Password: </td><td> <input type="text" required="required" rows="4"class="span5" name="smile_admin_password" value="<?php echo $admin_account_info->smile_admin_password;?>"></td></tr>
            <tr><td> Admin Confirm-Password: </td><td> <input type="text" required="required" rows="4"class="span5" equals="smile_admin_password" name="smile_admin_confirm_password" value="<?php echo $admin_account_info->smile_admin_confirm_password;?>"></td></tr>
            <tr> <td><label> Menu Publication Status:</label> </td>
                <td> <select name="smile_admin_access_level">
							<optgroup>
								<option>Select...</option>
                                                                <option value="1">Supper Admin</option>
                                                                <option value="0">Normal Admin</option>
							</optgroup>
							
                    </select> </td> 
        </tr>
        <tr>
            <td></td> <td> <button type="submit" name="btn" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Update changes</button> </td>
					</tr>
        </table>
               
            </form>
</div>
</div>

<script type="text/javascript">
                                    document.forms['edit_admin_info'].elements['smile_admin_access_level'].value="<?php echo $admin_account_info->smile_admin_access_level;?>";
                        </script>