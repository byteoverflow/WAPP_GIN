<!DOCTYPE HTML>

<html>
	<head>
		<title>IAM Power - Login</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--5grid--><script src="<?php echo base_url('assets/css/5grid/viewport.js'); ?>"></script>
		<!--[if lt IE 9]><script src="<?php echo base_url('assets/css/5grid/ie.js') ?>"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/5grid/core.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/loginFormStyle.css'); ?>" />
		<!--[if IE 9]><link rel="stylesheet" href="<?php echo base_url('assets/css/style-ie9.css'); ?>" /><![endif]-->
		
		<link rel="stylesheet" href="<?php echo base_url('assets/css/formsStyle.css'); ?>" />
	</head>
	<body>
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="5grid">
				<div class="12u-first">
					
					<header id="header">
						<h1></h1>
						<nav>
							<a href="<?php echo base_url('index.php/main/index') ?>">Home</a>
							<a href="<?php echo base_url('index.php/main/about') ?>">About</a>
							<a href="<?php echo base_url('index.php/main/join') ?>">Join Now</a>
							<a href="<?php echo base_url('index.php/main/faqs') ?>">FAQs</a>
							<a href="<?php echo base_url('index.php/main/contact') ?>">Contact Us</a>
							<a href="<?php echo base_url('index.php/main/login') ?>" class="current-page-item">Members Login</a>
						</nav>
					</header>				
				
				</div>
			</div>
		</div>
		<div id="main">
			<div class="5grid">
				<div class="main-row">
					<div class="12u-first">							
							<table>
								<tr>
								 <td width="50%"></td>
								 <td>						 	
								 	<form class="form1" action="<?php echo base_url('index.php/main/content'); ?>" method="post">
										<div class="formtitle">Login to your account</div>				
										<div class="input">
											<div class="inputtext">Username: </div>
											<div class="inputcontent">				
												<input type="text" name="txtUsername" />				
											</div>
										</div>
										<div class="input nobottomborder">
											<div class="inputtext">Password: </div>
											<div class="inputcontent">				
												<input type="password" name="txtPassword" />
												<!-- <br/><a href="#">Forgot password?</a>				 -->
											</div>
										</div>
										<div class="buttons">				
											<input class="orangebutton" type="submit" value="Login" />
										</div>														
									</form>						 	
								 </td>
								 <td width="50%"> </td>							
								</tr>
								<tr style="height: 10px;"></tr>								
								<tr>									
									<td width="50%"> </td>	
									<td style="text-align: center; color:#E13300"> 
										<?php 
											if(isset($invalidLogin))
											{
												echo $invalidLogin;
											}
										?>
									</td>	
									<td width="50%"> </td>									
								</tr>						
							</table>
					</div>
				</div>
			</div>
		</div>
		<div id="footer-wrapper">
			
			<div align="center" style="color:#FFFFFF">
				&copy; 2015 IAM Power Website.
			</div>
			
		</div>
	<!-- ********************************************************* -->
	</body>
</html>