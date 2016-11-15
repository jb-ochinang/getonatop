<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GETONATOP</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="wrap">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						<h1 class="logo"><a href="/"><img class="img-responsive" src="images/logo.png" alt="GETONATOP"></a></h1>
					</div>
					<div class="col-xs-6 cfx">
						<ul class="social cfx">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>

		<main>@yield('content')</main>
		
		@if($footer01 == true)
		<footer class="footer01">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<p class="copyright">Copyright Get Onatop © 2015 <a href="/privacy">Privacy Policy</a></p>
					</div>
					<div class="col-sm-6 cfx">
						<p class="footLink"><a class="emailAdd" href="#">info@getonatop.com</a></p>
					</div>
				</div>
			</div>
		</footer>
		@else
		<footer class="footer02">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<p class="copyright">Copyright Get Onatop © 2015</p>
					</div>
					<div class="col-sm-6 cfx">
						<p class="footLink"><a href="#">Privacy Policy </a> | <a href="#">info@getonatop.com</a></p>
					</div>
				</div>
			</div>
		</footer>
		@endif
	</div>
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/scrollreveal.js"></script>
	<script src="js/script.js"></script>
</body>

</html>