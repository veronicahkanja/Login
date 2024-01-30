<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        echo "Welcome " . $row['name'] . " <a href='logout.php'>Logout</a>";
    }
?>

//modified

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Calyx Solutions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Website, Web design, Calyx, Calyx solutions, Mobile apps, Software developers, Systems, Web systems, Martin wambugu, Francis Guare, Veronicah Kanja, Kenya developers, Hardware maintenance, Hardware supply, computer maintenance, ICT, ICT consultion services" />
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    	
					    <div class="col-md pr-6 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-4 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <!-- <span class="text">info@calyxsolutions.co.ke</span> -->
					    </div>
					    <div class="col-md pr-6 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-4 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <!-- <span class="text">0720901994 / 0726695146 / 0715958654</span> -->
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<!-- <a class="navbar-brand" href="index.html">Calyx Solutions</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<!-- <li class="nav-item active"><a href="index.html" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li> -->
	        	<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	        	<!-- <li class="nav-item"><a href="potfolio.html" class="nav-link">Potfolio</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->
	        </ul>
	      </div>
	    </div>
	  </nav>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/Home/slide2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Our Services</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
            <div class="container">
	<div class="row">
    	<div class="col-md-8 col-sm-8 col-xs-12">
    		<h2 class="text-uppercase"><sup class="badge">Web design</sup></h2>
    		<p>Our web design clientele go beyond developing websites for clients in Kenya. Our tentacles have reached the international market. We understand that some web projects are on a strict timelines. We have have a development team that work 24 hours to meet your deadlines. We also have a standby support team to ensure that you are served 24hours 7days a week. We are therefore available throughout for you, to serve you better in Web Design in Kenya</p>
            
    	</div>
    	<div class="col-md-4 col-sm-4 col-xs-12">
    	    <img src="images/services/web%20design.jpg" alt="" class="img-responsive">
    	</div>
        <div class="col-md-8 col-sm-8 col-xs-12">
    		<h2 class="text-uppercase"><sup class="badge">Web Apps development</sup></h2>
    		<p>The revolution of hand held devices and smart phones has resulted in a consumer base that is empowered more than ever before in history to search for information or view your company at their pleasure, at any time and from any corner of the globe.

                            At Calyx Solutions we have made it our business to build responsive (Mobile Ready) websites. This ensures that you are accessible to all your potential & current customers 24/7 all year round on all desktops and mobile devices (e.g. mobile phones, iPad, iMac, smart phones e.t.c). Our products will thus stamp your company’s presence and authority in the market.</p>
    	</div>
    	<div class="col-md-4 col-sm-4 col-xs-12">
    	    <img src="images/services/web-application.png" alt="" class="img-responsive">
    	</div>
         <div class="col-md-8 col-sm-8 col-xs-12">
    		<h2 class="text-uppercase"><sup class="badge">Mobile Apps development</sup></h2>
             <p>It’s important that your software is reliable, secure, & meets standards. We’ve consulted, delivered & supported mobile solutions that meet and exceed our clients expectations here in Kenya and abroad. Intrepid Data Systems offers quality mobile applications for iOS, Android, Blackberry and Windows Mobile 8. </p><p>Engage with our team of project leaders and analysts to help you understand your project requirements and lead you forward through consultation and technical expertise to deliver mobile applications that exceed your expectations.

            We are experts in backend integration and development for mobile applications. To complete your mobile application, we can also develop and deploy applications into the relevant app stores.</p>
    	</div>
    	<div class="col-md-4 col-sm-4 col-xs-12">
    	    <img src="images/services/mobile%20apps.jpg" alt="" class="img-responsive">
    	</div>
         <div class="col-md-8 col-sm-8 col-xs-12">
    		<h2 class="text-uppercase"><sup class="badge">Software Development</sup></h2>
    		<p>Custom software serves the unique processes of your business, solves your specific problems, satisfies your exclusive needs and makes your workflows easier, faster, and more efficient. </p><p>On the cutting edge of software development, we continuously master our skills in such tech trends as Internet of Things (IoT), artificial intelligence (AI), machine learning, computer vision and big data.</p>
    	</div>
    	<div class="col-md-4 col-sm-4 col-xs-12">
    	    <img src="images/services/software.png" alt="" class="img-responsive">
    	</div>
         <div class="col-md-8 col-sm-8 col-xs-12">
    		<h2 class="text-uppercase"><sup class="badge">Computer Networking</sup></h2>
    		<p>Each client's IT environment is unique, thus requiring specific considerations as technological enhancements are needed. Changes to an existing IT environment, or the addition of a totally new technology, require a detailed analysis and design to guarantee its overall performance and productivity.</p>

