<!DOCTYPE HTML>

<html>
	<head>
		<title></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--5grid--><script src="<?php echo base_url('assets/css/5grid/viewport.js'); ?>"></script>
		<!--[if lt IE 9]><script src="<?php echo base_url('assets/css/5grid/ie.js') ?>"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/5grid/core.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
		<!--[if IE 9]><link rel="stylesheet" href="<?php echo base_url('assets/css/style-ie9.css'); ?>" /><![endif]-->
		<script src="<?php echo base_url('assets/css/js/jquery-1.11.2.js'); ?>"></script>
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
							<a href="<?php echo base_url('index.php/main/join'); ?>">RREGJISTRIM NE KLUB</a>
							<!-- <a href="<?php echo base_url('index.php/main/kontakt'); ?>">HYRJE PËR ANTARËT</a> -->
							<a href="<?php echo base_url('index.php/main/logout2'); ?>">DALJE</a>
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
								<img src="<?php echo base_url('assets/css/images/all_users.png'); ?>" alt="" height="30" width="30">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/main/allmembers') ?>">All Members</a><br>			
								<img src="<?php echo base_url('assets/css/images/active_user.png'); ?>" alt="" height="30" width="30">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/main/activemembers') ?>">Active Members</a><br>
								<img src="<?php echo base_url('assets/css/images/user.png'); ?>" alt="" height="30" width="30">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/main/disabledmembers') ?>">Disabled Members</a><br>
								<img src="<?php echo base_url('assets/css/images/remove_user.png'); ?>" alt="" height="30" width="30">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/main/deletemember') ?>">Delete Members</a><br>
								<img src="<?php echo base_url('assets/css/images/user_level.png'); ?>" alt="" height="30" width="30">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/main/changelevel') ?>">Change Member Level</a><br>
								<img src="<?php echo base_url('assets/css/images/email.png'); ?>" alt="" height="30" width="30">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('index.php/main/sendemail') ?>">Send Email</a><br>
							</nav>
							<br>
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
								<table style="border-collapse: collapse">
									<tr>
										<td align="center" bgcolor="#007294"  style="border: 1px solid #999; padding: 0.5rem; color:#FFFFFF">Name</td>
										<td align="center" bgcolor="#007294"  style="border: 1px solid #999; padding: 0.5rem; color:#FFFFFF">Surname</td>
										<td align="center" bgcolor="#007294"  style="border: 1px solid #999; padding: 0.5rem; color:#FFFFFF">Country</td>
										<td align="center" bgcolor="#007294"  style="border: 1px solid #999; padding: 0.5rem; color:#FFFFFF">Email</td>
										<td align="center" bgcolor="#007294"  style="border: 1px solid #999; padding: 0.5rem; color:#FFFFFF">Registered</td>
										<td align="center" bgcolor="#007294"  style="border: 1px solid #999; padding: 0.5rem; color:#FFFFFF"></td>
									</tr>
									<?php
									if(isset($members))
									{
										foreach ($members as $member)
									    {
									   		echo '<tr>';
												echo '<td align="center" style="border: 1px solid #999; padding: 0.5rem;">'. $member->firstName . '</td>';
												echo '<td align="center" style="border: 1px solid #999; padding: 0.5rem;">'. $member->lastName . '</td>';
												echo '<td align="center" style="border: 1px solid #999; padding: 0.5rem;">'. $member->country . '</td>';
												echo '<td align="center" style="border: 1px solid #999; padding: 0.5rem;">'. $member->email . '</td>';
												echo '<td align="center" style="border: 1px solid #999; padding: 0.5rem;">'. $member->date . '</td>';
												echo '<td align="center" style="border: 1px solid #999; padding: 0.5rem;"><a href="enableMember/?memberid='.$member->member_id.'">Enable</a></td>';
											echo '</tr>';   
									    }
									}
									?>
									
								</table>
								
								
								
								

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