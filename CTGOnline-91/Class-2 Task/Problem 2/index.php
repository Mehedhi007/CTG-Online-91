<!DOCTYPE html>
<html>
<head>
	<title>PHP Problem 1</title>
</head>
<body>

	<?php

		//Part-1

		//Create Variable and Assign Name
		$name = "Md.,Mehedhi,Islam,Neloy";
		//Slipt The Name Where Comma is found
		$split_name = explode(',', $name);

		var_dump($split_name);



		//Part-2
		//implode
		$strArray = ["Coders","Trust","Succes","Story"];

		//join the array elements using implode function
		$joinedArray = implode(" ", $strArray);

		//display the result;
		echo "<br><br><br>".$joinedArray;



	?>


</body>
</html>