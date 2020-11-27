<!DOCTYPE html>
<html>
<head>
	<title>PHP Problem 1</title>
</head>
<body>

	<?php
		$number = $_POST["number"];
		
		for($i = 1; $i <= 10; $i++){
			echo $number." x ".$i." = ".$i*$number."<br>"; 
		}

		

	?>


</body>
</html>