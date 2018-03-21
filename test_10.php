<?php
	echo "<table>";
	for($i = 1; $i <= 5; $i++){
		echo "<tr>";
		for($j = 1; $j <= 5 - $i; $j++){
			echo "<td>";
			echo "&nbsp";
			echo "</td>";
			// echo "&nbsp";
		}
		for($k = 1; $k <= $i * 2 - 1; $k++){
			echo "<td>";
			echo "*";
			echo "</td>";
		}
		echo "</tr>";
		// echo "<br/>";
	}
	echo "</table>";

	echo "<table>";
	for($i = 1; $i <= 5; $i++){
		echo "<tr>";
		for($j = 1; $j <= 5-$i; $j++){
			echo "<td>";
			echo "&nbsp";
			echo "</td>";
		}
		for($k =1; $k <= $i*2-1; $k++){
			if($i != 5){
				if($k==1||$k==$i*2-1){
					echo "<td>";
					echo "*";
					echo "</td>";
				}else{
					echo "<td>";
					echo "&nbsp";
					echo "</td>";
					// echo "&nbsp";
				}
			}else{
				echo "<td>";
				echo "*";
				echo "</td>";
			}
		}
		echo "</tr>";
		// echo "<br/>";
	}
	echo "</table>";
?>