!DOCTYPE html>
<html>
<head>
	<title>PHP Problem 1</title>
</head>
<body>

	<?php

		$str1 = "Md.,Mehedhi,Islam,Neloy";

		//Split The Name Where Comma Exists
		$nameArray=explode(',', $str1);

		var_dump($nameArray);

		//Join the name words Using implode and Store in a new variable
		$str2 = implode(' ',$nameArray);


		echo "<br><br><br>".$str2;


	?>