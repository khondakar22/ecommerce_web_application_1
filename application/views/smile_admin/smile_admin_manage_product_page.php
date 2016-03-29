<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons cogwheels"><i></i> Manage Product</h3>
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
                   
                    <th style="width: 1%;" class="center">Id</th>
                    <th class="center">Product Name</th>
                    
                    <th class="center">Sub Category Name</th>
                    <th class="center">Product Image</th>
                    <th class="center">Product Quantity </th>
                    <th class="center">Publication Status</th>
                    <th class="center">Product Featured </th>
                    
                    <th class="center" style="width: 60px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
               foreach ($select_all_product_info as $v_product_info){
                ?>
                <tr class="selectable">
                    
                    <td class="center"><?php echo $v_product_info->smile_product_id; ?></td>
                     <td class="center important"><?php echo $v_product_info->smile_product_name; ?></td>
                    
                    
                    <td class="center important"><?php echo $v_product_info->smile_sub_menubar_category_name; ?></td>
                    <td class="center important"><img src="<?php echo base_url().$v_product_info->smile_product_image;?>" alt="image" height="60" width="40"/></td>
                    <td class="center important"><?php echo $v_product_info->smile_product_qunatity; ?> pcs</td>
                    <td class="center important">
                        <?php 
                        if($v_product_info->smile_product_publication_status == 1)
                            {
                        echo 'Published';
                            }
                            else 
                            {
                                echo 'Unpublished';
                            }
                        
                        ?>
                        

                    </td>
                    <td class="center important">
                        <?php 
                        if($v_product_info->smile_featured_product==1)
                            {
                        echo 'Featured';
                            }
                            else 
                            {
                                echo 'Unfeatured';
                            }
                        
                        ?>
                        

                    </td>
                    
                    <td class="center">
                        <a href="<?php echo base_url();?>s_s_a/e_p_p/<?php echo $v_product_info->smile_product_id; ?>.html" title="Edit" class="btn-action glyphicons pencil btn-success"><i></i></a>
                        <a href="<?php echo base_url();?>s_s_a/delete_product_info/<?php echo $v_product_info->smile_product_id; ?>" title="Delete" class="btn-action glyphicons remove_2 btn-danger" onclick="return check_delete();"><i></i></a>

                        <?php 
                        if($v_product_info->smile_product_publication_status==1){
                        ?>
                        <a href="<?php echo base_url();?>s_s_a/unpublished_product/<?php echo $v_product_info->smile_product_id; ?>" title="Unpublished" class="btn-action glyphicons circle_arrow_down btn-warning"><i></i></a>
                        <?php 
                        }
                        else
                        {
                        ?>    

                        <a href="<?php echo base_url();?>s_s_a/published_product/<?php echo $v_product_info->smile_product_id; ?>" title="Published" class="btn-action glyphicons circle_arrow_top btn-primary"><i></i></a>
                        <?php 
                        }?>  
                        
                        
                        <?php 
                        if($v_product_info->smile_featured_product==1){
                        ?>
                        <a href="<?php echo base_url();?>s_s_a/unfeatured_product/<?php echo $v_product_info->smile_product_id; ?>" title="Unfeatured" class="btn-action glyphicons circle_minus btn-info"><i></i></a>
                        <?php 
                        }
                        else
                        {
                        ?>    

                        <a href="<?php echo base_url();?>s_s_a/featured_product/<?php echo $v_product_info->smile_product_id; ?>" title="Featured" class="btn-action glyphicons circle_plus btn-inverse"><i></i></a>
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