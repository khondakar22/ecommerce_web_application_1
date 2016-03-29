
<div id="content">
    <div class="widget widget-gray widget-body-white">
        <div class="widget-head">
            <h4 class="heading">Edit Product Order Information</h4>
        </div>
       
        
        
        <form  action="<?php echo base_url();?>s_s_a/update_order" method="post">
            
        <table>
            <tr> <td> Customer Name: </td> <td> <input type="text" disabled="disabled" name="order_customer_name" class="span5" value="<?php echo $order_info_details->first_name.' '.$order_info_details->last_name ;?>"/></td>  
                                                
            <tr> <td> Order Status: </td> <td> <input type="text" name="order_status" class="span5" value="<?php echo $order_info_details->order_status;?>"/></td>  
                                                <td> <input type="hidden" name="order_id" class="span5" value="<?php echo $order_info_details->order_id;?>"/></td>
            </tr>
            </tr>
            
            <tr> <td> Payment Status : </td> <td> <input type="text" name="payment_status" class="span5" value="<?php echo $order_info_details->payment_status;?>"/></td>  
                                      <td> <input type="hidden" name="payment_id" class="span5" value="<?php echo $order_info_details->payment_id;?>"/></td>           
            </tr>
            <tr> <td> Total Order Price : </td> <td> <input type="text" name="order_total" class="span5" value="<?php echo $order_info_details->order_total;?>"/></td>  
                                                
            </tr>
            
            
        
            
        <tr>
            <td></td> <td> <button type="submit" name="btn" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Update changes</button> </td>
					</tr>
        </table>
               
            </form>
</div>
</div>

