<?php
include_once 'common.php';
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title><?php echo $lang['PAGE_TITLE']; ?></title>

	<meta name="description" content="mixmetal - kowalstwo artystyczne, bramy itd.">
	<meta name="keywords" content="">
	<meta name="author" content="Kamil Feliszewski">
	<meta name="robots" content="index, follow">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<!-- Bootstrap  -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- icon fonts font Awesome -->
	<link rel="stylesheet" media="screen" href="fonts/font-awesome/font-awesome.min.css">
		
	<!-- Custom Styles -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Responsive Styles -->
	<link href="css/responsive.css" rel="stylesheet">
	
	<!-- Normalize Styles -->
	<link href="css/normalize.css" rel="stylesheet">

	<!-- Extras -->
	<link rel="stylesheet" type="text/css" href="extras/animate.css">
	<link rel="stylesheet" type="text/css" href="extras/lightbox.css">
	<link rel="stylesheet" type="text/css" href="extras/owl/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="extras/owl/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="extras/owl/owl.transitions.css">

	
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="html5shiv.js"></script>
    <script src="respond.min.js"></script>
  <![endif]-->
<!-- test git -->


</head>
	<body>
	<div class="page transition-350ms">
		<!-- Start Header Section -->
		<header id="header">
			<nav class="main-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="fa fa-bars fa-lg"></i>
						</button>
						<!-- logo here -->
					
					</div>
					
					<!-- Start Navigation Menu -->
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right" id="main_navigation_menu">
							<li class="active"><a href="#header"><?php echo $lang['MENU_HOME']; ?></a></li>
							<li><a href="#uslugi"><?php echo $lang['MENU_ABOUT_US']; ?></a></li>															
							<li><a href="#portfolio"><?php echo $lang['MENU_OUR_PRODUCTS']; ?></a></li>
							<li><a href="index.html"><img src="img/logo2.png" alt="" width="100px" height="70px"></a></li>
							<li><a href="#kontakt"><?php echo $lang['MENU_CONTACT_US']; ?></a></li>
							<li><a href="index.php?lang=pl"><img src="img/lang/pl.png" alt="flaga Polski"></a></li>
							<li><a href="index.php?lang=en"><img src="img/lang/eng.png" alt="flaga Anglii"></a></li>
							<li><a href="index.php?lang=de"><img src="img/lang/de.png" alt="flaga Niemiec"></a></li>
						</ul>
					</div>
					<!-- End Navigation Menu -->
				</div>
			</nav>
		</header>
		<!-- End Header Section -->
		<section id="intro" class="section-intro">
			
		<div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner" role="listbox">
    		<div class="item active">
      			<img src="img/slider/fot1.png" alt="Slider 1">
   			 </div>

    		<div class="item">
      			<img src="img/slider/fot2.png" alt="Slider 2">
    		</div>

    		<div class="item">
      			<img src="img/slider/fot3.png" alt="Slider 3">
   			 </div>

    		<div class="item">
      			<img src="img/slider/fot4.png" alt="Slider 4">
    		</div>
  		</div>
  		
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </div>

