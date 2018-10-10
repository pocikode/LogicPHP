<?php
$soal = 'Soal 8';
include '../functions.php';
include 'tplLogic3.php';

$char = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

if (isset($_POST['submit'])) {
	$r = $_POST['range'];
	if ($r>52) {
		echo "Range tidak boleh lebih dari 52!";
	} else {
		table_o();
		for($y=-$r; $y<=$r; $y++) {
			tr_o();
			for($x=-$r; $x<=$r; $x++) {
				$n = abs($x)>=abs($y) ? abs($x) : abs($y);
				$n = abs($n-$r)+1;
				if ($n%2 != 0) {
					$i = ($n+1)/2;
					td(fib($i));
				} else {
					$i = ($n/2)-1;
					td($char[$i]);
				}
			}
			tr_c();
		}
		table_c();
	
		br();
		include 'footer.php';
	}
}