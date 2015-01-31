<!DOCTYPE HTML>

<html>
	<head>
		<title>IAM Power - Contact</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--5grid--><script src="<?php echo base_url('assets/css/5grid/viewport.js'); ?>"></script>
		<!--[if lt IE 9]><script src="<?php echo base_url('assets/css/5grid/ie.js') ?>"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/5grid/core.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
		<!--[if IE 9]><link rel="stylesheet" href="<?php echo base_url('assets/css/style-ie9.css'); ?>" /><![endif]-->
		
		<link rel="stylesheet" href="<?php echo base_url('assets/css/formsStyle.css'); ?>" />
	</head>
	<body>
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="5grid">
				<div class="12u-first">
					<img style="margin: 1.0% 0 1.0% 0; float: left" src="<?php echo base_url('assets/css/images/iampower_logo.png'); ?>"  alt="Image not found" />
					<header id="header">
						<h1></h1>
						<nav>
							<a href="<?php echo base_url('index.php/main/index'); ?>">FILLIMI</a>
							<a href="<?php echo base_url('index.php/main/about'); ?>">PËR KLUBIN</a>
							<a href="<?php echo base_url('index.php/main/training'); ?>">TRAJNIME</a>
							<a href="<?php echo base_url('index.php/main/publications'); ?>">PUBLIKIME</a>
							<a href="<?php echo base_url('index.php/main/faqs'); ?>">FAQS</a>
							<a href="<?php echo base_url('index.php/main/kontakt'); ?>">KONTAKT</a>
						</nav>
					</header>				
				
				</div>
			</div>
		</div>
		<div id="main">
			<div class="5grid">
				<div class="main-row">
					<div class="12u-first">	
							<!-- <h2>Contact Us</h2>	 -->
							<table>
								<tr>
								 <td width="50%"></td>
								 <td>						 	
								 	<form class="form2" action="<?php echo base_url('index.php/main/contactus'); ?>" method="post">
								<div class="formtitle">Contact Us</div>
					
								<div class="input">
									<div class="inputtext">Your Name: </div>
									<div class="inputcontent">					
										<input type="text" name="txtName" required="required" />					
									</div>
								</div>
					
								<div class="input">
									<div class="inputtext">Your Surname: </div>
									<div class="inputcontent">					
										<input type="text" name="txtSurname" required="required" />					
									</div>
								</div>
					
								<div class="input">
									<div class="inputtext">Your Email: </div>
									<div class="inputcontent">					
										<input type="text" name="txtEmail" required="required" />					
									</div>
								</div>
					
								<div class="inputtextbox nobottomborder">
									<div class="inputtext">Message: </div>
									<div class="inputcontent">					
										<textarea name="txtMessage" class="textarea"></textarea>					
									</div>
								</div>
					
								<div class="buttons">					
									<input class="orangebutton" type="submit" value="Send" />					
								</div>					
							</form>										 	
								 </td>
								 <td width="50%"></td>								 					
								</tr>
								<tr style="height: 10px;"></tr>	
								<tr>									
									<td width="50%"> </td>	
									<td style="text-align: center; color:#008dab"> 
									<?php 
										if(isset($messageStatus))
										{
											echo $messageStatus;
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