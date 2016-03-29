<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons cogwheels"><i></i> Manage Customer Accounts</h3>
        <div class="buttons pull-right">
            <a href="<?php echo base_url() ?>s_s_a/a_p.html" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> Add Product</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="separator"></div>

    <div class="innerLR">
        <table class="table table-bordered table-condensed table-striped table-primary table-vertical-center checkboxs js-table-sortable">
            <thead>
                <tr>
                   
                    
                    <th class="center">Customer Name</th>
                    
                    <th class="center">Email Address <br> & Mobile Number</th>
                    <th class="center">Company Name</th>
                    
                    
                    <th class="center">Activation Status </th>
                    
                    <th class="center" style="width: 60px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
               foreach ($all_customer_info as $v_customer_info){
                ?>
                <tr class="selectable">
                    
                    
                     <td class="center important"><?php echo "$v_customer_info->first_name".'<br>'."$v_customer_info->last_name"; ?></td>
                    
                    
                    <td class="center important"><?php echo "$v_customer_info->email_address".'<br>'.'Mb-'."$v_customer_info->mobile_number"; ?></td>
                    <td class="center important"><?php echo $v_customer_info->company_name;?></td>
                   
                    
                    
                    <td class="center important">
                        <?php 
                        if($v_customer_info->activation_status==1)
                            {
                        echo 'Activated';
                            }
                            else 
                            {
                                echo 'Not Yet Activated';
                            }
                        
                        ?>
                        

                    </td>
                    
                    <td class="center">
                        
                        <a href="<?php echo base_url();?>s_s_a/delete_customer_info/<?php echo $v_customer_info->smile_customer_id; ?>" title="Delete" class="btn-action glyphicons remove_2 btn-danger" onclick="return check_delete();"><i></i></a>

                        
                        
                 
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