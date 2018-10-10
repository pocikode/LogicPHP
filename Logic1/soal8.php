<?php
$soal = "Soal 8";
include 'tplLogic1.php';
include '../functions.php';

if (isset($_POST['submit'])) {
	$r = $_POST['range'];
	if ($r%2 == 0) {
		$r+=1;
	}
	
	echo "<table>";
	for($y=1;$y<=$r;$y++) {
		echo "<tr>";
		for($x=1;$x<=$r;$x++) {
			if ($x<=$y && $x<=$r-($y-1)) {
				td("*");
			} elseif ($x>=$y && $x>=$r-($y-1)) {
				td("*");
			} else {
				td();
			}
		}
		echo "</tr>";
	}
	echo "</table>";

	br();
	include 'footer.php';
}