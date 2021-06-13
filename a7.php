<!-- Prepare Electricity bill from user input based on a given tariff. 
Write a PHP program to input previous reading and present reading and prepare an
 electricity bill using the following conditions. 
Units 				Consumed Rate 
<100				Rs 3/ unit
Between 100 and 200    	Rs 4/ unit
Between 200 and 300 	Rs. 5/ Unit
>300				Rs. 6/ Unit
 -->

 <!DOCTYPE html>
 <html>
 <head>
 	<title>a7</title>
 </head>
 <body>
 <form method="POST">
 	<input type="text" name="num1" placeholder="Enter previous reading"><p>
 	<input type="text" name="num2" placeholder="Enter current reading"><p>
 	<input type="submit" name="submit" value="submit"><p>
 </form>

 <?php
 	if($_POST)
 	{
 		$previous = $_POST['num1'];
 		$current = $_POST['num2'];
 		$units = $current - $previous;
 		$total = 0;
 		if ($units <= 100) 
 		{
 			$total = $units * 3;
 		} 
 		elseif ($units <= 200) 
 		{
 			$total = (100 * 3) + ($units - 100) * 4;
 		}
 		elseif ($units <= 300) 
 		{
 			
 			$total = (100 * 3) + (100 * 4) + ($units - 200) * 5;
 		}
 		elseif ($units > 300) 
 		{
 			$total = (100 * 3) + (100 * 4) + (100 * 5) + ($units - 300) * 6;
 		}
 		echo "<p>Previous reading: ".$previous;
 		echo "<p>Current reading: ".$current;
 		echo "<p>Units consumed: ".$units;
 		echo "<p>The payable amount: ".$total;
 	}


 ?>
 
 </body>
 </html>