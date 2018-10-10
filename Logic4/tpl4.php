<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Logic 4 - Soal <?= $soal ?></title>
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
		<h1>Logic 4 - Soal <?= $soal ?></h1>
		<form action="" method="POST">
			<div class="form-group">
				<label for="inputSisi">Masukan Sisi :</label>
				<input type="text" class="form-control" id="inputSisi" name="sisi">
			</div>
			<input type="submit" class="btn btn-primary" name="submit" value="Submit">
		</form>
		<br>