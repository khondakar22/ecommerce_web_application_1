<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons settings"><i></i> Manage Logo</h3>
        <div class="buttons pull-right">
            <a href="<?php echo base_url() ?>s_s_a/a_l.html" class="btn btn-primary btn-icon glyphicons circle_plus"><i></i> Add Logo</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="separator"></div>

    <div class="innerLR">
        <table class="table table-bordered table-condensed table-striped table-primary table-vertical-center checkboxs js-table-sortable">
            <thead>
                <tr>
                    
                    <th style="width: 1%;" class="center">Logo Id</th>
                    <th class="center">Logo Name</th>
                    <th class="center">Image</th>
                    <th class="center">Publication Status</th>
                    <th class="center">Publication Date</th>
                    <th class="center" style="width: 60px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($all_logo_item as $v_logo) {
                    ?>
                    <tr class="selectable">
                        
                        <td class="center important"><?php echo $v_logo->smile_logo_id; ?></td>
                        <td class="center important"><?php echo $v_logo->smile_logo_name; ?></td>
                        <td class="center"><img src="<?php echo base_url().$v_logo->smile_logo_image;?>" height="40" width="120" /></td>


                        <td class="center important">
                            <?php
                            if ($v_logo->smile_logo_publication_status == 1) {
                                echo 'Published';
                            } else {
                                echo 'Unpublished';
                            }
                            ?>

                        </td>
                        <td class="center important"><?php echo $v_logo->smile_logo_publication_date; ?></td>
                        <td class="center">

                            <a href="<?php echo base_url();?>s_s_a/delete_logo/<?php echo $v_logo->smile_logo_id;?>" title="Delete" class="btn-action glyphicons remove_2 btn-danger" onclick="return check_delete();"><i></i></a>
    <?php
    if ($v_logo->smile_logo_publication_status == 1) {
        ?>
                                <a href="<?php echo base_url();?>s_s_a/unpublished_logo/<?php echo $v_logo->smile_logo_id;?>" title="Unpublished" class="btn-action glyphicons circle_arrow_down btn-warning"><i></i></a>
                                <?php
                            } else {
                                ?>

                                <a href="<?php echo base_url();?>s_s_a/published_logo/<?php echo $v_logo->smile_logo_id;?>" title="Published" class="btn-action glyphicons circle_arrow_top btn-primary"><i></i></a>
                                <?php }
                            ?>

                        </td>
                    </tr>
                        <?php } ?>
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