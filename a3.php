<!-- Write a PHP program to find a reverse number, also display sum of digit of given number and check given
 number is palindrome or not. -->

<!DOCTYPE html>
<html>
<head>
	<title>reverse</title>
</head>
<body>

<form method="POST">
<p>Enter a number:</p><input type="text" name="num"/>
<p><button type="submit"> check</button></p>
</form>

<?php
	if($_POST)
	{
		$num = $_POST['num'];
		$a = $num;
		$rev = 0;
		$sum = 0;
		$rem = 0;
		while ($num > 1) 
		{
			$rem = $num % 10;
			$sum += $rem;
			$rev = $rev * 10 + $rem;
			$num = (int)$num / 10; 
		}
		echo "The sum of thr digits of $a is: $sum";
		echo "<br>";
		if($a == $rev)
		{
			echo "The number $a is palindrome";
		}
		else
		{
			echo "The number $a is not a palindrome";
		}
	}
	?>
</body>
</html>