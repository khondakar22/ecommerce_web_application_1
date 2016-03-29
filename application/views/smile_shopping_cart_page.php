<div id="content_holder" class="fixed">
    <div class="inner">
      
      <h2 class="heading-title"><span>Shopping Cart</span></h2>
      <div id="content">
        <div class="cart-info">
          <table>
            <thead>
              <tr>
                <td class="remove">Remove</td>
                <td class="image">Image</td>
                <td class="name">Product Name</td>
                
                <td class="quantity">Quantity</td>
                <td class="price">Unit Price</td>
                <td class="total">Sub Total</td>
              </tr>
            </thead>
            <tbody>
              
                <?php 
                
                $contents=$this->cart->contents();
               /* echo '<pre>';
                print_r($contents);*/
                
                foreach($contents as $v_contents){
                
                
                ?>
                <tr>
                    <td class="remove"><a href="<?php echo base_url();?>cart/remove/<?php echo $v_contents['rowid']?>">Remove</a></td>
                <td class="image"><a href="#"><img src="<?php echo base_url().$v_contents['image'];?>" width="60" height="60" alt="Smile Mobile" /></a></td>
                <td class="name"><a href="#"><?php echo $v_contents['name']; ?></a> <span class="stock">***</span>
                  </td>
                
                <td class="quantity">
                    <form action="<?php echo base_url();?>cart/update_cart" method="post">
                        <input type="text" size="3" value="<?php echo $v_contents['qty']; ?>" name="qty"/>
                            <input type="hidden" size="3" value="<?php echo $v_contents['rowid']; ?>" name="rowid"/>
                            <input type="submit" size="3" name="btn" value="Update" style="font-size:10px; height:50px;  width:50px" >
                </form>
                </td>
                
                
                
                <td class="price">BDT&nbsp;<?php echo $v_contents['price'];?></td>
                <td class="total">BDT&nbsp;<?php echo $v_contents['subtotal'];?></td>
              </tr>
                <?php }?>
              
            </tbody>
          </table>
        </div>
          
          
          
        
        <div class="cart-total">
          <table>
            <tbody>
              <tr>
                <td colspan="5"></td>
                <td class="right"><b>Total:</b></td>
                <td class="right numbers"><?php 
                $total=$this->cart->total();
                echo 'BDT'.' '.$total;?></td>
              </tr>
              <tr>
                <td colspan="5"></td>
                <td class="right"><b>VAT 1.5%:</b></td>
                <td class="right numbers">
                     <?php
                        $total_vat= (1.5*$this->cart->total())/100;
                    
                        echo 'BDT'.' '.$total_vat;
                    ?>
                    
                </td>
              </tr>
              <tr>
                <td colspan="5"></td>
                <td class="right numbers_total"><b>Grand Total:</b></td>
                <td class="right numbers_total">
                    <?php
                    $grand_total=$total+$total_vat;
                    $sdata=array();
                    $sdata['grand_total']=$grand_total;
                    $this->session->set_userdata($sdata);
                        echo 'BDT'.' '.$grand_total;
                    ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="buttons">
          
            <div class="right"><a class="button" href="<?php echo base_url();?>checkout"><span>Checkout</span></a></div>
            <!--<div class="center"><a class="button" href="<?php echo base_url();?>welcome/p_v_s_m/<?php echo $v_contents['smile_sub_menubar_category_id']; ?>"><span>Continue Shopping</span></a></div>-->
        </div>
      </div>
    </div>
  </div>