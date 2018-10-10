<?php
$soal = 'Soal 6';
include 'tplLogic2.php';
include '../functions.php';

if (isset($_POST['submit'])) {
	$r = $_POST['range'];

	table_o();
	for($y=1;$y<=$r;$y++) {
		tr_o();
		for($x=1;$x<=$r;$x++) {
			if ($x>=$r-($y-1)) {
				$n = ($r*2)-($y*2);
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