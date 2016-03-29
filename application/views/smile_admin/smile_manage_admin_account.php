<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons settings"><i></i> Manage Admin Account</h3>
        
        <div class="clearfix"></div>
    </div>
    <div class="separator"></div>

    <div class="innerLR">
        <table class="table table-bordered table-condensed table-striped table-primary table-vertical-center checkboxs js-table-sortable">
            <thead>
                <tr>
                   
                    <th style="width: 1%;" class="center">Admin Id</th>
                    <th class="center">Admin Name</th>
                    <th class="center">Admin Email_Address</th>
                    <th class="center">Admin Access Level</th>
                    <th class="center" style="width: 60px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
               foreach ($all_admin_info as $v_admin_info){
                ?>
                <tr class="selectable">
                    
                    <td class="center"><?php echo $v_admin_info->smile_admin_user_id; ?></td>
                    <td class="center important"><?php echo $v_admin_info->smile_admin_user_name; ?></td>

                    <td class="center"><?php echo $v_admin_info->smile_admin_email_address; ?></td>

                    <td class="center">
                        <?php 
                        if($v_admin_info->smile_admin_access_level==1)
                            {
                        echo 'Supper Admin';
                            }
                            else 
                            {
                                echo 'Normal Admin';
                            }
                        
                        ?>
                        

                    </td>
                    <td class="center">
                        <a href="<?php echo base_url();?>s_s_a/e_a_a/<?php echo $v_admin_info->smile_admin_user_id; ?>.html" title="Edit" class="btn-action glyphicons pencil btn-success"><i></i></a>
                        <a href="<?php echo base_url();?>s_s_a/delete_admin/<?php echo $v_admin_info->smile_admin_user_id; ?>" title="Delete" class="btn-action glyphicons remove_2 btn-danger" onclick="return check_delete();"><i></i></a>

                        <?php 
                        if($v_admin_info->smile_admin_access_level==1){
                        ?>
                        <a href="<?php echo base_url();?>s_s_a/normal_admin/<?php echo $v_admin_info->smile_admin_user_id; ?>" title="Normal Admin" class="btn-action glyphicons circle_arrow_down btn-warning"><i></i></a>
                        <?php 
                        }
                        else
                        {
                        ?>    

                        <a href="<?php echo base_url();?>s_s_a/supper_admin/<?php echo $v_admin_info->smile_admin_user_id; ?>" title="Super Admin" class="btn-action glyphicons circle_arrow_top btn-primary"><i></i></a>
                        <?php 
                        }?>  

                    </td>
                </tr>
               <?php }?>
            </tbody>
        </table>

        <div class="separator top form-inline small">
            
            <div class="pagination pull-right" style="margin: 0;">
                <?php echo $this->pagination->create_links();?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>