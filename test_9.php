<?php
	echo "<table width=600px>";
	for($i = 1; $i <= 9; $i++){
		echo "<tr>";
		for($j = 1; $j <= 9; $j++){
			if($j>$i)break;
			if($j%3==0)continue;
			$sum = $i * $j;
			echo "<td>";
			echo $i." * ".$j." = ".$sum;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

	echo "<table>";
	for($i = 1; $i <= 9; $i++){
		echo "<tr>";
		for($j = 1; $j<=2;$j++){
			if($j > $i)break;
			if($j > 2)continue;
			$sum1 = $i * $j;
			echo "<td>";
			echo $i." * ".$j." = ".$sum1;
			echo "</td>";
		}
		echo "</td>";
	}
	echo "</table>";

	echo "<table width= 150px>";
	for($i = 1; $i <= 3; $i++){
		echo "<tr>";
		for($j = 1; $j <=2; $j++){
			if($j>$i) continue;
			$sum2 = $i * $j;
			echo "<td>";
			echo $i." * ".$j." = ".$sum2;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>