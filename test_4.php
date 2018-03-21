<?php

	echo file_get_contents("./test.txt");
?>
<meta charset="utf-8">

<form action="index.php" method="get" accept-charset="utf-8">

  	<!-- <input type="file" name="sfile1"> -->
	<input type="submit" name="deny" value="不同意">

</form>

<form action="next.php" method="get" accept-charset="utf-8">
  <!-- <input type="file" name="sfile2"> -->
  <input type="submit" name="accept" value="同意">

</form>