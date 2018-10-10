<?php
$soal = 'Soal 6';
include '../functions.php';
include 'tplLogic3.php';

if (isset($_POST['submit'])) {
	$r = $_POST['range'];

	table_o();
	for($y=-$r; $y<=$r; $y++) {
		tr_o();
		for($x=-$r; $x<=$r; $x++) {
			$n = abs($x)>=abs($y) ? abs($x) : abs($y);
			$n = abs($n-$r)+1;
			if ($n%2 != 0) {
				td($n);
			} else {
				td();
			}
		}
		tr_c();
	}
	table_c();

	br();
	include 'footer.php';
}