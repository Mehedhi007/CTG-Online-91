<!DOCTYPE html>
<html>
<head>
	<title>OOP Problem 4</title>
</head>

<body>

	<?php

		include 'Car.php';
		class Audi extends Car{

			private $color;
			private $seatNumbers; 


			public function setColor($color){
				$this->color = $color;
			}
			public function getColor(){
				echo $this->color;
			}
			public function setSeatNumbers($numbers){
				$this->seatNumbers = $numbers;
			}
			public function getSeatNumbers(){
				echo $this->seatNumbers;
			}


		}

		$audi = new Audi();

		$audi->setEngineStatus("ENGINE = ON");
		$audi->getEngineStatus();
		echo"<br>";


		$audi->setBodyPart("BODY_PART = AWESOME");
		$audi->getBodyPart();
		echo"<br>";

		$audi->setColor("COLOR = RED");
		$audi->getColor();
		echo"<br>";

		$audi->setSeatNumbers("NUMBER OF SEATS = 2");
		$audi->getSeatNumbers();
		echo"<br>";




		

	?>


</body>
</html>