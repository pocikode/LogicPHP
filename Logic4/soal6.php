<?php
$soal = 6;
include '../functions.php';
include 'tpl4.php';

if (isset($_POST['submit'])) {
	$r = $_POST['sisi']-1;

	table_o();
	for($y=-$r; $y<=$r; $y++) {
		tr_o();
		for($x=-$r; $x<=$r; $x++) {
			if (abs($x)<=$r-abs($y)) {
				$i = ($r+1)-abs($x)-abs($y);
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