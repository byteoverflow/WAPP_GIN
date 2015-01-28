<!DOCTYPE HTML>

<html>
	<head>
		<title>IAM Power - Webinars</title>
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
						<h1></h1>
						<nav>
							<a href="<?php echo base_url('index.php/main/index'); ?>">Home</a>
							<a href="<?php echo base_url('index.php/main/about'); ?>">About</a>
							<a href="<?php echo base_url('index.php/main/join'); ?>">Join Now</a>
							<a href="<?php echo base_url('index.php/main/faqs'); ?>">FAQs</a>
							<a href="<?php echo base_url('index.php/main/logout'); ?>">Log out</a>
						</nav>
					</header>
				</div>
			</div>
		</div>
		
		<div id="main">
			<div class="5grid">
				<div class="main-row">
					<div class="4u-first">
						<div id="sideMenu">
							<nav>			
								<img src="<?php echo base_url('assets/css/images/calendar.png'); ?>" alt="" height="30" width="30">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/main/events') ?>">News &amp; Events</a><br>
								<img src="<?php echo base_url('assets/css/images/audio.png'); ?>" alt="" height="30" width="30">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/main/mastery') ?>">Success Mastery Course</a><br>
								<img src="<?php echo base_url('assets/css/images/audio.png'); ?>" alt="" height="30" width="30">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/main/development') ?>">Development Series</a><br>
								<img src="<?php echo base_url('assets/css/images/video.png'); ?>" alt="" height="30" width="30">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/main/webinars') ?>">Webinars</a><br>
								<img src="<?php echo base_url('assets/css/images/paper.png'); ?>" alt="" height="30" width="30">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/main/legacy') ?>">Legacy education</a><br>
								<!-- <a href="<?php echo base_url('index.php/main/contact') ?>">Referal Program</a><br> -->
							</nav>
							<br><br><br>
							Logged as: <br><br>
							<?php
								echo $this->session->userdata('username');
								echo "<br>";								
								echo $this->session->userdata('memberId');
							?>
						</div>	
					</div>				
					<div class="8u">
						<section class="right-content">
							<?php
								$accessLevel = $this->session->userdata('accessLevel');
								for($x=1; $x<=intval($accessLevel); $x++)
								{
									$mediaDir = $_SERVER['DOCUMENT_ROOT']."/assets/media/$x/Webinars";
									$mediaUrl = base_url('assets/media/'.$x.'/Webinars');
									
									foreach(glob("$mediaDir/*.mp4") as $file) 
									{
										//CREATE MEDIA ON WEB
										$filename = basename($file);
										echo $filename . "<br><br>";
										echo '											
												<video width="320" height="240" controls>
													  <source src="/assets/media/'.$x.'/Webinars/'.$filename.'" type="video/mp4">													
												</video> <br>';										
											
										//DOWNLOAD MEDIA 
										$downloadButton = base_url('assets/css/images/download.png');
										$downloadFile = $mediaUrl."/".$filename;											
										echo '<br>
									   <a href="'.$downloadFile.'" download><img src="'.$downloadButton.'"></a> <br><br><br>';									
										
									}									
								}
							?>
						</section>
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