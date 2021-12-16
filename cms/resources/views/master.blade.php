<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Frozen Yogurt Shop</title>
	<link rel="stylesheet" href="theme/css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="theme/css/mobile.css">
	<script src="theme/js/mobile.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div id="page">
		<div id="header">
			<div>
				<a href="land" class="logo"><img src="theme/images/logo.png" alt=""></a>
				<ul id="navigation">
					<li class="selected">
						<a href="land">Home</a>
					</li>
					<li class="menu">
						<a href="about">About</a>
						<ul class="primary">
							<li>
								<a href="product">Product</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>


@yield('content')



<div id="footer">
			<div>
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
					<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
					<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
					<a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
				</div>
				<p>&copy; 2023 Freeeze. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
