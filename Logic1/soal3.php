<?php
$soal = "Soal 3";
include '../functions.php';
include 'tplLogic1.php';
if (isset($_POST['submit'])) {
	# mengambil range
	$r = $_POST['range'];
	if ($r%2 == 0) {
		$r+=1;
	}

	echo "<table>";
	for($y=1;$y<=$r;$y++) {
		echo "<tr>";
		for($x=1;$x<=$r;$x++) {
			if ($x==$y || $x==$r-($y-1)) {
				echo "<td>*</td>";
			} else {
				echo "<td></td>";
			}
		}
		echo "<tr>";
	}
	echo "</table>";
	br();
	include 'footer.php';
}