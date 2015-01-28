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
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
		<script type="text/javascript">
		
		var visited = sessionStorage.getItem('visited');
		if (!visited) 
		{
			$(document).ready(function() {	
			
					var id = '#dialog';
				
					//Get the screen height and width
					var maskHeight = $(document).height();
					var maskWidth = $(window).width();
				
					//Set heigth and width to mask to fill up the whole screen
					$('#mask').css({'width':maskWidth,'height':maskHeight});
					
					//transition effect		
					$('#mask').fadeIn(1000);	
					$('#mask').fadeTo("slow",0.8);	
				
					//Get the window height and width
					var winH = $(window).height();
					var winW = $(window).width();
			              
					//Set the popup window to center
					$(id).css('top',  winH/2-$(id).height()/2);
					$(id).css('left', winW/2-$(id).width()/2);
				
					//transition effect
					$(id).fadeIn(2000); 	
				
				//if close button is clicked
				$('.window .close').click(function (e) {
					//Cancel the link behavior
					e.preventDefault();
					
					$('#mask').hide();
					$('.window').hide();
				});		
				
				//if mask is clicked
				$('#mask').click(function () {
					$(this).hide();
					$('.window').hide();
				});		
				
			});
			sessionStorage.setItem('visited', true);
		}
		</script>
		
		<style type="text/css"> 
		#mask {
		  position:absolute;
		  left:0;
		  top:0;
		  z-index:9000;
		  background-color:#000;
		  display:none;
		}  
		#boxes .window {
		  position:absolute;
		  left:0;
		  top:0;
		  width:440px;
		  height:200px;
		  display:none;
		  z-index:9999;
		  padding:20px;
		}
		#boxes #dialog {
		  width: 1100px; 
		  height:600px;
		  padding:10px;
		  color:#FFFFFF;
		  background-color:#007294;
		}
		</style>
	</head>
	<body>
		<div id="boxes">
			<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">			
			
			<b>Mirës e erdhët në Klubin  UNË JAM FUQIA – I Am Power</b> <br><br>
			Në fillim dua që të shënoni dikund këtë datë, dhe momentin që kur u futët në këtë klub, pasi që nga ky moment jeta Juaj do të merr një kahje tjetër, pozitive dhe përplot suksese.<br>
			Suksesi fillon në momentin që i themi vetvetes që jemi të gatshëm të punojmë në maksimum që të arrijmë deri tek kënaqësitë e dëshiruara. Klubi të cilin Ju tani vizitoni dhe të cilit shum shpejt do t’i bashkangjiteni, nuk ofron një tregim ngushëllues me përshtypje mesatare, por është një frymëzim i vërtetë për të gjithë ata të cilët kanë nevoj për inspirim dhe motivim.<br><br>			
			<b>UNË JAM FUQIA</b> – nuk Ju premton resurse financiare të pabaza, nuk Ju premton arritje të shpejta marramendase, nuk Ju premton një jetë të lehtë; por Ju premton një sfidë të vërtet. Ju premton që pas kalimit në filtrat e këtij klubi Ju do të keni aftësinë që VET të arrijni në të gjitha paratë  e dëshiruara, që Ju vet të krijoni sukseset Tuaja të një pas njëshme. 
			Të keni kontrollë absolute mbi mundësitë dhe dëshirat Tuaja të cilat janë pa fund. Klubi Unë Jam Fuqia për Ju do të jetë burim i informative, këshillave dhe mundësive të cilat do të ndikojnë që Ju një herë e përgjithmonë t’I vëndoni temelet e një jete më të mirë. Gjatë kësaj platforme do të ketë momente kur Ju do të dyshoni në aftësitë Tuaja për vazhdim të mëtutjeshëm, por Jo, ato janë momentet kur Ju duhet të jepni sulmin e fundit drejt suksesit. 
			Të gjithë at të cilët kane arritur në suksesin lakmues, i cili ka zgjatur gjenerata në gjenerata, kanë arritur me përkushtim, vëmendje, këshillim me të tjerët të cilët gjithashtu kanë qenë të suksesshëm, dhe me punë të palodhshme.<br><br>
			Programa e klubit përbëhet nga një platformë e larmishme e mbushur me një numër të madh të trajnimeve, seminareve, puntorive dhe seansave një në një me biznismen të sukseshëm. 
			Qëllimi i kësaj platforme është ndikimi pozitiv në zhvillimin e secilit nga anëtarët, udhëheqja në planet e suksesit të cilat secili nga ne dikund thell në vete i ka të krijuara. 
			Përgjegjësia për një gjë të tillë nuk është pa bazë, krijuesi i kësaj platforme, njëkohësisht edhe trajnere kryesore është – Mimoza Thaqi – nje grua në biznes e cila ndër vite ka dëshmuar aftësinë e saj për zhvillim të investimeve të suksesshme, që në portfolion e saj ka një numër të konsiderueshëm biznesesh. 
			Mimoza Thaqi e krijoi këtë mundësi për secilin nga Ju, mundësi që nuk vjen shpeshm mundësi që duhet shfrytzuar në maksimum.<br><br>
			Përpos që e vëndon vetveten në shërbim të secilit që është i interesuar në zhvillimin e ideve, në platformën Unë Jam Fuqia ajo ka siguruar edhe një numër të madh të folësve të tjerë, biznismenëve të suksseshëm të cilët do të Ju bashkangjiten në rrugëtimin Tuaj dhe do të ndajnë me Ju eksperiencat e tyre dhe njohuritë. 
			Rrugëtimi në këtë platformë, pas shum puntorive, seminareve dhe trajnimeve do të përfundojë me Certifikatë, të cilën do t’a merr secili i cili I ka kaluar të gjitha nivelete e programës.<br><br>
			Kjo Certifikatë si dokument do t’ju shërbejë të gjithë atyre të cilët duan të tregojnë njohuritë e tyre në lëmi të ndryshme të zhvillimit profesional, në krijimin e biznesit të ri apo zhvillimin e biznesit egzistues, në nivel më të lartë.<br><br>
			<b>Momenti definues i suksesit është momenti kur vendosim mos të dorëzohemi!</b><br><br>
			T’a shtym deri në fund vizionin tonë. Kur gjendemi para sfidave të jetës, ndërsa jemi nisur në rrugëtimin drejt krijimit të një të ardhme më të mirë, me punë të palodhshme, dinjitet, moralitet dhe përkushtim maksimal; sfidat s’janë asgjë tjetër por momente argëtuese, të cilat nuk do të na lejn të n’a mer gjumi e bezdia, por gjithnjë do të n’a ngrisin gjakun e presionin, që t’a përjetojmë rrugëtimin me të gjitha komponentat e gëzimit dhe dështimit.<br>
			Uroj që së shpejti t’i bashkangjiteni karavanit të suksesit të cilin klubi Unë Jam Fuqia është duke krijuar. Ndryshimet fillojnë me hapa të vogla, rrugëtimi është sfidues, por fundi gjithmon arsyeton mundin. Hapi i parë i Juaji le të jetë anëtarësimi në këtë klub, e më pas vet do të Jeni të aftë të vërejni që Klubi Unë Jam Fuqia është invetsimi më i mirë që Ju e bëtë për biznesin tuaj.     
			<a href="#" class="close">Close</a> 
			
		</div>
		<!-- Mask to cover the whole screen -->
		<div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
		</div>
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="5grid">
				<div class="12u-first">					
					<header id="header">
						<h1></h1>
						<nav>
							<a href="<?php echo base_url('index.php/main/index'); ?>" class="current-page-item">Home</a>
							<a href="<?php echo base_url('index.php/main/about'); ?>">About</a>
							<a href="<?php echo base_url('index.php/main/join'); ?>">Join Now</a>
							<a href="<?php echo base_url('index.php/main/faqs'); ?>">FAQs</a>
							<a href="<?php echo base_url('index.php/main/login'); ?>">Members Login</a>
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
					<img src="<?php echo base_url('assets/css/images/iampower_banner.jpg'); ?>" alt="IAMPower banner" >
				 </td>
				 <td width="50%"></td>							
				</tr>						
			</table>			
		</div>
		<div id="main">
			<div class="5grid">
				<div class="main-row">
						<div class="4u-first">
							<h2>About the club</h2>
							<img src="<?php echo base_url('assets/css/images/iampower_small.png'); ?>" alt="" class="left" />
							<p>
								Suksesi qëndron jo vetëm në atë sa din, por edhe në atë cilin e njeh!<br>
								Krijimi i këtij klubi kërkon një eksperiencë të madhe me programat e tilla, 
								kërkon përqëndrim dhe punë konstante që të krijohet dicka që nesër tjetrit do t’i shërbej. 
								Njohuritë e përfituara në këtë klub do të jenë investimi i juaj më i mirë që keni bërë për vetveten. 
								Nga ky klub do të dalin idetë tuaja më të guximshme dhe ambicioze, themelet e ardhëmirsë tuaj të plotësuar.
								I am power është platformë e bazuar në dy principe: të keni informatat e sakta, dhe të krijohet burimi i sigurtë i resurseve.
							</p>
											
						</div>
						<div class="4u">
							<h2>About Mimoza Thaqi</h2>							
								<img src="<?php echo base_url('assets/css/images/about_mimoza.jpg'); ?>" alt="" class="left" />
								<p>
									Hapi i parë drejt suksesit është të kuptojmë që ne jemi të vetmit përgjegjës për jetën tonë.
									<br>
									“Rruga drejt suksesit është besimi në vete, në qëllimin tonë dhe në hapat të cilat i ndërmarrim për arritjen e atij qëllimi. 
									Secili nga ne duhet të kuptojë se vetëm nëse arrijmë t’i largojmë të gjitha ndikimet negative nga jeta, të cilat n’a kufizojnë dhe n’a ulin vetbesimin. 
									  									
								</p>
								
						</div>
						<div class="4u">
								<h2>Meet our companies</h2>
								<img src="<?php echo base_url('assets/css/images/sun_logo.png'); ?>" alt=""  />
								<p>
									Sun and Stars tashmë 10 vjet në tregun e Maqedonisë ështe sinonim i veshjeve kualitative Second hand (të përdorura) të cilat i ofron me çmime jashtëzakonisht të lira. 
									Si kompani, Sun and Stars, veshjet i importon nga Danimarka dhe ka kontratë shumëvjeçare me kompaninë Trasborg, si perfaqesues i saj për Maqedoni. 
									Ne shitoret tona ju mund te gjeni veshje për të gjitha grup moshat me çmime shumë të volitshme. Na vizitoni dhe do ngeleni të kënaqur.								
								</p>
						</div>
					</div>
				<div>
					<div class="4u-first" style="text-align: center">
						<a href="<?php echo base_url('index.php/main/about') ?>" class="button">more</a>
					</div>
					<div class="4u" style="text-align: center">
						<a href="http://mimozathaqi.com/corona-theme/" target="_blank" class="button">more</a>
					</div>
					<div class="4u" style="text-align: center">
						<a href="http://sunandstars.com.mk/" target="_blank" class="button">visit</a>
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