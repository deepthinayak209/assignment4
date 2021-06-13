<!-- Write a function to calculate the factorial of a number (a non-negative integer).
 The function accepts the number as an argument. -->

<!DOCTYPE html>
<html>
<head>
	<title>a13</title>
</head>
<body>
<p>factorial of  number 7 is :</p>
<?php
function factorial_of_a_number($n)
{
  if($n ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $n * factorial_of_a_number($n-1);
    }
	}
print_r(factorial_of_a_number(7)."\n");
?>
</body>
</html>






