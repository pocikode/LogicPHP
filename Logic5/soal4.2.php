<?php
$soal=4.2;
include '../functions.php';
include 'tpl5.php';

if (isset($_POST['submit'])) {
	$j = $_POST['jumlah'];

	table_o();
	for($r=1; $r<=$j; $r++) {
		for($y=$r; $y>=1; $y--) {
			tr_o();
			for($g=1; $g<=pytot($r-1); $g++) {
				td();
			}
			for($s=1; $s<=$r-$y; $s++) {
				td();
			}
			for($x=1; $x<=$y*2-1; $x++) {
				td("*");
			}
			for($s=1; $s<=$r-$y; $s++) {
				td();
			}
			for($g=1; $g<=pytot($j)-pytot($r); $g++) {
				td();
			}
			tr_c();
		}
	}
	table_c();

	br();
	include 'footer.php';
}