<!DOCTYPE html>
<html>
<head>
	<title>OOP Problem 5</title>
</head>
<body>

	<?php

		include 'Gorib.php';
		
		class myStatus implements Gorib{

				public function lowMoney(){
						echo"Money=Low<br>";
				}
				public function homeless(){
						echo"Homeless=Yes<br>";
				}



		}

		$status = new myStatus();
		$status->lowMoney();
		$status->homeless();
		

	?>


</body>
</html>