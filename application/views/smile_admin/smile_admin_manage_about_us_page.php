<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons cogwheels"><i></i> Manage About us Page</h3>
        <div class="buttons pull-right">
            <a href="<?php echo base_url() ?>a_u_p.html" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> Add About Us Page</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="separator"></div>

    <div class="innerLR">
        <table class="table table-bordered table-condensed table-striped table-primary table-vertical-center checkboxs js-table-sortable">
            <thead>
                <tr>
                   
                    <th style="width: 1%;" class="center">Id</th>
                    <th class="center">Big Heading Title</th>
                    <th class="center">Small Heading Title</th>
                    <th class="center">Small Heading Frist Title</th>
                    <th class="center">Small Heading Second Title</th>
                    <th class="center">Publication Status</th>
                    
                    
                    <th class="center" style="width: 60px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
               foreach ($all_about_page_info as $v_about_page_info){
                ?>
                <tr class="selectable">
                    
                    <td class="center"><?php echo $v_about_page_info->smile_page_info_id; ?></td>
                     <td class="center important"><?php echo $v_about_page_info->smile_page_big_heading; ?></td>
                    
                    <td class="center important"><?php echo $v_about_page_info->smile_page_small_heading; ?></td>
                    <td class="center important"><?php echo $v_about_page_info->smile_page_small_heading_first_title; ?></td>
                    <td class="center important"><?php echo $v_about_page_info->smile_page_small_heading_second_title; ?></td>
                    
                    

                    <td class="center">
                        <?php 
                        if($v_about_page_info->smile_page_publication_status == 1)
                            {
                        echo 'Published';
                            }
                            else 
                            {
                                echo 'Unpublished';
                            }
                        
                        ?>
                        

                    </td>
                   
                    
                    <td class="center">
                        <a href="<?php echo base_url();?>s_s_a/e_a_u_p/<?php echo $v_about_page_info->smile_page_info_id; ?>.html" title="Edit" class="btn-action glyphicons pencil btn-success"><i></i></a>
                        <a href="<?php echo base_url();?>s_s_a/delete_about_page_info/<?php echo $v_about_page_info->smile_page_info_id; ?>" title="Delete" class="btn-action glyphicons remove_2 btn-danger" onclick="return check_delete();"><i></i></a>

                        <?php 
                        if($v_about_page_info->smile_page_publication_status==1){
                        ?>
                        <a href="<?php echo base_url();?>s_s_a/unpublished_about_page/<?php echo $v_about_page_info->smile_page_info_id; ?>" title="Unpublished" class="btn-action glyphicons circle_arrow_down btn-warning"><i></i></a>
                        <?php 
                        }
                        else
                        {
                        ?>    

                        <a href="<?php echo base_url();?>s_s_a/published_about_page/<?php echo $v_about_page_info->smile_page_info_id; ?>" title="Published" class="btn-action glyphicons circle_arrow_top btn-primary"><i></i></a>
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