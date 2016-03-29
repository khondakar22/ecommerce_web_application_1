<div id="content">

    <div class="heading-buttons">
        <h3 class="glyphicons settings"><i></i> Manage Order</h3>
        <div>
   
    
</div>
      
        <div class="clearfix"></div>
    </div>
    <div class="separator"></div>

    <div class="innerLR">
        <table class="table table-bordered table-condensed table-striped table-primary table-vertical-center checkboxs js-table-sortable">
            <thead>
                <tr>
                   
                     <th style="width: 1%;" class="center">Order Id</th>
                    <th class="center">Customer Name</th>
                    <th class="center">Order total</th>
                    <th class="center">Order Date</th>
                    <th class="center">Order Status</th>
                   <th class="center">Payment Method</th>
                    <th class="center">Payment Status</th>
                    <th class="center" style="width: 60px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
               foreach ($all_order as $v_all_order){
                ?>
                <tr class="selectable">
                    
                    <td class="center"><?php echo $v_all_order->order_id;?></td>
                     <td class="center important"><?php echo $v_all_order->first_name.' '.$v_all_order->last_name;?></td>
                    
                    <td class="center important"><?php echo $v_all_order->order_total;?></td>
                    <td class="center important"><?php echo $v_all_order->order_date_time;?></td>
                    <td class="center important"><?php echo $v_all_order->order_status;?></td>

                    <td class="center important">
                        
                        <?php echo $v_all_order->payment_type;?>

                    </td>
                    <td class="center important"><?php echo $v_all_order->payment_status;?></td>
                    
                    <td class="center">
                        <a href="<?php echo base_url();?>s_s_a/e_o_p/<?php echo $v_all_order->order_id;?>" title="Edit" class="btn-action glyphicons pencil btn-success"><i></i></a>
                        
                          <a href="<?php echo base_url();?>s_s_a/view_invoice/<?php echo $v_all_order->order_id;?>" title="Invoice" class="btn-action glyphicons  list"><i></i></a>
                       
                        
                        

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

