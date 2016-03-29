<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Invoice #842393</title>
        <script type="text/javascript" src="<?php echo base_url();?>js/country.js"></script>
        <style type="text/css" >

            body,td,input,select {
                font-family: Tahoma;
                font-size: 12px;
                color: #000000;
            }

            form {
                margin: 0px;
            }

            a {
                color: #000000;
            }

            #wrapper {
                width: 600px;
            }

            #invoicetoptables {
                width: 100%;
                background-color: #cccccc;
                border-collapse: seperate;
            }

            td#invoicecontent {
                background-color: #ffffff;
                color: #000000;
            }

            .unpaid {
                font-size: 16px;
                color: #cc0000;
                font-weight: bold;
            }

            .paid {
                font-size: 16px;
                color: #779500;
                font-weight: bold;
            }

            .refunded {
                font-size: 16px;
                color: #224488;
                font-weight: bold;
            }

            .cancelled {
                font-size: 16px;
                color: #cccccc;
                font-weight: bold;
            }

            .collections {
                font-size: 16px;
                color: #ffcc00;
                font-weight: bold;
            }

            #invoiceitemstable {
                width: 100%;
                background-color: #cccccc;
                border-collapse: seperate;
            }

            td#invoiceitemsheading {
                background-color: #efefef;
                color: #000000;
                font-weight: bold;
                text-align: center;
            }

            td#invoiceitemsrow {
                background-color: #ffffff;
                color: #000000;
            }

            .creditbox {
                border: 1px dashed #cc0000;
                font-weight: bold;
                background-color: #FBEEEB;
                text-align: center;
                width: 100%;
                padding: 10px;
                color: #cc0000;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>
    <body bgcolor="#efefef">


        <table id="wrapper" cellspacing="1" cellpadding="10" bgcolor="#cccccc" align="center"><tbody><tr><td bgcolor="#ffffff">

                        <table width="100%"><tbody><tr><td width="50%">

                                        <p><h1>Smile Mobile Bd</h1></p>
                                    </td><td width="50%" align="center">

                                    </td></tr></tbody></table>

                        <br>


                        <table width="100%" id="invoicetoptables" cellspacing="0"><tbody><tr>
                                    <td colspan="2" id="invoicecontent" style="border:1px solid #cccccc">

                                        <table width="100%" height="100" cellspacing="0" cellpadding="10" id="invoicetoptables"><tbody><tr>
                                                    <td width="50%" valign="top" id="invoicecontent" style="border:1px solid #cccccc">

                                                        <strong>Invoice To</strong><br>
                                                        <?php echo $customer_info->company_name;?><br><?php echo $customer_info->first_name.' '.$customer_info->last_name;?><br>
                                                        <?php echo $customer_info->address_01;?> <br>
                                                        <?php echo $customer_info->city;?>, <?php echo $customer_info->zip_code5;?><br>
                                                        <script type="text/javascript">
                                                            //var key=<?php // echo $customer_info->country;?>
                                                           // alert(123);
                                                         document.write(getCountryFullName('<?php  echo $customer_info->country_name;?>'));
                                                        </script>
                                                    </td>
                                                    <td width="50%" valign="top" id="invoicecontent" style="border:1px solid #cccccc">

                                                        <strong>Ship To</strong><br>
                                                        <?php echo $shipping_info->company;?><br><?php echo $shipping_info->shipping_name;?><br>
                                                        <?php echo $shipping_info->address;?> <br>
                                                        <?php echo $shipping_info->shipping_city;?>, <?php echo $shipping_info->postal_code;?><br>
                                                        <script type="text/javascript">
                                                            //var key=<?php // echo $customer_info->country;?>
                                                           // alert(123);
                                                         document.write(getCountryFullName('<?php  echo $shipping_info->shipping_country;?>'));
                                                        </script>

                                                    </td>
                                                </tr>
                                            </tbody></table>

                                    </td>
                                    <!--
                                    <td width="50%" id="invoicecontent" style="border:1px solid #cccccc;border-left:0px;">
                                    <table width="100%" height="100" cellspacing="0" cellpadding="10" id="invoicetoptables">
                                    <tr>
                                    <td id="invoicecontent" valign="top" style="border:1px solid #cccccc">
                                    <strong>Pay To</strong><br />
                                    
                                    </td></tr></table>
                                    </td>
                                    -->
                                </tr></tbody></table>

                        <p><strong>Invoice #<?php echo 1000 + $this->session->userdata('order_id'); ?></strong><br>
                            Invoice Date: <?php echo date("d/m/Y")?><br>
                            Due Date: <?php echo date("d/m/Y",  strtotime("+7 day"))?>
                            <br/>
                            Payment Status : Pending
                        </p>
                            

                        <table cellspacing="0" id="invoiceitemstable" align="center">
                            <tbody>
                                <tr>
                                    <td id="invoiceitemsheading" align="center" width="70%" style="border:1px solid #cccccc;border-bottom:0px;"><strong>Product Name</strong></td>
                                    <td id="invoiceitemsheading" align="center" width="70%" style="border:1px solid #cccccc;border-bottom:0px;"><strong>Product Price</strong></td>
                                    <td id="invoiceitemsheading" align="center" width="70%" style="border:1px solid #cccccc;border-bottom:0px;"><strong>Product Quantity</strong></td>
                                    <td id="invoiceitemsheading" align="center" width="30%" style="border:1px solid #cccccc;border-left:0px;border-bottom:0px;"><strong>Subtotal</strong></td>
                                </tr>
                                <?php
                                $contents=$this->cart->contents();
                                    foreach($contents as $cart_value)
                                    {
                                ?>
                                <tr bgcolor="#ffffff">
                                    <td id="invoiceitemsrow" style="border:1px solid #cccccc;border-bottom:0px;">*<?php echo $cart_value['name'];?></td>
                                    <td align="center" id="invoiceitemsrow" style="border:1px solid #cccccc;border-bottom:0px;border-left:0px;"><?php echo $cart_value['price'];?></td>
                                    <td align="center" id="invoiceitemsrow" style="border:1px solid #cccccc;border-bottom:0px;"><?php echo $cart_value['qty'];?></td>
                                    <td align="center" id="invoiceitemsrow" style="border:1px solid #cccccc;border-bottom:0px;border-left:0px;"><?php echo $cart_value['subtotal'];?></td>
                                </tr>
                                    <?php } ?>
                                <tr>
                                    <td id="invoiceitemsheading" style="border:1px solid #cccccc;border-bottom:0px;"><div align="right"></div></td>
                                    <td id="invoiceitemsheading" style="border:1px solid #cccccc;border-bottom:0px;"><div align="right"></div></td>
                                    <td id="invoiceitemsheading" style="border:1px solid #cccccc;border-bottom:0px;"><div align="right">Total:&nbsp;</div></td>
                                    <td id="invoiceitemsheading" align="center" style="border:1px solid #cccccc;border-bottom:0px;border-left:0px;"><strong><?php echo $this->cart->total() ;?></strong></td>
                                </tr>
                                <tr>
                                    <td id="invoiceitemsheading" style="border:1px solid #cccccc;border-bottom:0px;"><div align="right"></div></td>
                                    <td id="invoiceitemsheading" style="border:1px solid #cccccc;border-bottom:0px;"><div align="right"></div></td>
                                    <td id="invoiceitemsheading" style="border:1px solid #cccccc;border-bottom:0px;"><div align="right">1.5% Vat:&nbsp;</div></td>
                                    <td id="invoiceitemsheading" align="center" style="border:1px solid #cccccc;border-bottom:0px;border-left:0px;"><strong><?php $vat_total=$this->cart->total() * 0.015; echo $vat_total;?></strong></td>
                                </tr>
                                <tr>
                                    <td id="invoiceitemsheading" style="border:1px solid #cccccc;border-bottom:0px;"><div align="right"></div></td>
                                    <td id="invoiceitemsheading" style="border:1px solid #cccccc;border-bottom:0px;"><div align="right"></div></td>
                                    <td id="invoiceitemsheading" style="border:1px solid #cccccc;border-bottom:0px;"><div align="right">Grand Total:&nbsp;</div></td>
                                    <td id="invoiceitemsheading" align="center" style="border:1px solid #cccccc;border-bottom:0px;border-left:0px;"><strong><?php echo $this->cart->total()+ $vat_total;?></strong></td>
                                </tr>
                                
                            </tbody>
                        </table>


                        


                        <br><br><br><br><br>

                    </td></tr></tbody></table>


        <p align="center"><a href="#">Ã‚Â« Back to Client Area</a> | <a href="#">Download</a> | <a href="javascript:window.close()">Close Window</a></p>


        </body></html>