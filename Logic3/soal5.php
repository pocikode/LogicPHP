<?php
$soal = 'Soal 5';
include '../functions.php';
include 'tplLogic3.php';

if (isset($_POST['submit'])) {
	$r = $_POST['range'];
	#$n = '';

	table_o();
	for($y=-$r; $y<=$r; $y++) {
		tr_o();
		for($x=-$r; $x<=$r; $x++) {
			$n = abs($x)>=abs($y) ? abs($x) : abs($y);
			$n = abs($n-$r)+1;
			td(abs(fib($n)));
		}
		tr_c();
	}
	table_c();

	br();
	include 'footer.php';
}