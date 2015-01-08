<!DOCTYPE HTML>

<html>
	<head>
		<title>IAM Power - Home</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--5grid--><script src="<?php echo base_url('assets/css/5grid/viewport.js'); ?>"></script>
		<!--[if lt IE 9]><script src="<?php echo base_url('assets/css/5grid/ie.js') ?>"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/5grid/core.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
		<!--[if IE 9]><link rel="stylesheet" href="<?php echo base_url('assets/css/style-ie9.css'); ?>" /><![endif]-->
		<script src="<?php echo base_url('assets/orbitSlider/js/jquery.min.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/orbitSlider/js/jquery.orbit.min.js'); ?>" type="text/javascript"></script>
		<link rel="stylesheet" href="<?php echo base_url('assets/orbitSlider/css/orbit.css'); ?>">
		
		<script type="text/javascript">
     		$(window).load(function() 
     		{
				$('#featured').orbit({
     				animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
     				animationSpeed: 800,                // how fast animtions are
     				timer: true, 			 // true or false to have the timer
     				advanceSpeed: 4000, 		 // if timer is enabled, time between transitions 
     				pauseOnHover: false, 		 // if you hover pauses the slider
     				startClockOnMouseOut: false, 	 // if clock should start on MouseOut
     				startClockOnMouseOutAfter: 1000, 	 // how long after MouseOut should the timer start again
     				directionalNav: true, 		 // manual advancing directional navs
     				captions: true, 			 // do you want captions?
     				captionAnimation: 'fade', 		 // fade, slideOpen, none
     				captionAnimationSpeed: 800, 	 // if so how quickly should they animate in
     				bullets: true,			 // true or false to activate the bullet navigation
     				bulletThumbs: false,		 // thumbnails for the bullets
     				bulletThumbLocation: '',		 // location from this file where thumbs will be
     				afterSlideChange: function(){} 	 // empty function 
				});
     		});
		</script>
	</head>
	<body>
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="5grid">
				<div class="12u-first">					
					<header id="header">
						<h1></h1>
						<nav>
							<a href="<?php echo base_url('index.php/main/index') ?>" class="current-page-item">Home</a>
							<a href="<?php echo base_url('index.php/main/about') ?>">About</a>
							<a href="<?php echo base_url('index.php/main/meetme') ?>">Meet me</a>
							<a href="<?php echo base_url('index.php/main/join') ?>">Join Now</a>
							<a href="<?php echo base_url('index.php/main/faqs') ?>">FAQs</a>
							<a href="<?php echo base_url('index.php/main/contact') ?>">Contact Us</a>
							<a href="<?php echo base_url('index.php/main/login') ?>">Members Login</a>
						</nav>
					</header>				
				</div>
			</div>
		</div>
		<div id="banner-wrapper">		
			<table>
				<tr>
				 <td width="50%"></td>
				 <td>
				 	
					<img src="<?php echo base_url('assets/css/images/iampower_banner.jpg'); ?>" alt="IAMPower banner" > <!-- height="42" width="42"> -->
				 							 	
				 	<!-- <div id="featured"> 
						<img src="<?php echo base_url('assets/orbitSlider/images/slide1.jpg'); ?>" alt="Image not found" data-caption="#image1Caption" />
						<img src="<?php echo base_url('assets/orbitSlider/images/slide2.jpg'); ?>"  alt="Image not found" data-caption="#image2Caption" />
						<img src="<?php echo base_url('assets/orbitSlider/images/slide3.jpg'); ?>" alt="Image not found" data-caption="#image3Caption" />
						<img src="<?php echo base_url('assets/orbitSlider/images/slide4.jpg'); ?>" alt="Image not found" data-caption="#image4Caption" />
					</div> -->
			<!-- Captions for Orbit -->
					<!-- <span class="orbit-caption" id="image1Caption">Image1 Caption</span>
					<span class="orbit-caption" id="image2Caption">Image2 Caption</span>
					<span class="orbit-caption" id="image3Caption">Image3 Caption</span>
					<span class="orbit-caption" id="image4Caption">Image4 Caption</span> -->						 	
				 </td>
				 <td width="50%"></td>							
				</tr>						
			</table>			
		</div>
		<div id="main">
			<div class="5grid">
				<div class="main-row">
					<div class="4u-first">						
						<section>
							<h2>About the club</h2>
							<img src="<?php echo base_url('assets/css/images/iampower_small.jpg'); ?>" alt="" class="left" />
							<p>The Global Information Network, or GIN for short, is a private membership club that was formed in Janury 2015, 
								by a group of very successful people. 
								The purpose of the club is to enable people to "Have, Be or Do" whatever they want in life. 
								GIN is a global club and has Members and Associates in more than 150 countries. 
								In short, GIN is a very unique success club, unlike any club that has ever been formed before.
							</p>
							<footer class="controls">
								<a href="<?php echo base_url('index.php/main/about') ?>" class="button">more</a>
							</footer>
						</section>					
					</div>
					<div class="4u">						
						<section>
							<h2>About Mimoza Thaqi</h2>							
								<img src="<?php echo base_url('assets/css/images/about_mimoza.jpg'); ?>" alt="" class="left" />
								<p>
									Qëllimet që i kam vënë në jetë, i kam arritur hap pas hapi.
									Tani qëllim imi është që t’u shërbej njerëzve sa më shumë që është e mundur, që edhe ato t’i sendërtojnë ëndrrat dhe qëllimit e tyre!
									Çdo sukses dhe çdo arritje e një personi, që unë kam pasur fatin ta njoh dhe t’i bëj një shërbim, është sukses dhe lumturi për mua...									
								</p>
								<footer class="controls">
								<a href="<?php echo base_url('index.php/main/meetme') ?>" class="button">more</a>
							</footer>							
						</section>					
					</div>
					<div class="4u">					
						<section>
							<h2>Meet our companies</h2>
							<img src="<?php echo base_url('assets/css/images/sun_logo.jpg'); ?>" alt=""  />
							<p>Our GIN Faculty is comprised of the leading experts in their field; speakers from a variety of backgrounds: Authors, professional athletes, successful entrepreneurs, doctors, and professional speakers. 
							Each of our faculty can be considered an authority.
							They teach and train within the GIN Membership on many areas: 
							physical wellness, mental health, wealth creation, investing, Self-improvement and awareness, Business acumen, etiquette, numerology, martial arts, yoga, and so many more.								
							</p>
							<footer class="controls">
								<a href="http://sunandstars.com.mk/" target="_blank" class="button">visit</a>
							</footer>
							</div>
							<div class="6u">							
							</div>
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