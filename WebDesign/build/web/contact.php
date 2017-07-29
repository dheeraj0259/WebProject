<!DOCTYPE html>
<html>
  
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=Edge"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Pandiyas - King of southern flavors</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="dist/font-awesome.css">
    <link rel="stylesheet" href="dist/jquery.bxslider.css">
    <link rel="stylesheet" href="dist/animate.css" media="screen" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dist/desktop.css">
    <link rel="stylesheet" href="dist/tab.css">
    <link rel="stylesheet" href="dist/mobile.css">    

    <!--[if IE]>
        <script src="_assets/js/html5shiv.js"></script>
        <link rel="stylesheet" href="dist/ie9.css">
    <![endif]-->
    
    <script src="_assets/js/modernizr.custom.50095.js"></script>
    <script src="_assets/js/respond.js"></script>
  </head>

  <body>
    <div class="inside-body-wrapper">
    <!-- ============ HEADER TYPE 2 ================== -->
    <header class="new-type2 header-type2">
      	<div class="lower-part">
      		<div class="container">
  					<a class="logo" href="index.html">
             <img style="position: relative; bottom: 2px;" src="./_assets/images/logo1.png" />
            </a>
  	        <!-- ========= DESKTOP NAV MENU ========== -->
  	        <nav id="navigation-menu" class="nav-menu navbar-collapse" role="navigation">

      					<!-- ========== MOBILE MENU ================ -->
      					<div id="nav-div" class="clearfix">
      				    <div class="navbar-header">
      				      <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target=".nav-menu">
      				        <span class="sr-only">Toggle navigation</span> 
      				        <span class="icon-bar"></span>
      				        <span class="icon-bar"></span>
      				        <span class="icon-bar"></span>
      				      </button>
      				    </div>
      				      
  				        <nav id="navigation-list" class="row navbar-collapse"  role="navigation">
  				          <ul class="nav navbar-nav">
  				            <li><a href="index.html">HOME</a></li>
							<li><a href="menu.html">MENU</a></li>
							<!--<li><a href="https://www.seatme.yelp.com/restaurants/bb081ce9-715c-4a2c-8f89-2833634bbfe3/">Reservation</a></li>-->
							<li><a href="banquethall.html">Banquet Hall</a></li>
							<!--<li><a href="testimonials.html">TESTIMONIALS</a></li>-->
  				            <li><a class="active" href="#">CONTACT US</a></li>
  				          </ul>
  				        </nav>
      				  </div> <!-- ========== MOBILE MENU ends ============ -->

      				</nav> <!-- =============== DESKTOP NAV MENU ends ==================== -->
         
			</div>
        </div>
      </header><!-- ============ HEADER TYPE 2 ends ================== -->


		<div class="wrapper" style="position: relative; top: 3px;">
			<div class="contact-page">

				<section class="banner">
					<!-- <article class="banner-img">
						<img src="_assets/images/banner-img.jpg" height="460" width="1920" alt="">
					</article> -->

					<div class="container">
						<article class="banner-caption">
							<h5><span></span>  Pandiyas - King of southern flavors  <span></span></h5>
							<h2>contact us</h2>
						</article>
					</div>
				</section>


				<section class="main-content">
					<div class="container">
						<article class="content-wrapper">
							<iframe style="width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3346.1017321699296!2d-96.76658578539156!3d33.00109327983451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c22113ed8bcbf%3A0xe724e1278fccf923!2s208+Coit+Rd+%23700%2C+Plano%2C+TX+75075%2C+USA!5e0!3m2!1sen!2sin!4v1456820245813"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

							

							<div class="clearfix">
								<div class="office-details">
									
									<h4 class="bold-head">Pandiyas</h4>
									<h4>208 Coit, Road #700</h4>
									<h4>Plano, TX-75075, USA</h4>
									
									<h4 class="bold-head">Get in touch</h4>
									<h4>Ph: (972) 943-5809</h4>
									
									

								</div>
								
								<div class="write-us">
									<h3>write to us</h3>
									<?php
									if(isset($_GET['mail'])) {
										?>
										  <div class="alert alert-success fade in" style="border-radius: 0px; padding: 20px 20px; text-align: center;">
										   <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
										   Thanks for reaching out to us. We will get back to you soon.
										  </div>
									<?php  } ?>
									<form action="thankyou.php" method="post" id="contactform"	class="contact-form">
										<div class="main-holder clearfix">
											<div class="placehold">Name</div>
											<div class="input-holder">
												<input type="text" id="contactUsName" name="name">
											</div>
										</div>

										<div class="main-holder clearfix">
											<div class="placehold">Email</div>
											<div class="input-holder">
												<input type="text" id="contactUsEmail" name="email">
											</div>
										</div>

										<div class="main-holder clearfix">
											<div class="placehold">Message</div>
											<div class="input-holder">
												<textarea rows="6" id="contactUsMsg" name="message"></textarea>
											</div>
										</div>
										
										<div class="clearfix">
											<button class="button" type="submit">submit now</button>
											<div class="contact-page-form form-message" >
												<div><div class="loader">Loading...</div></div>
											</div>
										</div>

										
									</form>
								</div>

								

							</div>
							<div class="socials-holder">
									<!--<h4>socialize with us</h4>
									<div class="social-connect clearfix">
										<a href="#" class="fb"><i class="fa fa-facebook"></i></a>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<a href="#" class="gplus"><i class="fa fa-google-plus"></i></a> -->
									</div>
								</div>
						</article>
					</div> <!-- CONTAINER ends -->
				</section> <!-- MAIN CONTENT ends -->



		
	</div> <!-- EVENT ends -->
</div> <!-- WRAPPER ends -->


<!-- ============ FOOTER ================== -->
		<footer>
			<div class="container">
				<article class="social-btn-group">
					<!-- ========= SOCIAL BUTTONS ========== -->
					<!--<ul class="social-btns clearfix">
						  <li><a class="gplus" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						  <li><a target="_blank" class="facebook" href="https://www.facebook.com/aritakubhojanam"><i class="fa fa-facebook"></i></a></li>
					</ul>	 -->				
					<!-- =================================== -->
				</article>


				<article class="design">
					
				</article>

				<article class="copyright">
					<h5>Copyright 2016 Pandiyas</h5>
				</article>
			</div>
		</footer>

		</div> <!-- inside-body-wrapper ends -->


		<script src="_assets/js/jquery-2.1.1.min.js"></script>
		<script src="_assets/js/jquery.validate.js"></script>
		<script src="_assets/js/jquery.fittext.js"></script>
		<script src="_assets/js/imgLiquid-min.js"></script>
		<script type="text/javascript" src="_assets/js/waypoints.min.js"></script>

		<!-- google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    	
		<!-- bxSlider Javascript file -->
		<script src="_assets/js/jquery.bxslider.min.js"></script>
		<script src="_assets/js/myCustom.js"></script>

	</body>


</html>
	