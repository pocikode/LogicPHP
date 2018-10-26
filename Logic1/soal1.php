<?php
include '../functions.php';
$soal = "Soal 1";
include 'tplLogic1.php';
if (isset($_POST['submit'])) {
	$r = $_POST['range'];

// this Logic use php
	echo "<table>";
	for($y=1;$y<=$r;$y++) {
		echo "<tr>";
		for($x=1;$x<=$r;$x++) {
			if ($x==$y) {
				echo "<td>*</td>";
			} else {
				echo "<td></td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
	br();
	include 'footer.php';
}
