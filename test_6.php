<?php
	if(isset($_GET['sub'])){
		$clo = $_GET['clo'];
		$row = $_GET['row'];
		$wd = ($clo * $row * 20).px;
		$color = null;
		echo "<table border=1 width=$wd>";
		for($i = 1; $i <= $clo; $i++){
			if($i%2==0){
				$color = 'red';
			}else{
				$color = 'green';
			}
			echo "<tr bgColor=$color>";
			for($j = 0; $j < $row; $j++){
				echo "<td>";
				echo $j;
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
?>
<meta charset="utf-8">
<form action="test_6.php" method="get" accept-charset="utf-8">
	<h3>输入行列生成表格</h3>
	输入行: <input type="text" name="clo" value="<?php echo $clo?>">
	<br/>
	输入列：<input type="text" name="row" value="<?php echo $row?>">
	<br/>
	<br/>
	<input type="submit" name="sub" value="生成表格">
	<input type="submit" name="reset" value="重置行列">
</form>