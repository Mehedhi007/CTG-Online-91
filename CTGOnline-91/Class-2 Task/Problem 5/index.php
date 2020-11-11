<!DOCTYPE html>
<html>
<head>
	<title>PHP Problem 1</title>
</head>
<body>

	<?php

		//Declare and assign value to 3 variables
		$a = 2;
		$b = 7;
		$c = 5;

		//find and print the max number
		if($a>$b && $a>$c){
			echo "The Max Number is ".$a;
		}
		else if($b>$a && $b>$c){
			echo "The Max Number is ".$b;
		}
		else {
			echo "The Max Number is ".$c;
		}

		

	?>


</body>
</html>