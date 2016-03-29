
<div id="content">
    <div class="widget widget-gray widget-body-white">
        <div class="widget-head">
            <h4 class="heading">Add Menubar Category</h4>
        </div>
        <div>
            <h3 style="color: #000099">
                <?php 
                
                $msg=$this->session->userdata('message');
                if(isset($msg)){
                    echo $msg;
                    $this->session->unset_userdata('message');
                }
                ?>
            </h3>
        </div>
        
        
        <form action="<?php echo base_url()?>s_s_a/save_menu_category" method="post">
            
        <table>
            <tr> <td> Menu Category Name: </td> <td> <input type="text" name="smile_menubar_category_name" class="span5"/></td>  </tr>
            <tr><td> Menu Category Description: </td><td> <textarea rows="4"class="span5" name="smile_menubar_category_description"></textarea></td></tr>
        
            <tr> <td><label> Menu Publication Status:</label> </td>
                <td> <select name="smile_menubar_category_publication_status">
							<optgroup>
								<option>Select...</option>
                                                                <option value="1">Yes</option>
                                                                <option value="0">No</option>
							</optgroup>
							
                    </select> </td> 
        </tr>
        <tr>
            <td></td> <td> <button type="submit" name="btn" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Save changes</button> </td>
					</tr>
        </table>
               
            </form>
</div>
</div>