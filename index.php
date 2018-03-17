<!DOCTYPE html>
<html>
<head>
	<title>Navbar</title>
	<!-- Memanggil default css bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

	<!-- memanggil style css custom yang dibuat sendiri -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<!-- memanggil componet default navbar bootstrap -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Navbar</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  	</button>
		<div class="collapse navbar-collapse" id="navbarNav">
	    	<ul class="navbar-nav">
	      		<li class="nav-item active">
		        	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#">Features</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#">Pricing</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link disabled" href="#">Disabled</a>
		      	</li>
	    	</ul>
	  	</div>
	</nav>
	<!-- akhir memanggil componet default navbar bootstrap -->
</body>
</html>