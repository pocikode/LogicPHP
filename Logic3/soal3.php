<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Logic 3 - Soal 2</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/logic.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="container">
				<a href="../index.php" class="navbar-brand">Logic-PHP</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLogic" aria-controls="navbarLogic" aria-expanded="false" aria-label="Toggle navigation">
		        	<span class="navbar-toggler-icon"></span>
		     	</button>

		     	<div class="collapse navbar-collapse" id="navbarLogic">
		     		<ul class="navbar-nav mr-auto">
		     			<li class="nav-item">
		     				<a class="nav-link" href="../index.php">Home</a>
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
		<h1>Logic 3 - Soal 2</h1>
		<form action="" method="POST">
			<div class="form-group">
				<label for="inputBil1">Masukan bilangan 1 :</label>
				<input type="text" class="form-control" id="inputBil1" name="bil1">
			</div>
			<div class="form-group">
				<label for="inputBil2">Masukan bilangan 2 :</label>
				<input type="text" class="form-control" id="inputBil2" name="bil2">
			</div>
			<input type="submit" class="btn btn-primary" name="submit" value="Submit">
		</form>
		<br>
	
<?php
if (isset($_POST['submit'])) {
	$a = $_POST['bil1'];
	$b = $_POST['bil2'];

	# Greates Common Diviser
	function gcd($a,$b)
	{
		while ($b != 0) {
			$c = $a%$b;
			$a = $b;
			$b = $c;
		}
		return $a;
	}

	# KPK
	function kpk($a,$b)
	{
		return $a*$b/gcd($a,$b);
	}

	echo "<div class='alert alert-primary' role='alert'>";
	echo "FPB dari bilangan $a dan $b adalah ".gcd($a,$b);
	echo "</div>";
	echo "<div class='alert alert-success' role='alert'>";
	echo "KPK dari bilangan $a dan $b adalah ".kpk($a,$b);
	echo "</div>";

	br();
	include 'footer.php';
}
