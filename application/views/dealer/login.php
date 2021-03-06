<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles/bootstrap4/bootstrap.min.css');?>">
<link href="<?=base_url('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css');?> rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles/contact_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles/contact_responsive.css');?>">
<style>
	
	.top_bar
	{
		width: 100%;
		height: 40px;
		background: #fafafa;
		border-bottom: solid 1px rgba(0,0,0,0.05);
		z-index: 2;
	}

	.top_bar_contact_item,
	.top_bar_contact_item a,
	.standard_dropdown li a,
	.top_bar_user a
	{ 
		line-height: 40px; 
	}

	.top_bar_contact_item, 
	.top_bar_contact_item a, 
	.standard_dropdown li li a, 
	.standard_dropdown li a,
	.top_bar_user a
	{
		font-size: 14px;
	}
	 
	.form-control {
		border : 1px solid #D0D0D0;
	}
</style>
</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">


	

		<!-- Top Bar -->

		<div class="top_bar fixed-top">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?=base_url('assets/images/phone.png');?>" alt=""></div>+243 97 95 10 763</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?=base_url('assets/images/mail.png');?>" alt=""></div><a href="mailto:infos@congodeal.com">infos@congodeal.com</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<li>
										<a href="#">Français<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">English</a></li> 
										</ul>
									</li>
									<li>
										<a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">CDF Franc</a></li>
											<li><a href="#">EUR Euro</a></li> 
										</ul>
									</li>
								</ul>
							</div>
							<div class="top_bar_user">
								<div class="user_icon"><img src="<?=base_url('assets/images/user.svg');?>" alt=""></div>
								<div><a href="<?=site_url()?>">Register</a></div>
								<div><a href="<?=site_url('dealer')?>">Créer un compte</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>




	<!-- Contact Form -->

	<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 offset-lg-1">
					<div class="contact_form_container">
						<div class="contact_form_title">Se connecter</div>

						<!-- <form action="#" id="contact_form">
							<div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
								<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Your name" required="required" data-error="Name is required.">
								<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="Your email" required="required" data-error="Email is required.">
								<input type="text" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Your phone number">
							</div>
							<div class="contact_form_text">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							</div>
							<div class="contact_form_button">
								<button type="submit" class="button contact_submit_button">Send Message</button>
							</div>
						</form> -->
  

						<form id="contact_form">
							<div class="form-group contact_form_inputs">
								<!-- <label for="exampleInputEmail1">Email address</label> -->
								<input type="email" class="form-control form-control-sm rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre addresse email">
								<small id="emailHelp" class="form-text text-muted">Nous gardons vos informations confidentielles.</small>
							</div>
							<div class="form-group contact_form_inputs">
								<!-- <label for="exampleInputPassword1">Password</label> -->
								<input type="password" class="form-control form-control-sm rounded-0" id="exampleInputPassword1" placeholder="Mot de passe">
							</div>
							<div class="form-group">
								<div class="d-flex flex-column bd-highlight mb-3">
								<button type="button" class="btn btn-primary btn-sm btn-block">Google</button>
								<button type="button" class="btn btn-secondary btn-sm btn-block">Facebook</button>
								</div>
							</div>
							<button type="submit" class="btn btn-sm  text-light btn-primary">Se connecter</button>
						</form>






					</div>
				</div>
			</div>
		</div>
		<div class="panel"></div>
	</div>


	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="<?=base_url('assets/images/send.png');?>" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">OneTech</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+38 068 005 3570</div>
						<div class="footer_contact_text">
							<p>17 Princess Road, London</p>
							<p>Grester London NW18JR, UK</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="#">Computers & Laptops</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Smartphones & Tablets</a></li>
							<li><a href="#">TV & Audio</a></li>
						</ul>
						<div class="footer_subtitle">Gadgets</div>
						<ul class="footer_list">
							<li><a href="#">Car Electronics</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="#">Video Games & Consoles</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Computers & Laptops</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Customer Services</a></li>
							<li><a href="#">Returns / Exchange</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Product Support</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="<?=base_url('assets/images/logos_1.png');?>" alt=""></a></li>
								<li><a href="#"><img src="<?=base_url('assets/images/logos_2.png');?>" alt=""></a></li>
								<li><a href="#"><img src="<?=base_url('assets/images/logos_3.png');?>" alt=""></a></li>
								<li><a href="#"><img src="<?=base_url('assets/images/logos_4.png');?>" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?=base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
<script src="<?=base_url('assets/styles/bootstrap4/popper.js');?>"></script>
<script src="<?=base_url('assets/styles/bootstrap4/bootstrap.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/greensock/TweenMax.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/greensock/TimelineMax.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/scrollmagic/ScrollMagic.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/greensock/animation.gsap.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/greensock/ScrollToPlugin.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/easing/easing.js');?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="<?=base_url('assets/js/contact_custom.js');?>"></script>
</body>

</html>