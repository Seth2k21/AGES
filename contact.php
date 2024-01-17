<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Development-fundation</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cryptocurrency Landing Page Template">
	<meta name="keywords" content="cryptocurrency, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/err_suc.css"/>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	  <style>
        /* Ajoutez vos styles CSS ici si nécessaire */
        .error-message {
            color: red;
        }
    </style>



</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<div class="container-fluid">
			<a href="index.html" class="site-logo">
				<img src="img/logo.png" alt="">
			</a>
			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<a href="contact.php" class="user"><i class="fa fa-user"></i></a>
			<a href="contact.php" class="site-btn">Contact</a>
			<nav class="main-menu">
				<ul class="menu-list">
					<li><a href="index.php">Home</a></li>
					<li><a href="blog.php">Services</a></li>
					<li><a href="about.php">About</a></li>
					
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->



	<!-- Page info section -->
	<section class="page-info-section">
		<div class="container">
			<h2>Contact</h2>
			<div class="site-beradcamb">
				<a href="index.php">Home</a>
				<a href="contact.php"><span><i class="fa fa-angle-right"></i> Contact us</span></a>
			</div>
		</div>
	</section>
	<!-- Page info end -->



	<!-- Contact section -->
	<section class="contact-page spad" id="section2">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
				<div class="form-group">
                       <?php include './msg_error_success.php'
					   ?>
					  
                 </div>
				        <form class="comment-form" action="traitement.php"  method="post">
							<h2> Send your message </h2>
							       <div class="form-group mt-4">
										<input type="text" placeholder="Enter your subject" id="subject" name="subject" autocomplete="off" required>
										<label></label>
									</div>
									<div class="form-group mt-4">
										<input type="text" placeholder="Enter your name" id="name" name="name" autocomplete="off" required>
										<label></label>
									</div>
									
									<div class="form-group">
										<input type="email" placeholder="Enter your email" id="email"  name="email" autocomplete="off" required>
										<label></label>
									</div>
									<div class="form-group clearfix">
										<textarea placeholder="Enter your comment" id="message"  name="message" autocomplete="off"  required></textarea>
										<label></label>
									</div>
									
									<button type="submit" name="submit" class="site-btn sb-gradients no-radius mt-3">Submit Now</button>
								</form>

				</div>
				
			</div>
		</div>
	</section>
	<!-- Contact section end -->


	<!-- Newsletter section -->
	<section class="newsletter-section gradient-bg">
		<div class="container text-white">
			<div class="row">
				<div class="col-lg-7 newsletter-text">
					<h2>Contact us for all your concerns</h2>
					
				</div>
				
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->

	

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row spad">
				<div class="col-md-6 col-lg-3 footer-widget">
					<img src="img/logo.png" class="mb-4" alt="">
					<p>Lot:4235 Akpakpa Midombo, Near pharmacy Midombo.</p>
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> the said company was registered in the Cotonou trade under number RB/COT/23B36675 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title">Aides</h5>
					<ul>
					  <a href="#section2">send us your message</a>
						<a href="blog.php#section1">Our services</a>
						<a href="index.php#section0">Our Features</a>
						<li><a href="about.php#section3">The teams' opinions</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title">Quick Links</h5>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="blog.php">Services</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3 footer-widget pl-lg-5 pl-3">
					<h5 class="widget-title">Follow Us</h5>
					<div class="social">
						
						<a href="https://wa.me/22966871414">
						<img src="img/process-icons/icone.png" alt="WhatsApp"  style="margin-left: 25px;margin-bottom:15px">

                        </a>
					</div>
				</div>
			</div>

			<div class="footer-bottom">
				<div class="row ">
					<div class="text-center" style="margin-left: 25%;">
				          <span class="col-6">© 2023 Group Engineering Solution</span>
			              <span class="col-3">(229) 66871414</span>
				         <span class="col">adiyongroup@gmail.com</span>
				</div>
				</div>
			</div>
	
	</footer>

	<!--====== contact ======-->

	<script src="https://smtpjs.com/v3/smtp.js"></script>
	<script src="js/form.js"></script>

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>



	

</body>
</html>
