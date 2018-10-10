<?php
/**
* AGUS SUPRIYATNA
* CUSTOM FUNCTION
**/
# Print New Line
function br()
{
	echo"<br>";
}

## TABLE function
# table open
function table_o()
{
	echo "<table>";
}
# table close
function table_c()
{
	echo "</table>";
}
# tr open
function tr_o()
{
	echo "<tr>";
}
# tr close
function tr_c()
{
	echo "</tr>";
}
# td
function td($a="")
{
	echo "<td>$a</td>";
}

# fibonacci
function fib($i)
{
	if ($i==1 || $i==2) {
		return 1;
	} else {
		return fib($i-1)+fib($i-2);
	}
}

# ganjil
function ganjil($i)
{
	return $i*2-1;
}

# gap
function gap($i)
{
	return $i*($i+1)/2;
}
# pyramid total
function pytot($i)
{
	return $i*$i;
}
