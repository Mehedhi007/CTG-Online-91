<!DOCTYPE html>
<html>
<head>
	<title>OOP Problem 4</title>
</head>

<body>

	<?php

		
		class Car{

			private $engineStatus;
			private $bodyPart;

			public function setEngineStatus($status){
				$this->engineStatus = $status;
			}

			public function getEngineStatus(){
				echo $this->engineStatus;
			}

			public function setBodyPart($body){
				$this->engineStatus = $body;
			}

			public function getBodyPart(){
				echo $this->engineStatus;
			}

		}
		
	?>


</body>
</html>