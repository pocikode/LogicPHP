<?php
$soal = 3;
include '../functions.php';
include 'tpl4.php';

if (isset($_POST['submit'])) {
	$r = $_POST['sisi'];
	$ry= $r-1;
	$rx= $r+$r-1;

	table_o();
	for($y=-$ry; $y<=$ry; $y++) {
		tr_o();
		for($x=1; $x<=$rx; $x++) {
			if ($x>=abs($y)+1 && $x<=$rx-(abs($y))) {
				$n = $x-abs($y);
				td($n);
			} else {
				td();
			}
		}
	}

	br();
	include 'footer.php';
}