<!DOCTYPE html>
<html>
<head>
	<title>PHP Problem 1</title>
</head>
<body>

	<?php

		//Declare and assign value to 3 name variables
		$name1 = "Mehedhi";
		$name2 = "Neloy";
		$name3 = "Jonathon";

		//find the shortest name
		if(strlen($name1)<strlen($name2) && strlen($name1)<strlen($name3)){
			echo "The Shortest Name is ".$name1;
		}
		else if(strlen($name2)<strlen($name1) && strlen($name2)<strlen($name3)){
			echo "The Shortest Name is ".$name2;
		}
		else {
			echo "The Shortest Name is ".$name3;
		}

		echo "<br><br><br>";


		//Name's Length Odd Even
		if(strlen($name1)%2 != 0){
			echo $name1." you are different!<br>";
		}
		else{
			echo $name1." you are general!<br>";
		}

		

		if(strlen($name2)%2 != 0){
			echo $name2." you are different!<br>";
		}
		else{
			echo $name2." you are general!<br>";
		}



		if(strlen($name3)%2 != 0){
			echo $name3." you are different!<br>";
		}
		else{
			echo $name3." you are general!<br>";
		}




	?>


</body>
</html>