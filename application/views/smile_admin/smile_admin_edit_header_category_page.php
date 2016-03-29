
<div id="content">
    <div class="widget widget-gray widget-body-white">
        <div class="widget-head">
            <h4 class="heading">Add Header  Category</h4>
        </div>
        
        
        
        <form name="edit_header_category_form" action="<?php echo base_url()?>s_s_a/update_header_category" method="post">
            
        <table>
            <tr> <td> Category Name: </td> <td> <input type="text" name="smile_header_category_name" class="span5" value="<?php echo $header_cat_info->smile_header_category_name;?>"/></td>
                                           <td> <input type="hidden" name="smile_header_category_id" class="span5" value="<?php echo $header_cat_info->smile_header_category_id;?>"/></td>      
            </tr>
            <tr><td> Category Description: </td><td> <textarea rows="4"class="span5" name="smile_header_category_description"><?php echo $header_cat_info->smile_header_category_description;?></textarea></td></tr>
        
            <tr> <td><label> Publication Status:</label> </td>
                <td> <select name="smile_header_cateogry_publication_status">
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
                                    document.forms['edit_header_category_form'].elements['smile_header_cateogry_publication_status'].value="<?php echo $header_cat_info->smile_header_cateogry_publication_status;?>";
                        </script>