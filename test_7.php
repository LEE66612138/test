<?php
	$bgcolor = null;
	$color = null;
	echo "<table width=200px border=1>";
	for($i = 1; $i <= 100; $i++){
		if($i%2==0){
			$color = green;
		}else{
			$color = orange;
		}
		echo "<tr bgColor=$color onmouseover=mouseover(this) onmouseout=mouseout(this)>";
		for($j = 1; $j <= 10; $j++){
			echo "<td>";
			$sum = $i * 10 + $j;
			echo $sum;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>

<meta name="name" content="content" charset="utf-8"/>
<script type="text/javascript" charset="utf-8">
	function mouseover(the){
		$bgcolor = the.bgColor;
		the.bgColor = 'red';

	}
	function mouseout(the){
		the.bgColor = $bgcolor;
	}
</script>