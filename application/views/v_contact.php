<!DOCTYPE HTML>

<html>
	<head>
		<title>Global Information Network - Contact Us</title>
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
							<a href="<?php echo base_url('index.php/main/contact') ?>" class="current-page-item">Contact Us</a>
							<a href="<?php echo base_url('index.php/main/login') ?>">Website Login</a>
						</nav>
					</header>				
				
				</div>
			</div>
		</div>
		<div id="main">
			<div class="5grid">
				<div class="main-row">
					<div class="12u-first">	
							<h2>Contact Us</h2>	
							<p>Please use the form below to contact the Global Information Network with any questions and/or comments that you may have. If a response is required, you will receive one promptly.</p>
							
							<div id="contact-form" class="clearfix">
							    <ul id="errors" class="">
							        <li id="info">There were some problems with your form submission:</li>
							    </ul>
							    <p id="success">Thanks for your message! We will get back to you ASAP!</p>
							    <form method="post" action="process.php">
							        <label for="name">Name: <span class="required">*</span></label>
							        <input type="text" id="name" name="name" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
							         
							        <label for="email">Email Address: <span class="required">*</span></label>
							        <input type="email" id="email" name="email" value="" placeholder="johndoe@example.com" required="required" />
							         
							        <label for="subject">Subject: <span class="required">*</span></label>
							        <input type="text" id="subject" name="subject" value="" placeholder="Subject" required="required" />
							         
							        <label for="message">Message: <span class="required">*</span></label>
							        <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required="required" data-minlength="20"></textarea>
							         
							        <span id="loading"></span>
							        <input type="submit" value="Send!" id="submit-button" />
							        <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
							    </form>
</div>
						
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