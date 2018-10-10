<?php
$soal = "Soal 7";
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
			if ($x<=$y && $x>=$r-($y-1)) {
				echo "<td>*</td>";
			} elseif ($x>=$y && $x<=$r-($y-1)) {
				echo "<td>*</td>";
			} else {
				echo "<td></td>";
			}
		}
		echo "</tr>";
	}
	echo "</tables>";	

	br();
	include 'footer.php';
}