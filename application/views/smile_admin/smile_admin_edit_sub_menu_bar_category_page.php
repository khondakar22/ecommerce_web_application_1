
<div id="content">
    <div class="widget widget-gray widget-body-white">
        <div class="widget-head">
            <h4 class="heading">Edit Sub Menu bar Category</h4>
        </div>
       
        
        
        <form name="edit_sub_menu_bar_category_form" action="<?php echo base_url();?>s_s_a/update_sub_menu_category" method="post">
            
        <table>
            <tr> <td> Menu Category Name: </td> <td> <input type="text" disabled="disabled" name="smile_menubar_category_name" class="span5" value="<?php echo $sub_menu_bar_cat_info->smile_menubar_category_name;?>"/></td>  
                                                <td> <input type="hidden" name="smile_menubar_category_id" class="span5" value="<?php echo $sub_menu_bar_cat_info->smile_menubar_category_id;?>"/></td>
            </tr>
            <tr> <td> Sub Menu Category Name: </td> <td> <input type="text" name="smile_sub_menubar_category_name" class="span5" value="<?php echo $sub_menu_bar_cat_info->smile_sub_menubar_category_name;?>"/></td>  
                                                <td> <input type="hidden" name="smile_sub_menubar_category_id" class="span5" value="<?php echo $sub_menu_bar_cat_info->smile_sub_menubar_category_id;?>"/></td>
            </tr>
            
            <tr><td> Sub Category Description: </td><td> <textarea rows="4"class="span5" name="smile_menubar_category_description"><?php echo $sub_menu_bar_cat_info->smile_menubar_category_description;?></textarea></td></tr>
        
            <tr> <td><label> Sub Menu Publication Status:</label> </td>
                <td> <select name="smile_sub_menubar_category_publication_status">
							<optgroup>
								<option>Select...</option>
                                                                <option value="1">Yes</option>
                                                                <option value="0">No</option>
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
                                    document.forms['edit_sub_menu_bar_category_form'].elements['smile_sub_menubar_category_publication_status'].value="<?php echo $sub_menu_bar_cat_info->smile_sub_menubar_category_publication_status;?>";
                        </script>