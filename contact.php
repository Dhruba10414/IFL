<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Imperial Freight Limited</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">

	<!-- start header -->
		<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"/>Imperial Freight Limited</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li> 
						<li><a href="about.php">About Us</a></li>
						<li><a href="services.php">Services</a></li>
                        <li class="active"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
	<div class="row"> 
		<div class="col-md-12">
			<div class="about-logo">
				<h3>Get In Touch!</h3>
				
				<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                
                <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
			</div> 
		</div>
	</div>
		<div class="row">
		<div class="col-md-10">
			<h3>Send Us Your Inquiry</h3>
			<?php
				if(isset($_GET['error']))
                {
                    $Msg = " Please Fill in the Blanks ";
                    echo '<div class="alert alert-danger">'.$Msg.'</div>';
                }

                if(isset($_GET['success']))
                {
                    $Msg = " Your Message Has Been Sent ";
                    echo '<div class="alert alert-success">'.$Msg.'</div>';
                }
			?>

			
				<div class="contact-form">
		<form id="contact-form" action="process.php" method="post" role="form" novalidate="novalidate">
			<div class="form-group has-feedback">
				<label for="name">Name*</label>
				<input type="text" class="form-control" id="name" name="UName" placeholder="User Name">
				<i class="fa fa-user form-control-feedback"></i>
			</div>
			<div class="form-group has-feedback">
				<label for="email">Email*</label>
				<input type="email" class="form-control" id="email" name="Email" placeholder="Email">
				<i class="fa fa-envelope form-control-feedback"></i>
			</div>
			<div class="form-group has-feedback">
				<label for="subject">Subject*</label>
				<input type="text" class="form-control" id="Subject" name="subject" placeholder="Subject">
				<i class="fa fa-navicon form-control-feedback"></i>
			</div>
			<div class="form-group has-feedback">
				<label for="message">Message*</label>
				<textarea class="form-control" rows="6" id="message" name="msg" placeholder="Write the Message"></textarea>
				<i class="fa fa-pencil form-control-feedback"></i>
			</div>
						<input type="submit" value="Submit" class="btn btn-success" name="btn-send">
					</form>
				</div>
			</div>
		
		
	</div>
	</div>
	
</div>
	</div>
 
	</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="widget">
					<h5 class="widgetheading">Imperial Freight Ltd</h5>
					<p>Imperial Freight Limited has been a provider of quality, cost effective, and reliable logistics company since its first established.<br><br>
				 Through hard work and dedication to our customers, we have positioned ourselves as one of the most reputable logistics providers in Bangladesh with the ability to handle any sort of transportation need supported with our wide network of offices and agents.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a href="airfreight.php">Air Freight</a></li>
						<li><a href="seafreight.php">Sea Freight</a></li>
						<li><a href="roadfreight.php">Road Freight</a></li>
						<li><a href="combined.php">Combined Sea Air</a></li>
						<li><a href="consolidation.php">Consolidation</a></li>
						<li><a href="customclearance.php">Customs Clearance</a></li>
						<li><a href="warehousing.php">Warehousing</a></li>
						<li><a href="distribution.php">Distribution</a></li>
						<li><a href="goh.php">Garments On Hanger</a></li>
						<li><a href="acs.php">Aircraft Charter Service</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="widget">
					<h5 class="widgetheading">Contact Us</h5>
					<address>
						JC Main Road, Near Silnile tower<br>
						 Pin-21542 NewYork US.
					</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Developed by Dhruba Mitra
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="https://www.facebook.com/dhruba.mitra.3" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						
						<li><a href="https://www.linkedin.com/in/dhruba10414" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/validate.js"></script>
</body>
</html>