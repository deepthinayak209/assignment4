<!-- Write an html page to provide menu driven option for following string operations
 and PHP script to evaluate the string functions. Use switch case
•	Reversing the string
•	Finding the length of the string
•	Substring operations
•	Converting to uppercase
•	Converting to lowercase
•	Counting the number of words.-->

<!DOCTYPE html>
<html>
<head>
	<title>a10</title>
</head>
<body>
<form method="POST">
<input type="text" name="txt" placeholder="Enter the string" required>
<p><input type="radio" name="string" value="reverse" required>Reverse
<p><input type="radio" name="string" value="length" required>Length of the string
<p><input type="radio" name="string" value="substring" required>Substring
<p><input type="radio" name="string" value="upper" required>Upper case
<p><input type="radio" name="string" value="lower" required>Lower case
<p><input type="radio" name="string" value="words" required>Number of words

<p><input type="submit" name="submit" value="submit">

</form>

<?php
	if($_POST)
	{
		$string = $_POST['string'];
		$txt = $_POST['txt'];
		switch ($string) {
			case 'reverse': $reverse = strrev($txt);
				echo "The reversed string of ".$txt." is: ".$reverse;
				break;

			case 'length': $length = strlen($txt);
				echo "The length of the string ".$txt." is :".$length;
				break;

			case 'substring': $sub = substr($txt, 5, 13);
				echo "The substring of string ".$txt." is :".$sub;
				break;

			case 'upper': $upper = strtoupper($txt);
				echo "The string ".$txt." in upper case is :".$upper;
				break;

			case 'lower': $lower = strtolower($txt);
				echo "The string ".$txt." in lower case is :".$lower;
				break;

			case 'words': $word = str_word_count($txt);
				echo "The number of words in a string ".$txt." is :".$word;
				break;
			
		}
	}


?>
</body>
</html>
