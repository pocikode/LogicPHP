<?php
$soal = 2;
include '../functions.php';
include 'tpl4.php';

if (isset($_POST['submit'])) {
	$r = $_POST['sisi'];
	$rx= $r+$r-1;

	table_o();
	for($y=1; $y<=$r; $y++) {
		tr_o();
		for($x=1; $x<=$rx; $x++) {
			if ($x>=$y && $x<=$rx-($y-1)) {
				$n = $x-$y+1;
				td($n);
			} else {
				td();
			}
		}
	}

	br();
	include 'footer.php';
}