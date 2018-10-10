<?php
$soal = 'Soal 4';
include 'tplLogic2.php';
include '../functions.php';

if (isset($_POST['submit'])) {
	$r = $_POST['range'];
	if ($r>0 && $r%2 ==0) {
		$r+=1;
	}

	table_o();
	for($y=1;$y<=$r;$y++) {
		tr_o();
		for($x=1;$x<=$r;$x++) {
			if ($x==$y || $x==round($r/2)) {
				$n = $y*2-1;
				td($n);
			} elseif ($x==$r-($y-1) || $y==round($r/2)) {
				$n = $x*2-2;
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