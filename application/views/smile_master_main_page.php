<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<link rel="stylesheet" href="<?php echo base_url();?>stylesheet/stylesheet.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>stylesheet/jquery-ui-1.8.9.custom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>facebook_icon/css/style1.css" />


<!-- jQuery and Custom scripts -->
<script src="<?php echo base_url();?>js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/jquery.cycle.lite.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/custom_scripts.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/jquery.roundabout.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8.9.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/country.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/tabs.js"></script>
<!-- SLIDER AND LIGHTBOXES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/lightbox-0.5/css/jquery.lightbox-0.5.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/prettyphoto/css/prettyPhoto.css" />
<script type="text/javascript" src="<?php echo base_url();?>js/li-slider/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/lightbox-0.5/js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/prettyphoto/js/jquery.prettyPhoto.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/li-slider/skins/Trend/skin.css" />
<script type="text/javascript" src="<?php echo base_url();?>js/li-slider/js/li-slider-animations-1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/li-slider/js/li-slider-1.1.min.js"></script>
<link rel="shortcut icon" href="<?php echo base_url();?>image/favicon.ico" type="image/x-icon"> </link>
    <link rel="icon" href="<?php echo base_url();?>image/favicon.ico" type="image/x-icon"> </link>
    <script type="text/javascript" src="<?php echo base_url();?>js/jsval.js"></script>
<script type="text/javascript"> 
    	$(window).load(	
			function() {
				$("#big_slider").sp_Li_Slider({						
					animation						: "Regular-Exception",	// type of Animation: Regular, Random, Regular-Custom, Random-Custom, Regular-Exception, Random-Exception  			
					transitions					: 'None',				// None|transition_name(s) // List of custom animations - for full list please reference to the preview (works only with "Regular-Custom, Random-Custom, Regular-Exception , Random-Exception ")
					auto_play 					: true,   			// true|false - auto play on start
					repeat	 						: true,					// true|false|number - how many times to repeat all slides
					modalMode						:	'prettyPhoto',// lightBox|prettyPhoto|off
					goToSlideOnStart		:	1,						// value //any slide number starting from 1 or url?sp_slide=2
					timer								: 'line_bottom',// no|line_bottom|line_top|line_right|line_left
					pauseOnMouseOver		:	true,					// true|false
					tooltip							:	'image',			// none|text|image
					tooltipSize					: 20,						// value // % of slider dimentions from 0 to 100. Use 0 to disable it
					shuffle							:	false,				// true|false - randomize the images order
					delay     					: 3000,					// value // time period of a photos displaying /default - 3000 (3 sec)
					trans_period				:	800,					// value // time period of chenging the photos /default - 1000 (1 sec)
					vert_sections				:	10,						// value // number of vertical sectors (only for Animation type Blind) /default - 15
					sqr_sections_Y			:	4,						// value // number of squeres by vertical (only for Animation type Sqr) /default - 5
					active_links				:	true,					// true|false //activate links of photos /default - true
					buttons_show				:	true,					// true|false //show all buttons 		/default - true
					play_pause_show			:	true,					// true|false //show Play or Pause buttons	/default - true
					next_prev_show			:	true,					// true|false //show Next or Prev buttons	/default - true
					auto_hide 					: true,					// true|false // auto hide buttons ot start (when auto_play is true)
					buttons_show_time		:	1000,					// value 			//time period befor displayins of the buttons 	/default - 100
					buttons_show_delay	:	200,					// value //time period for appearing of the buttons		/default - 300
					buttons_hide_time 	:	1000,					// value //time period befor disappearing of the buttons/default - 2000
					buttons_hide_delay	:	200						// value //time period for disappearing of the buttons	/default - 500
				});
			}
		);		