</section>
			
		<!-- uslugi-table Section -->	
		<section id="uslugi">
			<div class="container">
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span></span>o nas</h1>
				<div class="row">
					<div class="col-sm-12 col-md-12 wow bounceIn" data-wow-offset="10" data-wow-delay="0.8s">
						<p>
							<?php echo $lang['TEKST_O_NAS']; ?>
						</p>					
					</div>
				</div>
			</div>
		</section>			
		<!-- End uslugi-table Section-->
				
		<section id="portfoliogaleria">
		<section id="services2">
			<div class="container">
			</div> 
		</section>
		</section>
		
		<section id="portfolio">
		<!--<section id="services2">
			<div class="container">
			</div> 
		</section> -->
			
			<div class="container">
			<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span></span></h1>
				<div class="row">
				<!--<figure style="text-align:right">
					<div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.2s" >
						<img src="img/ikonki/auto.png" alt="" style="margin:0px auto;display:block"><br>
						<a href="#Foo" style="font-size:28px; text-decoration: none;" class="portfo" data-toggle="collapse">REKLAMA NA AUTACH</a>
					</div>
				</figure>
				<figure style="text-align:right;">	
					<div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
						<img src="img/ikonki/kostka.png" alt="" style="margin:0px auto;display:block" ><br>
						<a href="#Foo2" style="font-size:28px; text-decoration: none;" class="portfo" data-toggle="collapse">PROJEKTY GRAFICZNE</a>
					</div>
				</figure>
				<figure style="text-align:right">	
					<div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
						<img src="img/ikonki/billboard.png" alt=""style="margin:0px auto;display:block" ><br>
						<a href="#Foo3" style="font-size:28px; text-decoration: none;" class="portfo" data-toggle="collapse">REKLAMA ZEWNĂ„ÂTRZNA</a>
					</div>
				</figure>	
					<br> -->
					<div class="col-sm-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
					<ul>
						<li><a href="#Foo" class="portfo" data-toggle="collapse"><?php echo $lang['TEKST_BRAMA']; ?></a></li>
						<li><a href="#Foo2" class="portfo" data-toggle="collapse"><?php echo $lang['TEKST_OGRODZENIA']; ?></a></li>
						<li><a href="#Foo3" class="portfo" data-toggle="collapse"><?php echo $lang['TEKST_BALUSTRADY']; ?></a></li>
						<li><a href="#Foo4" class="portfo" data-toggle="collapse"><?php echo $lang['TEKST_KONSTRUKCJE']; ?></a></li>
						<li><a href="#Foo5" class="portfo" data-toggle="collapse"><?php echo $lang['TEKST_ELEMENTY']; ?></a></li>
					</ul>
					</div>
					<div class="col-sm-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
					<img src="img/portfolio/mixmetaltlo.png" alt="">
					</div>
				</div>
				<div class="container">
					<div id="Foo" class="collapse">
						<div id="portfolio-items" class="portfolio-items wow fadeInUpQuick">										
							<?php
								if ($handle = opendir('./img/portfolio/bramy'))
								{
  									while (($file = readdir($handle))!=false)
  									{
    									if ($file != '.' && $file != '..') {
   					 						?>
    										<div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
												<figure>
													<div class="img">
														<?php    
													        echo'	<img src="img/portfolio/bramy/'.$file.'" alt="">'
													    ?>
														<div class="overlay">
															<?php 
																echo '<a data-lightbox="image1" href="img/portfolio/bramy/'.$file.'" class="link-left"><i class="fa fa-plus"></i></a>'
																
															?>
															
															
														</div>
													</div>								
												</figure>	
												<p>
												<a href="<?php unlink($file); ?>">Usu�</a>
												</p>
											</div>
										<?php
									    }
  									}
								}
								closedir($handle);
							?>						
					</div>
				</div>								
			</div>
	
			<div class="container">
					<div id="Foo2" class="collapse">
						<div id="portfolio-items" class="portfolio-items wow fadeInUpQuick">										
							<?php
								if ($handle = opendir('./img/portfolio/ogrodzenia'))
								{
  									while (($file = readdir($handle))!=false)
  									{
    									if ($file != '.' && $file != '..') {
   					 						?>
    										<div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
												<figure>
													<div class="img">
														<?php    
													        echo'	<img src="img/portfolio/ogrodzenia/'.$file.'" alt="">'
													    ?>
														<div class="overlay">
															<?php 
																echo '<a data-lightbox="image1" href="img/portfolio/ogrodzenia/'.$file.'" class="link-left"><i class="fa fa-plus"></i></a>'
															?>
														</div>
													</div>								
												</figure>	
											</div>
										<?php
									    }
  									}
								}
								closedir($handle);
							?>						
					</div>
				</div>								
			</div>

			<div class="container">
					<div id="Foo3" class="collapse">
						<div id="portfolio-items" class="portfolio-items wow fadeInUpQuick">										
							<?php
								if ($handle = opendir('./img/portfolio/balustrady'))
								{
  									while (($file = readdir($handle))!=false)
  									{
    									if ($file != '.' && $file != '..') {
   					 						?>
    										<div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
												<figure>
													<div class="img">
														<?php    
													        echo'	<img src="img/portfolio/balustrady/'.$file.'" alt="">'
													    ?>
														<div class="overlay">
															<?php 
																echo '<a data-lightbox="image1" href="img/portfolio/balustrady/'.$file.'" class="link-left"><i class="fa fa-plus"></i></a>'
															?>
														</div>
													</div>								
												</figure>	
											</div>
										<?php
									    }
  									}
								}
								closedir($handle);
							?>						
					</div>
				</div>								
			</div>

			<div class="container">
					<div id="Foo4" class="collapse">
						<div id="portfolio-items" class="portfolio-items wow fadeInUpQuick">										
							<?php
								if ($handle = opendir('./img/portfolio/konstrukcje'))
								{
  									while (($file = readdir($handle))!=false)
  									{
    									if ($file != '.' && $file != '..') {
   					 						?>
    										<div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
												<figure>
													<div class="img">
														<?php    
													        echo'	<img src="img/portfolio/konstrukcje/'.$file.'" alt="">'
													    ?>
														<div class="overlay">
															<?php 
																echo '<a data-lightbox="image1" href="img/portfolio/konstrukcje/'.$file.'" class="link-left"><i class="fa fa-plus"></i></a>'
															?>
														</div>
													</div>								
												</figure>	
											</div>
										<?php
									    }
  									}
								}
								closedir($handle);
							?>						
					</div>
				</div>								
			</div>

			<div class="container">
					<div id="Foo5" class="collapse">
						<div id="portfolio-items" class="portfolio-items wow fadeInUpQuick">										
							<?php
								if ($handle = opendir('./img/portfolio/elementynierdzewne'))
								{
  									while (($file = readdir($handle))!=false)
  									{
    									if ($file != '.' && $file != '..') {
   					 						?>
    										<div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
												<figure>
													<div class="img">
														<?php    
													        echo'	<img src="img/portfolio/elementynierdzewne/'.$file.'" alt="">'
													    ?>
														<div class="overlay">
															<?php 
																echo '<a data-lightbox="image1" href="img/portfolio/elementynierdzewne/'.$file.'" class="link-left"><i class="fa fa-plus"></i></a>'
															?>
														</div>
													</div>								
												</figure>	
											</div>
										<?php
									    }
  									}
								}
								closedir($handle);
							?>						
					</div>
				</div>								
			</div>

	

	
			</div>
		</section>
		
							
		<!-- Start kontakt Section -->
		<section id="kontakt">
			<div class="overlay">
				<div class="container">
				<h1 class="section-title wow fadeIn" data-wow-delay=".2s"><span>
				<?php echo $lang['TEKST_FORM']; ?></span> <?php echo $lang['TESKT_FORM2']; ?></h1>
					<div class="row" id="form">
						<!--<div class="kontakt-form"> -->
							<!--<form role="form" method="post"> -->
							<form name="sentMessage" id="contactForm" novalidate>
								<div class="col-sm-6 col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
										<div class="form-group">
											<input class="form-control" type="text" id="name" placeholder="<?php echo $lang['TEKST_POLE_NAME']; ?>">
											<p class="help-block text-danger"></p>
											<i class="fa fa-user"></i>
										</div>
										<div class="form-group">
											<input class="form-control" type="text" id="email" placeholder="<?php echo $lang['TEKST_POLE_EMAIL']; ?>">
											<p class="help-block text-danger"></p>
											<i class="fa fa-envelope-o"></i>
										</div>
										<div class="form-group">
											<input class="form-control" type="text" id="phone" placeholder="<?php echo $lang['TEKST_POLE_PHONE']; ?>">
											<p class="help-block text-danger"></p>
											<i class="fa fa-phone"></i>
										</div>
								</div>
								<div class="col-sm-6 col-md-6 wow fadeInRight" data-wow-delay="0.2s">
								<div class="form-group">
										<textarea id="message" rows="9" class="form-control" placeholder="<?php echo $lang['TEKST_POLE_MESSAGE']; ?>"></textarea>
										<p class="help-block text-danger"></p>
								</div>
								</div>
								<div class="col-sm-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
									<div id="success"></div>
                                	<button type="submit" class="btn btn-xl">
									<?php echo $lang['TEKST_BUTTON'];  ?></button>

								</div>
							</form> 

                  
                </div>
						</div>
					</div>
		<!--		</div>	-->
			
		</section>
		<!-- End kontakt Section -->
		
		<!-- Start Clients Section -->
		<!-- <section id="clients">
			<div class="container">
				<div class="row">
					<div id="logo-slider" class="owl-carousel owl-theme">
						<div class="item">
							<a href="#"><img src="img/clients-logo/img1.png" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/clients-logo/img2.png" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/clients-logo/img3.png" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/clients-logo/img4.png" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/clients-logo/img5.png" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/clients-logo/img6.png" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/clients-logo/img7.png" alt=""></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/clients-logo/img8.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End Clients Section -->
		
		<!-- Start Connected Section -->
		<section id="connected">
			<div class="container">
				<div class="row">
					<h2 class="section-title wow fadeInUp" data-wow-delay=".2s">
					<?php echo $lang['TESKT_FOOTER']; ?></h2>		
					<h3 class="discription wow fadeIn" data-wow-delay=".2s"></h3>
					<hr>
					<div class="connected-wrapper text-center">
						<div class="col-sm-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
							<div class="kontakt-item">
								<a href="skype:+48664745173?call"><i class="fa fa-phone"></i></a>
								<h5>Marcin Konaszyk</h5>
								<h4>+48 664 745 173</h4>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
							<div class="kontakt-item">
								<a href="mailto:info@mixmetal.eu"><i class="fa fa-user"></i></a>
								<h5><?php echo $lang['TESKT_FOOTER_SUPP']; ?></h5>
								<h4>info@mixmetal.eu</h4>
							</div>
						</div>
						<!-- <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.2s">
							<div class="kontakt-item">
								<a href="http://www.twitter.com/imaginedevpl"><i class="fa fa-twitter"></i></a>
								<h5>Twitter</h5>
								<h4>@imaginedevpl</h4>
							</div>
						</div> -->
					<!--	<div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
							<div class="kontakt-item">
								<a href="https://www.facebook.com/BOB-BLUE-668062456579604/?fref=ts"><i class="fa fa-facebook"></i></a>
								<h5>Facebook</h5>
								<h4>BobBlue</h4>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Connected Section -->

		<!-- Footer Section Start -->
		<footer id="footer">
			<div class="container">
					<div class="copyright text-center">
						<p><?php echo $lang['TEKST_COPYRIGHT']; ?> &copy; 2017</p>
						<p><?php echo $lang['TEKST_PROJEKT']; ?> <a href="http://www.bobblue.pl">
						BobBlue</a></p>
						<p><?php echo $lang['TEKST_WYKONANIE']; ?> <a href="http://www.kamilfeliszewski.pl">
						Kamil Feliszewski</a></p>
					</div>
			</div>
		</footer>
		<!-- Footer Section End -->

		<!-- Scroll Top -->
		<div class="scroll-top" data-spy="affix" data-offset-top="300">
			<a href="#header"><i class="fa fa-angle-up"></i></a>
		</div>
		<!-- Scroll End -->
   

		<!-- Include jquery.min.js plugin -->
		<script src="js/jquery-min.js"></script> 
		
		<!-- Include Bootstrap plugin -->
		<script src="js/bootstrap.min.js"></script>
		<!-- One page Nav plugin -->		
		<script src="js/jquery.nav.js"></script>
		<!-- Include Bootstrap plugin -->
		<script src="js/owl.carousel.js"></script>
		<!-- Include wow plugin -->
		<script src="js/wow.js"></script>
		<!-- Include mixitup plugin -->
		<script src="js/jquery.mixitup.js"></script>
		<!-- ScrollTop -->
		
		<script type="text/javascript" src="js/jquery.inview.min.js"></script>
		
		<script src="js/lightbox.min.js"></script>
		<!-- Lightbox -->
		<script src="js/scroll-top.js"></script>
		<!-- Smooth Scroll -->
		<script src="js/smooth-scroll.js"></script>
		<!-- preset js -->
		<script src="js/style.changer.js"></script>
		<!-- Modernizr js -->
		<script src="js/modernizr-2.8.0.main.js"></script>
		<!-- Main js -->
		<script src="js/main.js"></script>
		<!-- e-mail -->
		<script src="js/jqBootstrapValidation.js"></script>
		<script src="js/contact_me.js"></script>
		 <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

	</div>		
	</body>
</html>