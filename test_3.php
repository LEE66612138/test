<?php
    // phpinfo();
    $ysf = null;
    if(isset($_GET['sub'])){
    	$num1 = $_GET["num1"];
		$num2 = $_GET["num2"];
		$ysf = $_GET["ysf"];
		$sum = 0;
		// echo $num1." ".$num2;
		// if()
		switch($ysf){
		case "+":
			$sum = $num1 + $num2;
			break;
		case "-":
			$sum = $num1 - $num2;
			break;
		case "*":
			$sum = $num1 * $num2;
			break;
		case "/":
			$sum = $num1 / $num2;
			break;
		case "%":
			$sum = $num1 % $num2;
			break;
		default:
			echo "输入有误";

		}
    }

?>
<meta charset="utf-8">

<form action="test_3.php" method="get" accept-charset="utf-8">
  <table border="1">
     	<tr>
     		<td><input name="num1" value="<?php echo $num1?>"></td>
     		<td>
     			<select name="ysf">
     				<option value="+" selected="<?php $ysf=='+'?true:false?>">+</option>
     				<option value="-" selected="<?php $ysf=='-'?true:false?>">-</option>
     				<option value="*" selected="<?php $ysf=='*'?true:false?>">*</option>
     				<option value="/" selected="<?php $ysf=='/'?true:false?>">/</option>
     				<option value="%" selected="<?php $ysf=='%'?true:false?>">%</option>
     			</select>
     		</td>
     		<td>
     			<input name="num2" value="<?php echo $num2?>">
     		</td>
     		<td>
     			<input type="submit" name="sub" value="计算">
     		</td>
     	</tr>
  </table>
</form>
<?php
	if(isset($_GET['sub'])){
		echo "<tr>";
		echo "<td c=4>";
		$str = "结果是:"."$num1"." $ysf "."$num2"." = ".$sum;
		echo "<input type='text' value='$str'>";
		// echo $str;
		echo "<td>";
		echo "</tr>";
	}
?>