</script>
<!-- Tipsy -->
<script src="<?php echo base_url();?>js/tipsy/jquery.tipsy.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>js/tipsy/css.tipsy.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>js/jquery.tweet.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>js/jquery.tweet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- MAIN WRAPPER -->
<div id="container"> 
  
  <!-- SIDEFEATURES -->
  <div id="sidefeatures">
    <ul>
      <li class="side_cart"><span class="icon">Shopping Cart</span>
        <div id="cart">
          <div class="heading">
            <h4>Shopping Cart</h4>
            <span id="cart_total"><?php // echo $this->cart->total_items();?> item(s) - 
                <?php
                $total=$this->cart->total();
                $total_vat=$total*0.015;
                $grand_total=$total+$total_vat;
                echo 'BDT'.' '.$grand_total;
            ?>   </span> </div>
          <div class="content">
            <table class="cart">
              <tbody>
                  <?php
            $contents=$this->cart->contents();
                foreach($contents as $v_contents){
                ?>
                <tr>
                  <td class="image"><a href="#"><img alt="SmileMobile" src="<?php echo base_url().$v_contents['image'];?>" width="25" height="25"/></a></td>
                  <td class="name"><a href="#"><?php echo $v_contents['name']; ?></a>
                    <div> </div></td>
                  <td class="quantity"><?php echo $v_contents['qty']; ?></td>
                  <td class="total">BDT&nbsp;<?php echo $v_contents['subtotal'];?></td>
                  <td class="remove"><a href="<?php echo base_url();?>cart/remove/<?php echo $v_contents['rowid']?>">Remove</a></td>
                </tr>
                <?php } ?>
                
              </tbody>
            </table>
            <table class="total">
              <tbody>
               <tr>
                  <td align="right"><b>Total</b></td>
                  <td align="right">BDT&nbsp;<?php echo $this->cart->total();?></td>
                </tr>
                <tr>
                  <td align="right"><b>VAT 1.5%</b></td>
                  <td align="right"><?php
                        $total_vat= (1.5*$this->cart->total())/100;
                    
                        echo 'BDT'.' '.$total_vat;
                    ?></td>
                </tr>
                <tr>
                  <td align="right"><b>Grand-Total</b></td>
                  <td align="right"> <?php
                        echo 'BDT'.' '.($total_vat+$this->cart->total());
                    ?></td>
                </tr>
              </tbody>
            </table>
              <div class="checkout"><a class="button" href="<?php echo base_url();?>checkout"><span>Checkout</span></a></div>
          </div>
        </div>
      </li>
     
      <li class="side_search"><span class="icon">Search</span>
        <div id="search">
          <input type="text" onkeydown="this.style.color = '#000000';" onclick="this.value = '';" value="Search" name="filter_name"/>
          <a href="#" class="button-search"></a> </div>
      </li>
    </ul>
  </div>
  <!-- END OF SIDEFEATURES --> 
  
  <!-- HEADER -->
  
  <div id="header">
    <div class="inner">
      <ul class="main_menu menu_left">
        <?php 
        foreach ($header_category as $v_header_category){
        ?>
          <li><a href="<?php echo base_url();?>welcome/p_v_b_h_c/<?php echo $v_header_category->smile_header_category_id;?>.html"><?php echo $v_header_category->smile_header_category_name;?></a></li>
        <?php 
        }
        ?>
        <li><a href="<?php echo base_url();?>">Home</a>
          
        </li>
      </ul>
      <div id="logo"><a href="index.html"><img src="<?php echo base_url().$select_logo->smile_logo_image;?>" width="120" height="80" alt="Spicylicious store" /></a></div>
      <ul class="main_menu menu_right">
        <?php
        foreach ($header_restoff_category as $v_header_rest_catgory){
        ?>
          <li><a href="<?php echo base_url();?>welcome/p_v_b_h_r_c/<?php echo $v_header_rest_catgory->smile_rest_header_id;?>.html"><?php echo $v_header_rest_catgory->smile_rest_header_category_name; ?></a></li>
        <?php 
        }
        ?>
      </ul>
     
      
      <div id="welcome">  <?php
                            $customer_id=$this->session->userdata('smile_customer_id');
                            $customer_name=$this->session->userdata('customer_name');
                            $activation_status=$this->session->userdata('activation_status');
                            if($customer_id !=NULL && $activation_status == 1 )
                            {
                        ?>
                        Welcome <?php echo $this->session->userdata('customer_name');?> you can
                        <a href="<?php echo base_url();?>welcome/customer_logout">Logout</a> 
                            <?php } 
                            else{
                            ?>
                        Welcome visitor you can
                        <a href="<?php echo base_url();?>welcome/customer_login">login</a> or <a href="<?php echo base_url();?>customer_registration/account_registar">create an account</a>.
                            <?php } ?> </div>
     
      
      
      <div class="menu">
        <ul id="topnav">
          
            <?php 
            $i=0;
        foreach ($all_menu_category as $v_menu_cat){
            
            if($i==0){
                
            
            ?>
            
            
            <li><a href="#"><?php echo $v_menu_cat->smile_menubar_category_name;?></a>
            
                <ul class="children">
                    
                <?php 
            foreach ($all_sub_menu_category as $v_sub_cat){
                ?>    
                    <li><a href="<?php echo base_url();?>welcome/p_v_s_m/<?php echo $v_sub_cat->smile_sub_menubar_category_id;?>.html"><?php echo$v_sub_cat->smile_sub_menubar_category_name;?></a></li>
            
            <?php }?>
                </ul>
                
          </li>
            <?php }
            else{
            
            ?>
            
            
            <?php ?>
            <li><a href="<?php echo base_url();?>welcome/p_v_b_m_c/<?php echo $v_menu_cat->smile_menubar_category_id;?>.html"><?php echo $v_menu_cat->smile_menubar_category_name;?></a>
            
        <?php }
        $i++;
        }
        ?>
          </li>
          
          
          
        </ul>
      </div>
    </div>
  </div>
  <!-- END OF HEADER --> 
  
  <!-- BIG SLIDESHOW -->
  <?php 
  if(isset($slide_show)){
  ?>
  <div id="slideshow_big">
    <div class="inner"> 
      <!-- Slider Start -->
      <div id="big_slider" class="li-banner">
        <ul>
            <?php 
              foreach ($select_banner as $v_banner){
            ?>
            <li><img src="<?php echo base_url().$v_banner->smile_banner_image; ?>" alt="<?php echo $v_banner->smile_banner_name;?>" /></li>
              <?php }?>
        </ul>
      </div>
      <!-- Slider End --> 
    </div>
  </div>
  <?php 
  }
  ?>
  <!-- END OF BIG SLIDESHOW --> 
  
  <!-- CONTENT -->
  <?php echo $smile_master_middle_content;?>
  <!-- END OF CONTENT --> 
  
  <!-- PRE-FOOTER -->
  
  <!-- END OF PRE-FOOTER --> 
  
  <!-- FOOTER -->
  <div id="footer">
    <div class="inner">
      <div class="column_big"> 
        <!-- FOOTER MODULES AREA -->
        <div class="footer_modules">
          
        </div>
        <!-- END OF FOOTER MODULES AREA -->
        
      </div>
      <div class="column_small">
        <h3>Customer Service</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="<?php echo base_url();?>welcome/account_registratrion.html">My Account</a></li>
          <li><a href="<?php echo base_url();?>welcome/prodcut_details_veiw.html">Order History</a></li>
          <li><a href="<?php echo base_url();?>welcome/shipping_details.html">Wishlist</a></li>
          <li><a href="#">Newsletter</a></li>
          <li><a href="#">Returns</a></li>
        </ul>
      </div>
      <div class="column_small">
        <h3>Information</h3>
        <ul>
            <li><a href="<?php echo base_url();?>about_us.html">About Us</a></li>
          <li><a href="<?php echo base_url();?>welcome/prodcut_view_by_sub_category.html">Delivery Information</a></li>
          <li><a href="#">Privacy policy</a></li>
          <li><a href="#">Terms and conditions</a></li>
          <li><a href="<?php echo base_url()?>welcome/contact_us.html">Contact Us</a></li>
          <li><a href="sitemap.html">site map</a></li>
        </ul>
      </div>
      <div class="column_small">
        <h3>Extras</h3>
        <ul>
            <li><a href="<?php echo base_url();?>cart/add_to_cart.html">Shopping Cart</a></li>
          <li><a href="<?php echo base_url();?>welcome/check_out.html">Checkout</a></li>
          <li><a href="#">Affiliates</a></li>
          <li><a href="#">Specials</a></li>
        </ul>
      <div class="clear"></div>
      <div>
                        <h3>Spread the word</h3>
                        <!-- AddThis Button BEGIN -->
                        <a href="#" class="nbs-social-rss"></a> 

