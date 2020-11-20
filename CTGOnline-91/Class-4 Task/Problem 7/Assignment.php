<!DOCTYPE html>
<html>
<head>
	<title>OOP Problem 7</title>
</head>
<body>

	<?php
		

		class Assignment{

			public $sentence;

			public function __construct($n){

				$this->sentence = $n;
				echo $this->sentence;
			}


			//Counting The NUmber of words in the string
			public function wordCount(){

				return str_word_count($this->sentence);

			}


			//Finding Out The Shortest Word

			public function wordLength(){

				$Length = 100;
				$array = explode(' ',$this->sentence);
				$shortestWord=0;

				foreach ($array as $word) {
   					if (strlen($word) < $Length) {
     					 $Length = strlen($word);
     			 		 $shortestWord = $word;
  				 }
				}
				echo $shortestWord;

			}


			//Word "WEB APPLICATION" Replacement with "WEBSITE"

			public function stringReplace(){
				return str_replace("WEB APPLICATION","WEBSITE",$this->sentence);
			}

		}


		$assignment = new Assignment("ADVANCED WEB APPLICATION DEVELOPMENT");
		echo "<br> Total Number of Words = ".$assignment->wordCount()."<br>";
		echo " The Word With The Shortest Letters = ";
		echo $assignment->wordLength();
		echo "<br> The String after Replacing = ".$assignment->stringReplace();

		

	?>


</body>
</html>