<!DOCTYPE html>
<html>
<head>
	<title>OOP Problem 2</title>
</head>
<body>

	<?php

		class Key{

			private $key;

			public function setKey($x){
					$this->key = $x;
			}

			public function getKey(){
				return $this->key;
			}


		}


		$keyOne = new Key;

		$keyOne->setKey("12345");
		echo $keyOne->getKey();

	?>


</body>
</html>