<?php
$soal = 'Soal 5';
include 'tplLogic2.php';
include '../functions.php';

if (isset($_POST['submit'])) {
	$r = $_POST['range'];

	table_o();
	for($y=1;$y<=$r;$y++) {
		tr_o();
		for($x=1;$x<=$r;$x++) {
			if ($x<=$y) {
				td($x*2-1);	
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