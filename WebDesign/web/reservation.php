<!DOCTYPE html>
<html>
  
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=Edge"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Aritaku - It's a authentic telugu mess</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    
    <link rel="stylesheet" href="dist/font-awesome.css">
    <link rel="stylesheet" href="dist/animate.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="dist/jquery.datetimepicker.css">

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
             <img src="./_assets/images/logo.png" />
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
							<li><a  href="menu.html">MENU</a></li>
							<li><a class="active" href="#">Reservation</a></li>
							<li><a href="testimonials.html">TESTIMONIALS</a></li>
  				            <li><a href="contact.php">CONTACT US</a></li>
  				          </ul>
  				        </nav>
      				  </div> <!-- ========== MOBILE MENU ends ============ -->

      				</nav> <!-- =============== DESKTOP NAV MENU ends ==================== -->
         
			</div>
        </div>
      </header><!-- ============ HEADER TYPE 2 ends ================== -->


		<div class="wrapper">
			<div class="reservation">

				<section class="banner">
					<div class="container">
						<article class="banner-caption">
							<h5><span></span>  Aritaku - an authentic telugu mess  <span></span></h5>
							<h2>make your reservation</h2>
						</article>
					</div>
				</section>


				<section class="main-content">
					<div class="container">
						<h3>fill your details in the below fields for reservation</h3>

						<article class="content-wrapper">
						<?php
									if(isset($_GET['reserve'])) {
										?>
										  <div class="alert alert-success fade in" style="border-radius: 0px; padding: 20px 20px; text-align: center;">
										   <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
										   We have received your table reservation request. We will get back to you soon with an email confirmation
										  </div>
									<?php  } ?>
							<form action="reservack.php" method="post" id="contactform"	class="contact-form">
								<h4>Personal Information</h4>
								<div class="clearfix basic-info">
									<div class="input-wrapper">
										<input type="text" id="reservationName" name="reservationName" class="icons name" placeholder="Your Name">
									</div>
									<div class="input-wrapper">
										<input type="text" id="reservationPhone" name="reservationPhone" class="icons phone" placeholder="Phone no">
									</div>
									<div class="input-wrapper">
										<input type="text" id="reservationEmail" name="reservationEmail" class="icons email" placeholder="Email ID">
									</div>
									<div class="input-wrapper">
										<input type="text" id="reservationAddress" name="reservationAddress" class="icons add" placeholder="Enter your full address">
									</div>
								</div>

								<h4>Requirement options</h4>
								<div class="requirement clearfix">
									<div>
										<div class="input-wrapper">
										<input type="text" id="numberofseats" name="numberofSeats" class="icons name" placeholder="Number of seats">
									</div>

										
									</div>

									<div>
										<div class="clearfix">
											<div class="input-wrapper">
												<input id="timepicker" name="timepicker" class="icons" type="text" placeholder="Click to select time">
											</div>
											<div class="input-wrapper">
												<input id="datepicker" name="datepicker" class="icons" type="text" placeholder="Click to select date">
											</div>
										</div>

										
									</div>
								</div>

								<div class="tc-submit clearfix ">
									
									<button class="red-btn button">Reserve now</button>
								</div>

								<div class="reservation_final_msg form-message" >
									<div><div class="loader">Loading...</div></div>
								</div>
							</form>
							
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
					<ul class="social-btns clearfix">
						 <li><a class="gplus" href="#"><i class="fa fa-google-plus"></i></a></li>
						  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
					</ul>					
					<!-- =================================== -->
				</article>


				<article class="design">
					
				</article>

				<article class="copyright">
					<h5>Copyright 2016 Aritaku</h5>
				</article>

				
		  </div>
		</footer>

		</div> <!-- inside-body-wrapper ends -->

		

		<script src="_assets/js/jquery-2.1.1.min.js"></script>
		<script src="_assets/js/jquery.validate.js"></script>
		<script src="_assets/js/jquery.fittext.js"></script>
		<script src="_assets/js/imgLiquid-min.js"></script>
		<script type="text/javascript" src="_assets/js/waypoints.min.js"></script>
		<script src="_assets/js/jquery.datetimepicker.js"></script>

		<!-- google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		
    	<script>
				$(document).ready(function(){
					'use strict';
					/*----------------------------------------------------*/
					/*	DATETIME PICKER 
					/*----------------------------------------------------*/
					jQuery('#timepicker').datetimepicker({
							datepicker:false,
				  		format:'H:i'
					});

					jQuery('#datepicker').datetimepicker({
							timepicker:false,
				 			format:'d.m.Y'
					});



					/*----------------------------------------------------*/
					/*	FORM VALIDATION
					/*----------------------------------------------------*/
					$("#reserve-form").validate({ 
						rules:{
							reservationName:{required: true},
							reservationPhone:{required: true,number:true,minlength:8},
							reservationEmail:{required: true,email:true},
							reservationOccasion:{required: true},
							timepicker:{required: true},
							datepicker:{required: true},
						},

						submitHandler: function (form) { 

							var suburl = 'mail.html',
								reservationName=$("#reservationName").val(),
								reservationPhone=$("#reservationPhone").val(),
								reservationEmail=$("#reservationEmail").val(),
								reservationOccasion=$("#reservationOccasion").val(),
								dine='',
								timepicker=$("#timepicker").val(),
								datepicker=$("#datepicker").val();

							$(".clrd").each(function(){
                if ($(this).is(':checked')) {
									dine=$(this).val();
								}
							});

							$('#reserve-form .form-message').show();
						
							var data={'formid':'reserve-form','cust_name':reservationName,'cust_phone':reservationPhone,'cust_email':reservationEmail,'occasiontype':reservationOccasion,'dine':dine,'tp':timepicker,'dp':datepicker};

							$.post(suburl ,  data , function(response){
									$('.reservation_final_msg').html(response);
									$('.reservation_final_msg').show();

									$( '#reserve-form' ).each(function(){
										this.reset(); //CLEARS THE FORM AFTER SUBMISSION
									});
							});

							return false; }
						});
					
				}); //========DOCUMENT.READY ends============
		</script>
		<script src="_assets/js/myCustom.js"></script>

		<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-5557595-14', 'auto');
				ga('send', 'pageview');
		</script>

	</body>


</html>
	