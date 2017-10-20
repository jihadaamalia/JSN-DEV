<html>
	<head>
		<title>Home</title> 
		<link rel="shortcut icon" href="asset/images/logo.png">
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
		<?php require('head.php'); ?>


	</head>

	<body>
		<header>
			<section>
				<div class="container">
				  	<div class="row">
						<div class="col-md-12 pull-right ">
							<nav class="navbar navbar-toggleable-md">
								<button class="navbar-button navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
							  	<a class="navbar-brand" href="#"><img class="logo" src="asset/images/logo.png" /></a>
							  	<div class="navbar-collapse collapse dual-collapse underline-nav" id="navbarNav">
							        <ul class="navbar-nav ml-auto">
							            <li class="nav-item">
							                <a class="nav-link" href="#">Home</a>
							                <span></span>
							            </li>
							            <li class="nav-item">
							                <a class="nav-link" href="search.php">Universities</a>
							                <span></span>
							            </li>
							            <li class="nav-item">
							                <a class="nav-link" href="about.php">About</a>
							                <span></span>
							            </li>
							        </ul>
							    </div>
							</nav>
						</div> 
					</div>
					
					<div class="headline" >
						<h1 class="headline-text" >APPLY NOW.</h1>
						<p class="headline-description">Start your journey to the University with an Application for Admission from a single web</p>

						<form action="home_search.php" method="POST" class="row justify-content-center main-search">
						  	<div class="form-group">
						    	<label for="uni-name" class="sr-only">University Name</label>
						    	<input type="text" class="form-control" id="uni-name" placeholder="University Name">
						  	</div>
						    <div class="form-group hidden-md-down ">
								<select class="form-control" style=" height:100px; padding: 0 50px;">
								<option value="" disabled selected style="display: none;">University Area</option>
								  <option>Jakarta</option>
								  <option>Bogor</option>
								  <option>Depok</option>
								  <option>Tangerang</option>
								  <option>Bekasi</option>
								</select>
						    </div>
						    <div class="form-group hidden-md-down ">
								<select class="form-control" style=" height:100px; padding: 0 50px;">
								  	<option value="" disabled selected style="display: none;">Selected Major</option>
								    <option>Engineering</option>
								    <option>Medical</option>
								    <option>Politic</option>
								    <option>Business</option>
								    <option>Finance</option>
								</select>
						    </div>
						  	<a href="search.php"><button type="submit" class="btn btn-primary">Find</button></a>
						</form>
					</div>
				</div>
			</section>
		</header>

		<main>
			<section>
				<div data-aos="fade-up"  data-aos-duration="1500" data-aos-easing="ease-in-quad" class="container">
					<div class="row d-flex">
						<div class="col-9"><h2 class="section-title">Popular Universities</h2></div>
						<div class="col-3 d-flex flex-row-reverse">
							<a href="search.php" class=" hidden-md-down more align-self-end">Explore More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							<a href="search.php" class="more align-self-end hidden-lg-up">More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="slide-ver">
		          		<div class="slide-ver-container">
							<ul class="grid cs-style-3">
								<li>
									<figure>
										<img src="asset/images/universitas/trisakti.jpg" alt="img02">
										<figcaption>
										  <h5>Universitas Trisakti</h5>
										  <a class="d-flex justify-content-center" href="trisakti.php">Selengkapnya</a>
										</figcaption>
									</figure>
							    </li>
								<li>
									<figure>
										<img src="asset/images/universitas/binus.jpg" alt="img02">
										<figcaption>
										  <h5>Universitas Bina Nusantara</h5>
										  <a class="d-flex justify-content-center" href="binus.php">Selengkapnya</a>
										</figcaption>
									</figure>
							    </li>
								<li>
									<figure>
										<img src="asset/images/universitas/umn.jpg" alt="img02">
										<figcaption>
										  <h5>Universitas Multimedia Nusantara</h5>
										  <a class="d-flex justify-content-center" href="umn.php">Selengkapnya</a>
										</figcaption>
									</figure>
							    </li>
								<li>
									<figure>
										<img src="asset/images/universitas/untar.jpg" alt="img02">
										<figcaption>
										  <h5>Universitas Tarumanegara</h5>
										  <a class="d-flex justify-content-center" href="untar.php">Selengkapnya</a>
										</figcaption>
									</figure>
							    </li>
							</ul>
						</div>
					</div>
	            </div>
			</section>
			
			<section>
				<div data-aos="fade-up"  data-aos-duration="1500" data-aos-easing="ease-in-quad" class="container">
					<div class="row d-flex">
						<div class="col-9"><h2 class="section-title">Popular Majors</h2></div>
						<div class="col-3 d-flex flex-row-reverse">
							<a href="search.php" class=" hidden-md-down more align-self-end">Explore More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							<a href="search.php" class="more align-self-end hidden-lg-up">More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="slide-ver">
		          		<div class="slide-ver-container">
							<div class="row">
								<div class="col-3">
									<a 
										class="caption" 
										href="search.php" 
										data-title="ENGINEERING" 
										data-description="Field of major that requires lots of technical practice and strong quantitive skills">

										<img src="https://www.myamcat.com/blog/wp-content/uploads/2017/07/Engineering.jpg" alt="Engineering Major">
										
									</a>
								</div>
								<div class="col-3">
									<a 
										class="caption" 
										href="search.php" 
										data-title="MEDICAL" 
										data-description="Undergraduate major for medical studies, required to be a doctor">

										<img src="https://oup.silverchair-cdn.com/ImageLibrary/contact-medical.png" alt="Medical Major">
										
									</a>
								</div>
								<div class="col-3">
									<a 
										class="caption" 
										href="search.php" 
										data-title="ECONOMY" 
										data-description="Economics majors learn about economic theory, economic systems, and mathematical methods">

										<img src="http://www.financenewspro.com/wp-content/uploads/2013/11/Economy.jpg" alt="Economy Major">
										
									</a>
								</div>
								<div class="col-3">
									<a 
										class="caption" 
										href="search.php" 
										data-title="IT" 
										data-description="Major that study computer science, business, and communications">

										<img src="https://i.ndtvimg.com/i/2017-04/student-using-computer_650x400_41491999398.jpg" alt="IT">
										
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br><br><br>
			</section>

			<section>
				<div class="container">
					<div data-aos="zoom-in" data-aos-duration="1500" data-aos-easing="ease-in-out-cubic" class="row d-flex align-items-stretch">
						<div class="d-flex single-web-section col-md-6 col-xs-12">
							<div class="align-self-center">
								<h2 class="single-web-title">Apply to Multiple Universities from a Single Web</h2>
							</div>
						</div>
						<div class="col-md-6 col-xs-12 padding-single-web">
							<p class="single-web-sub">Find</p>
							<p class="single-web-desc">Use our university finder tool to explore all the university around Indonesia</p>
							<p class="single-web-sub">Read</p>
							<p class="single-web-desc">Our extensive information for each university will help you understand all the selection process</p>
							<p class="single-web-sub">Apply</p>
							<p class="single-web-desc">Brace yourself and start your future by signing up</p>
						</div>
					
					</div>
				</div>
			</section>

			<section class="timeline">
				<div class="container"><center><h2 data-aos-duration="1500" data-aos-easing="ease-in-quad" class="timeline-text">How Do We Work?</h2></center></div>
				<ol>
					<li>
						<div>
							<p class="timeline-title">Find Your University</p> Use our finder tool to find your dream university, open profile to see the informations.
						</div>
					</li>
					<li>
						<div>
							<p class="timeline-title">Choose Program</p> Select the selection program that you prefer from the available options.
						</div>
					</li>
					<li>
						<div>
							<p class="timeline-title">Fill in Your Data</p> Fill in all the required personal information that shown on the form.
						</div>
					</li>
					<li>
						<div>
							<p class="timeline-title">Download Form</p> Download the application form, fill in, and upload to our website.
						</div>
					</li>
					<li>
						<div>
							<p class="timeline-title">Transfer the Admission fee</p> Transfer the admission fee to the university bank account
						</div>
					</li>
					<li>
						<div>
							<p class="timeline-title">Prepare for the Test</p> You will receive entrance test card, and get ready for the entrance test based on given schedule.
						</div>
					</li>
					<li></li>
				</ol>
			</section>

			<section>
				<div class="container">
					<center><h2 class="call-text">Sounds interesting?</h2>
					<a data-aos="flip-down" data-aos-duration="1000" data-aos-easing="ease-in-sine" href="search.php" class="call-button">TRY NOW</a></center>
				</div>
			</section>
		</main>

		<footer>
			<section>
		        <div id= "myFooter" class="container">
		            <div class="row">
		                <div class="col-sm-3">
		                    <h2 class="logo hidden-md-down"><a href="#"><img src="asset/images/logo.png" style="width:120px; height: 120px; margin: 30px 0px;"></a></h2>
		                    <center class="hidden-lg-up"><a href="#"><img src="asset/images/logo.png" style="width:120px; height: 120px; margin: 30px 0px;"></a></center>
		                </div>
		                <div class="col-sm-2">
		                    <h5>Navigate</h5>
		                    <ul>
		                        <li><a href="home.php">Home</a></li>
		                        <li><a href="search.php">University</a></li>
		                        <li><a href="about.php">About</a></li>
		                    </ul>
		                </div>
		                <div class="col-sm-4">
		                    <h5>Supported By</h5>
							<div class="row">
								<div class="col-sm-6">
									<img src="asset/images/logo WDC.png" style="width:100px; height: 100px; padding:10px;">
								</div>
								<div class="col-sm-6">
									<img src="asset/images/logo HIMSISFO.png" style="width:100px; height: 100px; padding:10px;">
								</div>
							</div>
		                </div>
		                <div class="col-sm-3">
		                    <div class="social-networks">
		                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
		                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
		                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
		                    </div>
		                    <a href="mailto:contact@jsn-dev.com?subject=Information%2E%2E%2E%20%28DD%2FMM%2FYYYY%29" type="button" class="btn btn-default">Contact us</a>
		                </div>
		            </div>
		        </div>
		        <div class="footer-copyright">
		            <center><p>© 2017 JSN Developers </p></center>
		        </div>
			</section>
		</footer>
	</body>

	<script>

	AOS.init({
  disable: function() {
    var maxWidth = 768;
    return window.innerWidth < maxWidth;
  }
});

	</script>
</html>