<!DOCTYPE html>
<html>
<head>
	<title>PHP Problem 5</title>
</head>
<body>

	<?php
		$i=0;
		//Take Array
		$numbers=array(1,2,3,4,5,6,7,8,9,10);

		//print array odd elements using loop
		for($i=0; $i < 10; $i++){
			if($numbers[$i]%2!=0)echo $numbers[$i]."<br>";
		}
		

	?>


</body>
</html>