<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons settings"><i></i> Manage Contact Us Page</h3>
        <div>
   
    
</div>
      
        <div class="clearfix"></div>
    </div>
    <div class="separator"></div>

    <div class="innerLR">
        <table class="table table-bordered table-condensed table-striped table-primary table-vertical-center checkboxs js-table-sortable">
            <thead>
                <tr>
                   
                     
                    <th class="center">Address</th>
                    <th class="center">Email Address</th>
                    <th class="center">Telephone Number</th>
                    <th class="center">Fax Number</th>
                    <th class="center">Actions</th>
                   
                </tr>
            </thead>
            <tbody>
                
                <?php 
               foreach ($all_contact_info as $v_all_contact){
                ?>
                <tr class="selectable">
                    
                    
                     <td class="center important"><?php echo $v_all_contact->smile_contact_address;?></td>
                    
                    <td class="center important"><?php echo $v_all_contact->smile_company_email_address;?></td>
                    <td class="center important"><?php echo $v_all_contact->smile_contact_address_telephone;?></td>
                    <td class="center important"><?php echo $v_all_contact->smile_contact_address_fax;?></td>

                    
                    <td class="center">
                        <a href="<?php echo base_url();?>s_s_a/delete_contact/<?php echo $v_all_contact->smile_contact_us_page_id;?>" title="Delete" class="btn-action glyphicons remove_2 btn-danger" onclick="return check_delete();"><i></i></a>
                        
                          
                       
                        
                        

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

