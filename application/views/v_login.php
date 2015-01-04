<!DOCTYPE HTML>

<html>
	<head>
		<title>Global Information Network - Login</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--5grid--><script src="<?php echo base_url('assets/css/5grid/viewport.js'); ?>"></script>
		<!--[if lt IE 9]><script src="<?php echo base_url('assets/css/5grid/ie.js') ?>"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/5grid/core.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
		<!--[if IE 9]><link rel="stylesheet" href="<?php echo base_url('assets/css/style-ie9.css'); ?>" /><![endif]-->
	</head>
	<body>
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="5grid">
				<div class="12u-first">
					
					<header id="header">
						<h1>Global Information Network</h1>
						<nav>
							<a href="<?php echo base_url('index.php/main/index') ?>">Home</a>
							<a href="<?php echo base_url('index.php/main/about') ?>">About GIN</a>
							<a href="<?php echo base_url('index.php/main/join') ?>">Join Now</a>
							<a href="<?php echo base_url('index.php/main/faqs') ?>">FAQs</a>
							<a href="<?php echo base_url('index.php/main/contact') ?>">Contact Us</a>
							<a href="<?php echo base_url('index.php/main/login') ?>" class="current-page-item">Website Login</a>
						</nav>
					</header>				
				
				</div>
			</div>
		</div>
		<div id="main">
			<div class="5grid">
				<div class="main-row">
					<div class="12u-first">	
							<div class="container">
								<section id="content">
									<form action="">
										<h1>Login Form</h1>
										<div>
											<input type="text" placeholder="Username" required="" id="username" />
										</div>
										<div>
											<input type="password" placeholder="Password" required="" id="password" />
										</div>
										<div>
											<input type="submit" value="Log in" />
											<a href="#">Lost your password?</a>
										</div>
									</form><!-- form -->
									
								</section><!-- content -->
							</div><!-- container -->
						
					</div>
				</div>
			</div>
		</div>
		<div id="footer-wrapper">
			
			<div align="center" style="color:#FFFFFF">
				&copy; 2015 Global Information Network Website.
			</div>
			
		</div>
	<!-- ********************************************************* -->
	</body>
</html>