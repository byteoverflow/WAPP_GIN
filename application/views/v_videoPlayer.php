<!DOCTYPE HTML>

<html>
	<head>
		<title>IAM Power - Video Player</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--5grid--><script src="<?php echo base_url('assets/css/5grid/viewport.js'); ?>"></script>
		<!--[if lt IE 9]><script src="<?php echo base_url('assets/css/5grid/ie.js') ?>"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/5grid/core.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
		<!--[if IE 9]><link rel="stylesheet" href="<?php echo base_url('assets/css/style-ie9.css'); ?>" /><![endif]-->
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
		<script src="<?php echo base_url('assets/orbitSlider/js/jquery.min.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/orbitSlider/js/jquery.orbit.min.js'); ?>" type="text/javascript"></script>
		<link rel="stylesheet" href="<?php echo base_url('assets/orbitSlider/css/orbit.css'); ?>">
		
	</head>
	<body>
		
		
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="5grid">
				<div class="12u-first">	
					<table>
						<tr>
							<td style="width: 50%"></td>
							<td><img style="margin: 1.0% 0 1.0% 0; float: left" src="<?php echo base_url('assets/css/images/iampower_logo.png'); ?>"  alt="Image not found" /></td>
							<td style="width: 50%"></td>
						</tr>
					</table>	
				</div>
			</div>
		</div>
		<div id="main">
			<div class="5grid">
				<div class="main-row">
					<table>
						<tr>
							<td style="width: 50%"></td>
							<td>
								<?php
									if(isset($videoFile))
									{
										echo '											
											<video preload="metadata" width="480" height="320" controls>
												  <source src="'.$videoFile.'" type="video/mp4">													
											</video> <br>';	
									}
								?>
							</td>
							<td style="width: 50%"></td>
						</tr>
					</table>	
				</div>
			</div>				
		</div>
	
	<!-- ********************************************************* -->
	</body>
</html>