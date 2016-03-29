<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons cogwheels"><i></i> Manage Sub Menu Bar Category</h3>
        <div class="buttons pull-right">
            <a href="<?php echo base_url() ?>s_s_a/a_s_m_b_c.html" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> Add Category</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="separator"></div>

    <div class="innerLR">
        <table class="table table-bordered table-condensed table-striped table-primary table-vertical-center checkboxs js-table-sortable">
            <thead>
                <tr>
                   
                    <th style="width: 1%;" class="center">Id</th>
                    <th class="center">Sub Category Name</th>
                    <th class="center">Menu Category Name</th>
                    <th class="center">Publication Status</th>
                    <th class="center" style="width: 60px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
               foreach ($select_all_sub_menu as $v_sub_menubar_category){
                ?>
                <tr class="selectable">
                    
                    <td class="center"><?php echo $v_sub_menubar_category->smile_sub_menubar_category_id; ?></td>
                    <td class="center important"><?php echo $v_sub_menubar_category->smile_sub_menubar_category_name; ?></td>
                    <td class="center important"><?php echo $v_sub_menubar_category->smile_menubar_category_name; ?></td>



                    <td class="center">
                        <?php 
                        if($v_sub_menubar_category->smile_sub_menubar_category_publication_status==1)
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
                        <a href="<?php echo base_url();?>s_s_a/e_s_m_b_c/<?php echo $v_sub_menubar_category->smile_sub_menubar_category_id; ?>.html" title="Edit" class="btn-action glyphicons pencil btn-success"><i></i></a>
                        <a href="<?php echo base_url();?>s_s_a/delete_sub_menu_bar_category/<?php echo $v_sub_menubar_category->smile_sub_menubar_category_id; ?>" title="Delete" class="btn-action glyphicons remove_2 btn-danger" onclick="return check_delete();"><i></i></a>

                        <?php 
                        if($v_sub_menubar_category->smile_sub_menubar_category_publication_status==1){
                        ?>
                        <a href="<?php echo base_url();?>s_s_a/unpublished_sub_menu_bar_category/<?php echo $v_sub_menubar_category->smile_sub_menubar_category_id; ?>" title="Unpublished" class="btn-action glyphicons circle_arrow_down btn-warning"><i></i></a>
                        <?php 
                        }
                        else
                        {
                        ?>    

                        <a href="<?php echo base_url();?>s_s_a/published_sub_menu_bar_category/<?php echo $v_sub_menubar_category->smile_sub_menubar_category_id; ?>" title="Published" class="btn-action glyphicons circle_arrow_top btn-primary"><i></i></a>
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