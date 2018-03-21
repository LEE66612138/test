<?php
    // phpinfo();
	$sum = 0;
	echo "<table width=800px border=1>";
	for($i = 1; $i <= 9; $i++){
		echo "<tr>";
		for($j =1; $j <= $i; $j++){

				$sum = $i * $j;
				echo "<td>";
				$str = "$i"." * "."$j"." = ".$sum;
				echo "  ".$str;
				echo "</td>";

		}
		// echo "<br/>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<br/>";
	echo "<table width=800px border=1>";
	$sum1 = 0;
	for($i = 9; $i >= 1; $i--){
		echo "<tr>";
		for($j =1; $j<=$i ; $j++){
			$sum1 = $i * $j;
			echo "<td>";
			echo "$i"." * "."$j"." = ".$sum1;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "<br/>";
	echo "<table width=800px border=1>";
	$sum2 = 0;
	for($i = 9; $i >= 1; $i--){
		echo "<tr>";
		for($k = 1;$k <= 9-$i;$k++){
			echo "<td>";
			echo "&nbsp";
			echo "</td>";
		}
		for($j =1; $j<=$i ; $j++){
			$sum2 = $i * $j;
			echo "<td>";
			echo "$i"." * "."$j"." = ".$sum2;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

	echo "<br/>";
	echo "<table width=800px border=1>";
	$sum3 = 0;
	for($i = 1; $i <= 9; $i++){
		echo "<tr>";
		for($k = 1;$k <= 9-$i;$k++){
			echo "<td>";
			echo "&nbsp";
			echo "</td>";
		}
		for($j =1; $j<=$i ; $j++){
			$sum3 = $i * $j;
			echo "<td>";
			echo "$i"." * "."$j"." = ".$sum3;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>