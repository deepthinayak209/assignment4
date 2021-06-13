<!-- Write a PHP program to display Fibonacci series and display prime number in that series. -->
<!DOCTYPE html>
<html>
<head>
  <title>a6</title>
</head>
<body>
    <form method="post">
      <input type="text" name="Number" >
      <button name="submit" value="Submit">Submit</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) 
{
  $n=$_POST['Number'];
  $number1 = 0;
  $number2 = 1;
  echo "Fibonacci Series \n"."<br>";
  echo $number1.' '.$number2.' ';
  for($i = 2; $i < $n; $i++)
  {
    $number3= $number1 + $number2;
    $number1 = $number2;
    $number2 = $number3;
    echo $number3.' '."<br>";
  }

 
    $number=$_POST['Number'];  
    for ($i = 2; $i <= $number-1; $i++) 
    {  
      if ($number % $i == 0) {  
      $value= True;  
    }  
} 
if (isset($value) && $value) 
{  
     echo 'The Number '. $number . ' is not prime'."<br>";  
}  
else 
{  
   echo 'The Number '. $number . ' is prime'."<br>";  
  }   

} 
  ?>
