<?php
$soal = 1;
include '../functions.php';
include 'tpl5.php';

if (isset($_POST['submit'])) {
	$j = $_POST['jumlah'];

	table_o();
	for($r=1; $r<=$j; $r++) {
		for($y=1; $y<=$r; $y++) {
			tr_o();
			for($g=1; $g<=gap($r-1); $g++) {
				td();
			}
			for($x=1; $x<=$r; $x++) {
				td("*");
			}
			for($g=1; $g<=gap($j)-gap($r); $g++) {
				td();
			}
			tr_c();
		}
	}
	table_c();

	br();
	include 'footer.php';
}