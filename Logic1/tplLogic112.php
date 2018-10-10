<!DOCTYPE html>
<html>
<head>
	<title>Logic 1 - <?php echo $soal;?></title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/logic.css">

</head>
<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="container">
				<a href="#" class="navbar-brand">Logic</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLogic" aria-controls="navbarLogic" aria-expanded="false" aria-label="Toggle navigation">
		        	<span class="navbar-toggler-icon"></span>
		     	</button>

		     	<div class="collapse navbar-collapse" id="navbarLogic">
		     		<ul class="navbar-nav mr-auto">
		     			<li class="nav-item">
		     				<a class="nav-link" href="#">Home</a>
		     			</li>
		     			<li class="nav-item dropdown">
		     				<a class="nav-link dropdown-toggle" href="#" id="logicdrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Logic</a>
		     				<div class="dropdown-menu" aria-labelledby="logicdrop">
		     					<a class="dropdown-item" href="#">Logic 1</a>
		     					<a class="dropdown-item" href="#">Logic 2</a>
		     					<a class="dropdown-item" href="#">Logic 3</a>
		     					<a class="dropdown-item" href="#">Logic 4</a>
		     					<a class="dropdown-item" href="#">Logic 5</a>
		     				</div>
		     			</li>
		     		</ul>
		     	</div>
		     </div>
		</nav>
	</header>

	<br>
	<main role="main" class="container">
		<h1>Logic 1 - <?php echo $soal;?></h1>
		<form action="" method="POST">
			<div class="form-group">
				<label for="staticRange">Masukan Range : </label>
				<input type="text"  name="range" class="form-control" id="staticRange">
			</div>
			<input type="submit" class="btn btn-primary" value="Submit">
		</form>

		<br>


	<!-- </main> -->

	<!-- JS -->
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
<!-- </body> -->
<!-- </html> -->