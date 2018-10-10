<?php
include '../functions.php';
$soal = 8;
include 'tpl5.php';

if (isset($_POST['submit'])) {
	$j = $_POST['jumlah'];
	$s = $j-1;

	table_o();
	for($r=1; $r<=$j; $r++) {
		for($y=1; $y<=$r; $y++) {
			tr_o();
			$n=1;
			for($x=-$s; $x<=$s; $x++) {
				if (abs($x)<$y) {
					td($n);
					$n++;
				}
				else {
					td();
				}
			}
			tr_c();
		}
		
	}
	table_c();

	br();
	include 'footer.php';
}