

<div id="content">
    <div class="widget widget-gray widget-body-white">
        <div class="widget-head">
            <h4 class="heading">Edit Menu bar Category</h4>
        </div>
       <?php
        $admin_id = $this->session->userdata('admin_id');
        $admin_name= $this->session->userdata('admin_name');
        $admin_email= $this->session->userdata('admin_email');
        $access_level= $this->session->userdata('access_level');
        $admin_passowrd= $this->session->userdata('admin_passowrd');
        $admin_confirm_password= $this->session->userdata('admin_confirm_password');
        
        if($admin_id != NULL  ){
        ?>
        <form name="edit_admin_info" action="<?php echo base_url()?>s_s_a/update_admin_info" method="post">
            
        <table>
            <tr> <td> Admin Name: </td> <td> <input type="text" name="smile_admin_user_name" class="span5" value="<?php echo $admin_name;?>"/></td>  
                                                <td> <input type="hidden" name="smile_admin_user_id" class="span5" value="<?php echo $admin_id;?>"/></td>
            </tr>
            
            <tr><td> Admin Email Address: </td><td> <input type="text" rows="4"class="span5" name="smile_admin_email_address" value="<?php echo $admin_email;?>"></td></tr>
            
            <tr><td> Admin Password: </td><td> <input type="text" required="required" rows="4"class="span5" name="smile_admin_password" value="<?php echo $admin_passowrd;?>"></td></tr>
            <tr><td> Admin Confirm-Password: </td><td> <input type="text" required="required" rows="4"class="span5" equals="smile_admin_password" name="smile_admin_confirm_password" value="<?php echo $admin_confirm_password;?>"></td></tr>
            <tr> <td><label> Admin Access Level</label> </td>
                <td> <input type="text" disabled="disabled" rows="4"class="span5" name="smile_admin_access_level" value="<?php if($access_level==1){ echo 'Super Admin';} else {echo 'Normal Admin';} ?>"<td>  </td> 
 </td> 
        </tr>
        <tr>
            <td></td> <td> <button type="submit" name="btn" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Update changes</button> </td>
					</tr>
        </table>
               
            </form>
        <?php }?>
</div>
</div>