<a href="https://www.facebook.com/smilemobilebdcom" class="nbs-social-facebook"></a> 
<a href="#" class="nbs-social-twitter"></a> 
<a href="#" class="nbs-social-googleplus"></a> 
<a href="#" class="nbs-social-linkedin"></a>

<a href="#" class="nbs-social-youtube"></a>
<a href="#" class="nbs-social-vimeo"></a>

                    </div>
      
      </div>
        
        
      <div class="clear"></div>
      <span class="copyright1"> Copyright &copy; <a href="<?php echo base_url();?>">Smile Mobile Bd </a> </span>
      
      <span class="copyright">Developed by <a href="https://www.facebook.com/riyadislam786">Khondakar Readul Islam</a> </span> </div>
  </div>
  
  
  <!-- END OF FOOTER --> 
  
</div>
<!-- END OF MAIN WRAPPER --> 
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> 
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/d_koev.json?callback=twitterCallback2&amp;count=3"></script> 
<script type="text/javascript"><!--
$(document).ready(function() {
$('#twitter_update_list').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		next:   '#tweet_next', 
    	prev:   '#tweet_prev'
		}); 
		});
//--></script> 
<script type="text/javascript"><!--
$('#tabs a').tabs();
//--></script> 
<script type="text/javascript"><!--
$(function() {
		$( "#accordion" ).accordion({
			autoHeight: false,
			navigation: true
		});
	});
//--></script>


<script type="text/javascript"><!--
$(document).ready(function(){

    $("a.comment_switch").toggle(function(){
        $(this).addClass("swap");
        $(".box-rating").fadeOut("fast", function() {
            $(this).fadeIn("fast").addClass("box-review");
        });
    }, function () {
        $(this).removeClass("swap");
        $(".box-rating").fadeOut("fast", function() {
            $(this).fadeIn("fast").removeClass("box-review");
        });
    });

});
//--></script>



<script type="text/javascript">
   $(document).ready(function() {
		var interval;
		$('ul#myRoundabout')
		.roundabout({
		  	'btnNext': '.next_round',
			'btnPrev': '.previous_round' 
		  }
		  )
		.hover(
		function() {

		clearInterval(interval);
		},
		function() {

		interval = startAutoPlay();
		});

		interval = startAutoPlay();
		});
		function startAutoPlay() {
		return setInterval(function() {
		$('ul#myRoundabout').roundabout_animateToPreviousChild();
		}, 3000);
	} 
</script>
</body>
</html>