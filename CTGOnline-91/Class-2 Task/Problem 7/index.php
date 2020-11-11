<!DOCTYPE html>
<html>
<head>
	<title>PHP Problem 1</title>
</head>
<body>

	<?php

		//Declare and assign value
		$a=8;
		$b=5;

		//function to find out the bigger number and addition and subtraction
		function compareNumber($x,$y){

			if($x>$y){
				return "The result after subtraction: ".($x-$y);//if first number is bigger return difference
			}
			else{
				return "The result after Addition: ".($x+$y);//if first number is smaller return sum
			}

		}

		echo compareNumber($a,$b);
		

	?>


</body>
</html>