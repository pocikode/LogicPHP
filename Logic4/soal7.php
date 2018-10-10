<?php
$soal = 7;
include '../functions.php';
include 'tpl4.2.php';

if (isset($_POST['submit'])) {
	$r = $_POST['sisi']-1;
	$l = $_POST['loop'];

	table_o();
	for($y=-$r; $y<=$r; $y++) {
		tr_o();
		for ($i=1; $i <= $l; $i++) { 
			for($x=-$r; $x<=$r; $x++) {
				if (abs($x)<=$r-abs($y)) {
					$n = ($r+1)-abs($x)-abs($y);
					if ($i>1 && $x==-$r) {continue;}
					td(ganjil($n));
				} else {
					if ($i>1 && $x==-$r) {continue;}
					td(" ");
				}
			}
		}
		tr_c();
	}
	table_c();

	br();
	include 'footer.php';
}