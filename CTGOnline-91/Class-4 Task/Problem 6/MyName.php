<!DOCTYPE html>
<html>
<head>
	<title>OOP Problem 6</title>
</head>
<body>

	<?php
		class MyName{

			private $name;
			public function __construct($n){

				$this->name = $n;
				echo "Welcome ".$this->name;

			}

		}
		
		$name = new MyName("Md. Mehedhi Islam Neloy");
		

	?>


</body>
</html>