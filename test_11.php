<?php
	$arr1 = null;
	if(isset($_GET['sub'])){
		$hand = $_GET['style'];

		$arr = array("拳头","剪刀","布");
		$cmp = rand(0,2);//电脑产生一个随机数 对应数组的值r
		// if($cmp==0){
			// $arr1 = array('true','false','false');
		// }else if($cmp==1){
			// $arr1 = array('false','true','false');
		// }else{
			// $arr1 = array('false','false','true');
		// }
		echo "出的是".$arr[$cmp];
		switch($hand){
			case "拳头":
				$arr1 = array('true','false','false');
				if($cmp==0){
					echo "平局";
				}else if($cmp==1){
					echo "你获胜";
				}else {
					echo "你输了";
				}
				echo "<br/>";
				echo file_get_contents('./img/1.txt');
				break;
			case "剪刀":
				$arr1 = array('false','true','false');
				if($cmp==0){
					echo "你输了";
				}else if($cmp==1){
					echo "平局";
				}else {
					echo "你获胜";
				}
				echo file_get_contents('./img/2.txt');
				echo "<br/>";
				break;
			case "布":
				$arr1 = array('false','false','true');
				if($cmp==0){
					echo "你获胜";
				}else if($cmp==1){
					echo "你输了";
				}else {
					echo "平局";
				}
				echo "<br/>";
				echo file_get_contents('./img/3.txt');
				break;

		}
	}
?>
<meta charset='UTF-8'>
<form action="test_11.php" method='get' accept-charset="utf-8">
	你出拳 <select name="style">
		<option value="拳头" selected='$arr1[0]'>拳头</option>
		<option value="剪刀" selected='$arr1[1]'>剪刀</option>
		<option value="布" selected='$arr1[2]'>布</option>
	</select>
	<input type="submit" name="sub" value="提交">
</form>
