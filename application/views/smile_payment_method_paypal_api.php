<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Website Payment Standard</title>
<script type="text/javascript" language="javascript">
function paypal_submit()
{
	//var actionName='https://www.paypal.com/cgi-bin/webscr';
	var actionName='https://www.sandbox.paypal.com/cgi-bin/webscr';
	
   	document.forms.frmOrderAutoSubmit.action=actionName;
   	document.forms.frmOrderAutoSubmit.submit();
}
</script>
</head>
<!--onload="paypal_submit();"-->
<body onload="paypal_submit();" >
<form style=" padding:0px;margin:0px;" name="frmOrderAutoSubmit" method="post" >
		<!--<input type="hidden" name="return" value="<?//=base_url()?>paymentMethods/payment_utility/paymentSuccess/<?//=$order_row_id?>.html">
		<input type="hidden" name="cancel_return" value="<?//=base_url()?>paymentMethods/payment_utility/cancelExpressCheckoutSale/<?//=$order_row_id?>.html">-->

		<input type="hidden" name="upload" value="1">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="altufaltu54@gmail.com">

        
            <table>
                <?php
                                $contents=$this->cart->contents();
                                    foreach($contents as $cart_value)
                                    {
                                ?>
                <tr>
                    <td>
                        <input type="hidden" name="quantity" value="<?php echo $cart_value['qty'];?>" />
		<input type="hidden" name="item_name" value="<?php echo $cart_value['name'];?>"/>
		<input type="hidden" name="amount" value="<?php echo $cart_value['price'];?>"/>
                    </td>
                    <?php }
                    ?>
                </tr>
		
                
                
                    </table>
                    

		<input type="hidden" name="rm" value="2" />
		<input TYPE="hidden" name="address_override" value="0">
		<!--<input type="hidden" name="first_name" value="<?//=$customer_info->shipping_name?>">
		<input type="hidden" name="last_name" value=""> -->


        <input type="hidden" name="address1" value="<?php 
        $ship_address=$this->session->userdata('shipping_address');
        echo $ship_address;
        ?>"/>
		<input type="hidden" name="address2" value="">
		<input type="hidden" name="city" value="<?php 
                $ship_city=$this->session->userdata('shipping_city');
        echo $ship_city; ?>"/>
		<input type="hidden" name="state" value="">
		<input type="hidden" name="zip" value="<?php 
                $ship_postal=$this->session->userdata('shipping_postal_code');
        echo $ship_postal;
                ?>"/>


        <!--<input type="hidden" name="night_phone_a" value="">
		<input type="hidden" name="night_phone_b" value="">
		<input type="hidden" name="night_phone_c" value=""> -->

	</form>
</body>
</html>