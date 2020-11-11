<!DOCTYPE html>
<html>
<head>
	<title>PHP Problem 4</title>
</head>
<body>

	<?php

		$r=0;
		//Recursive
		function sum($count){


			if($count!=0){
				$GLOBALS['r'] += $count;
				sum(--$count); 
			}

		}
		sum(5);
		echo $r;
	?>


</body>
</html>