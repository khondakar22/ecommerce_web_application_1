<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons cogwheel"><i></i> Manage Product Comment</h3>
        <div class="clearfix"></div>
    </div>
    <div class="separator"></div>

    <div class="innerLR">
        <table class="table table-bordered table-condensed table-striped table-primary table-vertical-center checkboxs js-table-sortable">
            <thead>
                <tr>
                   
                    <th style="width: 1%;" class="center">Comments Id</th>
                    <th class="center">Product Name</th>
                    <th class="center">Comment Description</th>
                    <th class="center">Rating Status</th>
                     <th class="center">User Name</th>
                    <th class="center">Publication Status</th>
                    <th class="center" style="width: 60px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
               foreach ($all_product_comment as $v_product_comment){
                ?>
                <tr class="selectable">
                    
                    <td class="center"><?php echo $v_product_comment->smile_comment_id; ?></td>
                    <td class="center important"><?php echo $v_product_comment->smile_product_name; ?></td>
                     
                    <td class="center important"><?php echo $v_product_comment->smile_comment_description; ?></td>
                    
                    
                    <td class="center important">
                       <?php if($v_product_comment->smile_comment_product_rating_status==1){
                            echo 'Low';
                        }
                        elseif($v_product_comment->smile_comment_product_rating_status==2){
                            echo 'Average';
                        }
                         elseif($v_product_comment->smile_comment_product_rating_status==3){
                            echo 'Medium';
                        }
                         elseif($v_product_comment->smile_comment_product_rating_status==4){
                            echo 'Good';
                        }
                        else{
                            echo 'Best';
                        }
                        
                        
                        ?>
                    </td>
                     
                    
                    
                    <td class="center important"><?php echo $v_product_comment->smile_comment_user_name; ?></td>

                    <td class="center">
                        <?php 
                        if($v_product_comment->smile_comment_publication_status==1)
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
                        
                        <a href="<?php echo base_url();?>s_s_a/delete_product_comments/<?php echo $v_product_comment->smile_comment_id; ?>" title="Delete" class="btn-action glyphicons remove_2 btn-danger" onclick="return check_delete();"><i></i></a>

                        <?php 
                        if($v_product_comment->smile_comment_publication_status==1){
                        ?>
                        <a href="<?php echo base_url();?>s_s_a/unpublished_product_comments/<?php echo $v_product_comment->smile_comment_id; ?>" title="Unpublished" class="btn-action glyphicons circle_arrow_down btn-warning"><i></i></a>
                        <?php 
                        }
                        else
                        {
                        ?>    

                        <a href="<?php echo base_url();?>s_s_a/published_product_comments/<?php echo $v_product_comment->smile_comment_id; ?>" title="Published" class="btn-action glyphicons circle_arrow_top btn-primary"><i></i></a>
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