<!DOCTYPE html>
<html>
<head>
	<title>PHP Problem 1</title>
</head>
<body>

	<?php

		//Declare and assign value
		$firstName="Md. Mehedhi Islam";
		$lastName="Neloy";

		//function for name concatenation
		function nameConcat($first,$last){

			return $first." ".$last;

		}

		echo "Welcome ". nameConcat($firstName,$lastName)."!";
		

	?>


</body>
</html>