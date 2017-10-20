<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Blueprint: Nested Accordion</title>
	<meta name="description" content="Blueprint: Nested Accordion" />
	<meta name="keywords" content="nested, accordion, simple, vertical, web development, css3, javascript" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheet/main.css">
	<link rel="stylesheet" type="text/css" href="dist/css/default_payment.css" />
	<link rel="stylesheet" type="text/css" href="dist/css/payment1.css" />

	<script src="dist/js/modernizr.custom.js"></script>
</head>
<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pendaftaran_kampus";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_POST['Submit'] == "Submit") {
	$name 		= $_POST['name'];
	$address 	= $_POST['address'];
	$telp 		= $_POST['telp'];
	$gender 	= $_POST['gender'];
	$email		= $_POST['email'];
	$religion	= $_POST['religion'];
	$school		= $_POST['school'];
}

// echo $name;

$sql = mysqli_query($conn, "INSERT INTO form_pendaftar (nama_pendaftar, alamat_pendaftar, no_telp_pendaftar, jk_pendaftar, email_pendaftar, agama, asal_sma) VALUES ('$name', '$address', '$telp', '$gender', '$email', '$religion', '$school')");

?>
<body>
	
	<div class="container">
		<header class="clearfix">

			<h1 style="color:#F7882F; ">Payment Method</h1>

		</header>	
		<div class="main">
			<ul id="cbp-ntaccordion" class="cbp-ntaccordion">
				<li>
					<h3 class="cbp-nttrigger">Bank Mandiri</h3>
					<div class="cbp-ntcontent">
						<ul class="cbp-ntsubaccordion">
							<li>
								<h4 class="cbp-nttrigger">ATM Mandiri</h4>
								<div class="cbp-ntcontent">
									<p>Payment methods using ATM Mandiri are as follows:<br>
										1. Select the Payment / Purchase menu<br>
										2. Select Multi Payment<br>
										3. Enter the company code 10003 (UI) then press TRUE<br>
										4. Enter the 9 digit registration number then press the TRUE button<br>
										5. The screen will display the identity and payment amount; press 1 if the data matches<br>
										6. To execute, press "YES", for cancellation press "NO"<br>
									</p>
								</div>
							</li>
							<li>
								<h4 class="cbp-nttrigger">Teller Mandiri</h4>
								<div class="cbp-ntcontent">
									<p>Fill in the form of Multi Payment by stating the registration number and the name of the applicant for the purpose of payment of University<br>
									Submit a blank to the teller to process the payment</p>
								</div>
							</li>
							<li>
								<h4 class="cbp-nttrigger">Internet Banking</h4>
								<div class="cbp-ntcontent">
									<p>Login with User ID and Password<br>
										1. Select the Payment menu<br>
										2. Select the Education menu<br>
										3. Select the account to pay for<br>
										4. Select Service Provider: 10003 Universitas<br>
										5. Enter your registration number in the Student Number field<br>
										6. Click "Continue", check the information that appears.<br>7. If appropriate, enter the PIN degenerate by Token into the available field. Select "Submit"<br>
									A validation of the system, print or save appears to be used as evidence.</p>
								</div>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<h3 class="cbp-nttrigger">CIMB Niaga</h3>
					<div class="cbp-ntcontent">
						<ul class="cbp-ntsubaccordion">
							<li>
								<h4 class="cbp-nttrigger">ATM CIMB Niaga</h4>
								<div class="cbp-ntcontent">
									<p>Payment methods using ATM Mandiri are as follows:<br>
										1. Select the Payment / Purchase menu<br>
										2. Select Multi Payment<br>
										3. Enter the company code 10003 (UI) then press TRUE<br>
										4. Enter the 9 digit registration number then press the TRUE button<br>
										5. The screen will display the identity and payment amount; press 1 if the data matches<br>
										6. To execute, press "YES", for cancellation press "NO"<br>
									</p>
								</div>
							</li>
							<li>
								<h4 class="cbp-nttrigger">Teller CIMB Niaga</h4>
								<div class="cbp-ntcontent">
									<p>Fill in the form of Multi Payment by stating the registration number and the name of the applicant for the purpose of payment of University<br>
									Submit a blank to the teller to process the payment</p>
								</div>
							</li>
							<li>
								<h4 class="cbp-nttrigger">Internet Banking</h4>
								<div class="cbp-ntcontent">
									<p>Login with User ID and Password<br>
										1. Select the Payment menu<br>
										2. Select the Education menu<br>
										3. Select the account to pay for<br>
										4. Select Service Provider: 10003 Universitas<br>
										5. Enter your registration number in the Student Number field<br>
										6. Click "Continue", check the information that appears.<br>7. If appropriate, enter the PIN degenerate by Token into the available field. Select "Submit"<br>
									A validation of the system, print or save appears to be used as evidence.</p>
								</div>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<h3 class="cbp-nttrigger">Bank BRI</h3>
					<div class="cbp-ntcontent">
						<ul class="cbp-ntsubaccordion">
							<li>
								<h4 class="cbp-nttrigger">ATM BRI</h4>
								<div class="cbp-ntcontent">
									<p>Payment methods using ATM Mandiri are as follows:<br>
										1. Select the Payment / Purchase menu<br>
										2. Select Multi Payment<br>
										3. Enter the company code 10003 (UI) then press TRUE<br>
										4. Enter the 9 digit registration number then press the TRUE button<br>
										5. The screen will display the identity and payment amount; press 1 if the data matches<br>
										6. To execute, press "YES", for cancellation press "NO"<br>
									</p>
								</div>
							</li>
							<li>
								<h4 class="cbp-nttrigger">Teller BRI</h4>
								<div class="cbp-ntcontent">
									<p>Fill in the form of Multi Payment by stating the registration number and the name of the applicant for the purpose of payment of University<br>
									Submit a blank to the teller to process the payment</p>
								</div>
							</li>
							<li>
								<h4 class="cbp-nttrigger">Internet Banking</h4>
								<div class="cbp-ntcontent">
									<p>Login with User ID and Password<br>
										1. Select the Payment menu<br>
										2. Select the Education menu<br>
										3. Select the account to pay for<br>
										4. Select Service Provider: 10003 Universitas<br>
										5. Enter your registration number in the Student Number field<br>
										6. Click "Continue", check the information that appears.<br>7. If appropriate, enter the PIN degenerate by Token into the available field. Select "Submit"<br>
									A validation of the system, print or save appears to be used as evidence.</p>
								</div>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<h3 class="cbp-nttrigger">Bank BNI</h3>
					<div class="cbp-ntcontent">
						<ul class="cbp-ntsubaccordion">
							<li>
								<h4 class="cbp-nttrigger">ATM BNI</h4>
								<div class="cbp-ntcontent">
									<p>Payment methods using ATM Mandiri are as follows:<br>
										1. Select the Payment / Purchase menu<br>
										2. Select Multi Payment<br>
										3. Enter the company code 10003 (UI) then press TRUE<br>
										4. Enter the 9 digit registration number then press the TRUE button<br>
										5. The screen will display the identity and payment amount; press 1 if the data matches<br>
										6. To execute, press "YES", for cancellation press "NO"<br>
									</p>
								</div>
							</li>
							<li>
								<h4 class="cbp-nttrigger">Teller BNI</h4>
								<div class="cbp-ntcontent">
									<p>Fill in the form of Multi Payment by stating the registration number and the name of the applicant for the purpose of payment of University<br>
									Submit a blank to the teller to process the payment</p>
								</div>
							</li>
							<li>
								<h4 class="cbp-nttrigger">Internet Banking</h4>
								<div class="cbp-ntcontent">
									<p>Login with User ID and Password<br>
										1. Select the Payment menu<br>
										2. Select the Education menu<br>
										3. Select the account to pay for<br>
										4. Select Service Provider: 10003 Universitas<br>
										5. Enter your registration number in the Student Number field<br>
										6. Click "Continue", check the information that appears.<br>7. If appropriate, enter the PIN degenerate by Token into the available field. Select "Submit"<br>
									A validation of the system, print or save appears to be used as evidence.</p>
								</div>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</li>
</ul>
</div>
</div>
<footer>
			<section>
		        <div id= "myFooter" class="container">
		            <div class="row">
		                <div class="col-sm-3">
		                    <h2 class="logo"><a href="#"><img src="asset/images/logo.png" style="width:120px; height: 120px; margin: 30px 0px;"></a></h2>
		                </div>
		                <div class="col-sm-2">
		                    <h5>Navigate</h5>
		                    <ul>
		                        <li><a href="home.php">Home</a></li>
		                        <li><a href="search.php">University</a></li>
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
		                    <button href="mailto:contact@jsn-dev.com?subject=Information%2E%2E%2E%20%28DD%2FMM%2FYYYY%29" type="button" class="btn btn-default">Contact us</button>
		                </div>
		            </div>
		        </div>
		        <div class="footer-copyright">
		            <center><p>© 2017 JSN Developers </p></center>
		        </div>
			</section>
		</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="dist/js/jquery.cbpNTAccordion.min.js"></script>
<script>
	$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpNTAccordion( [options] );
				- destroy:
				$( selector ).cbpNTAccordion( 'destroy' );
				*/

				$( '#cbp-ntaccordion' ).cbpNTAccordion();

			} );
		</script>
	</body>
	</html>
