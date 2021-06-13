<!-- Write a PHP program to Add, Subtract, Multiply, Divide the 2 number using switch case -->

<!DOCTYPE html>
<html>
<head>
	<title>a5</title>
</head>
<body>
<form method="POST">
	<input type="text" name="num1" placeholder="Enter num 1"><p>
	<input type="text" name="num2" placeholder="Enter num 2"><p>
	<input type="text" name="op" placeholder="Enter operator"><p>
	<input type="submit" name="submit" value="submit">
</form>

<?php
	if(isset($_POST['submit']))
	{
		$a = $_POST['num1'];
		$b = $_POST['num2'];
		$operator = $_POST['op'];
		echo "The first number : $a<br>";
		echo "The second number : $b<br>";
		switch ($operator)
		{
			case '+': $ans = $a + $b;
					echo "Addition is : ".$ans;
				break;

			case '-': $ans = $a - $b;
					echo "Subtraction is : ".$ans;
				break;

			case '*': $ans = $a * $b;
					echo "Multiplication is : ".$ans;
				break;

			case '/': $ans = $a / $b;
					echo "Division is : ".$ans;
				break;
			
			default:
				echo "invalid option";
				break;
		}
	}

?>
</body>
</html>