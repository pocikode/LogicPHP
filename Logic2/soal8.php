<?php
$soal = 'Soal 8';
include 'tplLogic2.php';
include '../functions.php';

if (isset($_POST['submit'])) {
	$r = $_POST['range'];
	if ($r>0 && $r%2 == 0) {
		$r+=1;
	}

	table_o();
	for($y=1;$y<=$r;$y++) {
		tr_o();
		for($x=1;$x<=$r;$x++) {
			if ($x==$y) {
				td($y*2-1);
			} elseif ($x==$r-($y-1)) {
				td($x*2-2);
			} elseif ($x<=$y && $x<=$r-($y-1)) {
				td("A");
			} elseif ($x>=$y && $x>=$r-($y-1)) {
				td("B");
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