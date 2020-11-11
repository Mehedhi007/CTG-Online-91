<!DOCTYPE html>
<html>
<head>
	<title>PHP Problem 6</title>
</head>
<body>

	<?php
		//Name Array
		$names= array("Mehedhi","pritom","Neloy","Bahadur","Nasimul","Rock", "Undertaker","Kane","Bulldog","Kitten");
		//Print the full name has less than or equal to 5 characters
		for($i=0;$i<10;$i++)
		if(strlen($names[$i])<=5){
			echo $names[$i]."<br>";
		}


	?>


</body>
</html>