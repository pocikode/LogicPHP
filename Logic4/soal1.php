<?php
$soal = 1;
include '../functions.php';
include 'tpl4.php';

if (isset($_POST['submit'])) {
	$r = $_POST['sisi'];
	$rx = $r+$r-1;

	table_o();
	for($y=1; $y<=$r; $y++) {
		tr_o();
		for($x=1; $x<=$rx; $x++) {
			$b = round($rx/2);
			if ($x>=$b-($y-1) && $x<=$b+($y-1)) {
				$n = $x-($b-$y);
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