<p></p>Our approach to architecting the right solution focuses primarily on our client's specifications in combination with our years of experience to reduce overall complexity of systems, data and network management.<p/>

<p>Armed with the correct solution for the client, our team of technology experts works collaboratively with our customer, as a partner, during the implementation of the solution. Key security and business productivity considerations are taken into account with every change to ensure optimal performance throughout the entire process. We hold ourselves accountable to ensure our client infrastructure and systems remain secure.</p>
    	</div>
    	<div class="col-md-4 col-sm-4 col-xs-12">
    	    <img src="images/services/mobile%20apps.jpg" alt="" class="img-responsive">
    	</div>
         <div class="col-md-8 col-sm-8 col-xs-12">
    		<h2 class="text-uppercase"><sup class="badge">Computer Hardware Sales</sup></h2>
    		<p>As an ICT solutions provider we can offer our clients a choice of equipment from a vast range of computer systems, notebooks, file servers, peripherals, printers and other associated systems hardware. The majority of our computer hardware sales are as a part of larger projects, requiring a combination of Microsoft Windows servers and PC hardware provision, system migration, software applications, and services and support.  For this reason we do not offer stock lists and price lists or online ordering facilities on this ‘site.  Preferring to quote individuals and companies alike based on their specific computing needs and budget requirements</p>
    	</div>
    	<div class="col-md-4 col-sm-4 col-xs-12">
    	    <img src="images/services/hardware.png" alt="" class="img-responsive">
    	</div>
         <div class="col-md-8 col-sm-8 col-xs-12">
    		<h2 class="text-uppercase"><sup class="badge">Computer Maintenance</sup></h2>
             <p>Get expert computer maintenance and repair services from Calyx Solutions. We provides BETTER SOLUTIONS and BETTER SERVICE. When you need fast and efficient computer repair and maintenance services, there is no other local company that provides a customer service experience quite like Calyx Solutions. </p><p>We love solving your computer problems and with a vast experience in the ICT field, we lean on our knowledge and know-how to get your computer, network and technology issues resolved in a timely manner. We understand that many of you have businesses that cannot stop and slow down. We understand that our residential clients have important tasks to complete. We understand that unforeseen computer problems can put a damper to your day, and that's why thousands (literally) of businesses and residential customers have trusted Calyx Solutions to save their day. Get your computer, network and other peripheral technology repaired today.</p>
    	</div>
    	<div class="col-md-4 col-sm-4 col-xs-12">
    	    <img src="images/services/maintenance.jpg" alt="" class="img-responsive">
    	</div>
          <div class="col-md-8 col-sm-8 col-xs-12">
    		<h2 class="text-uppercase"><sup class="badge">ICT Consultancy Services</sup></h2>
    		<p>Our mission is to analyze and solve the strategic or routine ICT problems our customers have. We feel strongly that the core of our business is the provision of ICT consulting services which is implemented by combination of talented information technology consultants, practical methodologies, and a passion for delivering truly beneficial ICT solutions. We couple a methodology of outstanding customer ICT consulting service to support our customers with up-to-date tools and innovative ideas.</p>


              <P>We help the client in monitoring the performance and enhancing the overall performance of the business. We endeavor to manage the requirements of your business by formulating and implementing the projects in a productive way.</P>
    	</div>
    	<div class="col-md-4 col-sm-4 col-xs-12">
    	    <img src="images/services/mobile%20apps.jpg" alt="" class="img-responsive">
    	</div>
                </div>
	
</div>
          
		</section>

	   
      	
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?  <br> Contact us.</h2>
            	<div class="block-23 mb-3">
	              <ul>
	              
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0720901994 / 0726695146 / 0715958654</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@calyxsolutions.co.ke</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">About us</h2>
              
              
						<p class="mb-0"> We create a comprehensive IT strategy for a digital and technological transformation of your organization that goes in line with your business objectives. </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <!-- <li><a href="index.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="about.html"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li> -->
                <li><a href=services.html><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <!-- <li><a href="potfolio.html"><span class="ion-ios-arrow-round-forward mr-2"></span>potfolio</a></li>
                 -->
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
           
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
 Copyright &copy; <script>document.write(new Date().getFullYear());</script> Calyx Solutions All rights reserved |Designed by <a href="http://www.calyxsolutions.co.ke/" target="_blank">Calyx Solutions</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  


  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>




