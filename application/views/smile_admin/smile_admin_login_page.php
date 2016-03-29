<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
	<title>Smile Mobile Admin Login Pannel</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<!-- bootstrap -->
        <link href="<?php echo base_url();?>smile_admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>smile_admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	
	<!-- bootstrap Extended -->
	<link href="<?php echo base_url();?>smile_admin/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>smile_admin/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>smile_admin/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
	
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url();?>smile_admin/theme/scripts/select2/select2.css"/>
	
	<!-- JQueryUI v1.9.2 -->
	<link rel="stylesheet" href="<?php echo base_url();?>smile_admin/theme/scripts/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css" />
	
	<!-- Glyphicons -->
	<link rel="stylesheet" href="<?php echo base_url();?>smile_admin/theme/css/glyphicons.css" />
	
	<!-- bootstrap Extended -->
	<link rel="stylesheet" href="<?php echo base_url();?>smile_admin/bootstrap/extend/bootstrap-select/bootstrap-select.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>smile_admin/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
	
	<!-- Uniform -->
	<link rel="stylesheet" media="screen" href="<?php echo base_url();?>smile_admin/theme/scripts/pixelmatrix-uniform/css/uniform.default.css" />

	<!-- JQuery v1.8.2 -->
	<script src="<?php echo base_url();?>smile_admin/theme/scripts/jquery-1.8.2.min.js"></script>
	
	<!-- Modernizr -->
	<script src="<?php echo base_url();?>smile_admin/theme/scripts/modernizr.custom.76094.js"></script>
	
	<!-- MiniColors -->
	<link rel="stylesheet" media="screen" href="<?php echo base_url();?>smile_admin/theme/scripts/jquery-miniColors/jquery.miniColors.css" />
	
	<!-- Theme -->
	<link rel="stylesheet" href="<?php echo base_url();?>smile_admin/theme/css/style.min.css?1363272449" />
	
	<!-- LESS 2 CSS -->
	<script src="<?php echo base_url();?>smile_admin/theme/scripts/less-1.3.3.min.js"></script>
	
        <script type="text/javascript" src="<?php echo base_url();?>js/jsval.js"></script>
</head>
<body>
	
	<!-- Start Content -->
	<div class="container-fluid fixed login">
		
		<div class="navbar main">
			<a href="#" class="appbrand"><span>Smile Mobile <span>Better Together</span></span></a>
			
						
			
		</div>
		
		<div id="login">
                    <form class="form-signin" method="post" action="<?php echo base_url();?>s_administrator/check_admin_login.html" autocomplete="on" onsubmit="return validateStandard(this)">
		<div class="widget widget-4">
			<div class="widget-head">
				<h4 class="heading">Restricted area</h4>
			</div>
		</div>
		<h2 class="glyphicons unlock form-signin-heading"><i></i> Please sign in</h2>
                <div>
                    <h3  style="color:red">
                        <?php 
                        $exc=$this->session->userdata('exception');
                                if(isset($exc)){
                                    echo $exc;
                                    $this->session->unset_userdata('exception');
                                }
                        
                        ?>
                    </h3>
                </div>
                <div>
                    <h3  style="color:green">
                        <?php 
                        $msg=$this->session->userdata('message');
                                if(isset($msg)){
                                    echo $msg;
                                    $this->session->unset_userdata('message');
                                }
                        
                        ?>
                    </h3>
                </div>
                
		<div class="uniformjs">
                    <input type="text" class="input-block-level" placeholder="Email address" title="Email Address" name="smile_admin_email_address" err="Please Enter valid Email Address" regexp="JSVAL_RX_EMAIL" required="required" > 
                        <input type="password" class="input-block-level" placeholder="Password"   title="Password"  name="smile_admin_password" required="required" err="Please Enter valid Password" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" > 
			<label class="checkbox"><input type="checkbox" value="remember-me">Remember me</label>
		</div>
                <button class="btn btn-large btn-primary" type="submit" name="btn">Sign in</button>
                  
	</form>
</div>		
				
	</div>
	
	<!-- JQueryUI v1.9.2 -->
	<script src="<?php echo base_url();?>smile_admin/theme/scripts/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>
	
	<!-- JQueryUI Touch Punch -->
	<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
	<script src="<?php echo base_url();?>smile_admin/theme/scripts/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- MiniColors -->
	<script src="<?php echo base_url();?>smile_admin/theme/scripts/jquery-miniColors/jquery.miniColors.js"></script>
	
	<!-- Select2 -->
	<script src="<?php echo base_url();?>smile_admin/theme/scripts/select2/select2.js"></script>
	
	<!-- Themer -->
	<script>
	var themerPrimaryColor = '#DA4C4C';
	</script>
	<script src="<?php echo base_url();?>smile_admin/theme/scripts/jquery.cookie.js"></script>
	<script src="<?php echo base_url();?>smile_admin/theme/scripts/themer.js"></script>
	
	
	<!-- Resize Script -->
	<script src="<?php echo base_url();?>smile_admin/theme/scripts/jquery.ba-resize.js"></script>
	
	<!-- Uniform -->
	<script src="<?php echo base_url();?>smile_admin/theme/scripts/pixelmatrix-uniform/jquery.uniform.min.js"></script>
	
	<!-- bootstrap Script -->
	<script src="<?php echo base_url();?>smile_admin/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- bootstrap Extended -->
	<script src="<?php echo base_url();?>smile_admin/bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
	<script src="<?php echo base_url();?>smile_admin/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script src="<?php echo base_url();?>smile_admin/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
	<script src="<?php echo base_url();?>smile_admin/bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>smile_admin/bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>smile_admin/bootstrap/extend/bootbox.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>smile_admin/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>smile_admin/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js" type="text/javascript"></script>
	
	<!-- Custom Onload Script -->
	<script src="<?php echo base_url();?>smile_admin/theme/scripts/load.js"></script>
	
	<!-- Layout Options -->
	<script src="<?php echo base_url();?>smile_admin/theme/scripts/layout.js"></script>
	
</body>
</html>