<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Text Input Effects | Set 1</title>
	<meta name="description" content="Simple ideas for enhancing text input interactions" />
	<meta name="keywords" content="input, text, effect, focus, transition, interaction, inspiration, web design" />
	<meta name="author" content="Codrops" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheet/main.css">
	<link rel="shortcut icon" href="../favicon.ico">

	<link rel="stylesheet" type="text/css" href="dist/css/normalize.css" />

	<!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" /> -->
	<link rel="stylesheet" type="text/css" href="dist/css/form.css" />
	<link rel="stylesheet" type="text/css" href="dist/css/selected.css" />

	
	<script src="dist/js/modernizr.custom.js"></script>


	<style>

	#fadeInLeft{
		animation: fadein 5s;
		-moz-animation: fadein 5s; /* Firefox */
		-webkit-animation: fadein 5s; /* Safari and Chrome */
		-o-animation: fadein 5s; /* Opera */
	}
	@keyframes fadein {
		from {
			opacity:0;
		}
		to {
			opacity:1;
		}
	}
	@-moz-keyframes fadein { /* Firefox */
		from {
			opacity:0;
		}
		to {
			opacity:1;
		}
	}
	@-webkit-keyframes fadein { /* Safari and Chrome */
		from {
			opacity:0;
		}
		to {
			opacity:1;
		}
	}
	@-o-keyframes fadein { /* Opera */
		from {
			opacity:0;
		}
		to {
			opacity: 1;
		}
	}
</style>
</head>
<body>
	<div class="container">
		<div class="content">
			<header class="codrops-header">
				<a href="search.php"><p class="nav-link" style="text-align: left; padding-left: 30px; color: #404d5b">Back To Home</p></a>
				<h1>Registration Form</h1>
			</header>
			<form method="post" action="payment.php">
				<div id="fadeInLeft">
					<span class="input input--hoshi">
						<input required class="input__field input__field--hoshi" name="name" type="text" id="input-4" />
						<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
							<span class="input__label-content input__label-content--hoshi">Full Name </span>
						</label>
					</span><br>
					<span class="input input--hoshi">
						<input required class="input__field input__field--hoshi" name="address" type="text" id="input-5" />
						<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
							<span class="input__label-content input__label-content--hoshi">Address</span>
						</label>
					</span><br>
					<span class="input input--hoshi">
						<input required class="input__field input__field--hoshi" name="telp" type="text" id="input-6" />
						<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-6">
							<span class="input__label-content input__label-content--hoshi">Telp</span>
						</label>
					</span><br>
					<span class="input input--hoshi">
						<input required class="input__field input__field--hoshi" name="gender" type="text" id="input-6" />
						<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-6">
							<span class="input__label-content input__label-content--hoshi">Gender</span>
						</label>
					</span><br>
					<span class="input input--hoshi">
						<input required="email" class="input__field input__field--hoshi" name="email" type="text" id="input-6" />
						<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-6">
							<span class="input__label-content input__label-content--hoshi">Email</span>
						</label>
					</span><br>
					<span class="input input--hoshi">
						<input class="input__field input__field--hoshi" name="religion" type="text" id="input-6" />
						<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-6">
							<span class="input__label-content input__label-content--hoshi">Religion</span>
						</label>
					</span><br>
					<span class="input input--hoshi">
						<input class="input__field input__field--hoshi" name="school" type="text" id="input-6" />
						<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-6">
							<span class="input__label-content input__label-content--hoshi">High School</span>
						</label>
					</span><br>
					<div id="nl-form" class="nl-form">
					<div style="width: 370px; float: right;"><select>
						<option value="1" selected>Click To Choose Faculty 2</option>
						<option value="2">Faculty of Engineering</option>
						<option value="3">Faculty of Humanity</option>
						<option value="4">Faulty of Psychology</option>
					</select></div>
					<div  style="width: 370px; float: right;"><select required>
						<option value="1" selected>Click To Choose Faculty 1</option>
						<option value="2">Faculty of Law</option>
						<option value="3">Faculty of Computer</option>
						<option value="4">Faculty of Administration</option>
					</select></div>
					
					<div  style="width: 370px; float: right;"><select required>
						<option value="1" selected>Click To Choose Degree</option>
					 	<option value="1">Diploma 3 Degree</option>
					 	<option value="2">Diploma 4 Degree</option>
					 	<option value="3">Bachelor's Degree</option>
					</select></div><br><br>
					<!-- <br/> -->
					<!-- <input type="text" value="" placeholder="any city" data-subline="For example: <em>Los Angeles</em> or <em>New York</em>"/> -->
					<!-- <div class="nl-overlay"></div> -->
				</div>
					<input type="submit" class="button" name="Submit" style="vertical-align:middle">
				</div>
			</form>
		</div>
	</div><!-- /container -->

	<script src="dist/js/classie.js"></script>
	<script src="dist/js/nlform.js"></script>
	<script>
			var nlform = new NLForm( document.getElementById( 'nl-form' ) );
		</script>
	<script>
		function myFunction() {
			location.reload();
		}
	</script>
	<script>
		(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
	</body>
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
	</html>
