<?php
$soal = 7;
include '../functions.php';
include 'tpl4.php';

if (isset($_POST['submit'])) {
	$r = $_POST['sisi']-1;

	table_o();
	for($y=-$r; $y<=$r; $y++) {
		tr_o();
		for ($i=1; $i <= 3; $i++) { 
			for($x=-$r; $x<=$r; $x++) {
				if (abs($x)<=$r-abs($y)) {
					$n = ($r+1)-abs($x)-abs($y);
					td(ganjil($n));
				} else {
					td();
				}
			}
		}
		tr_c();
	}
	table_c();
}  