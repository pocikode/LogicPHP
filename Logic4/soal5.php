<?php
$soal = 5;
include '../functions.php';
include 'tpl4.php';

if (isset($_POST['submit'])) {
	$r = $_POST['sisi'];
	$rx= $r-1;

	table_o();
	for($y=1; $y<=$r; $y++) {
		tr_o();
		for($x=-$rx; $x<=$rx; $x++) {
			if (abs($x)<=$r-$y) {
				$i = ($r+1)-abs($x)-$y;
				td(ganjil($i));
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