<!-- Create a from that accept the Emp image, Emp NO, first name, last name, 
address, gender, Designation, phone-number, Emp Category (Part Time or Full Time or contract), 
number of hours (only part time employees) and the basic salary of the employee  
Write a php script to display the details of the employee with proper format.
Also, Calculate the DA, HRA, Tax, Net Salary, Gross salary of the employee
* All the fields are mandatory
for Part time employees – per hour 100Rs salary, no DA, HRA, PF
for Full time employees-
DA=45% and HRA=10%, PF=0 TAX=0 if  basic < 10000
DA=75% and HRA=20%. PF=1200 TAX=5% if  basic < 50000 basic>=10000
DA=90% and HRA=30%. PF=5%  TAX=15% if  basic > 50000 basic
For Contract employees – monthly salary
DA=200 and HRA=0, TAX=0 if  basic < 5000
DA=15% and HRA=1000  TAX=3% if  basic < 5000 basic>=25000
DA=20% and HRA=5%.   TAX=9% if  basic > 25000 basic  -->

<!DOCTYPE html>
<html>
<head>
	<title>a9</title>
	<script> findSelected(val)
	{
		var cat = val;
		if(cat == "parttime")
		{
			document.getElementById("hours").disabled = false;
		}
		else
		{
			document.getElementById("hours").disabled = true;
		}
	}
	</script>
</head>
<body>

<form method="POST">
<table border="2" cellpadding="5" cellspacing="5">
<tr>
<td><label>Photo</label></td>
<td><input type="file" name="photo" required></td>
</tr>

<tr>
<td><p><label>Employee number</label></td>
<td><input type="text" name="eno" placeholder="Employee number" required></td>
</tr>

<tr>
<td><p><label>First Name</label></td>
<td><input type="text" name="fname" placeholder="first name" required></td>
</tr>

<tr>
<td><p><label>Last Name</label></td>
<td><input type="text" name="lname" placeholder="Last name" required></td>
</tr>

<tr>
<td><p><label>Address</label></td>
<td><textarea name="address" placeholder="address" required></textarea></td>
</tr>

<tr>
<td><p><label>Gender</label></td>
<td><input type="radio" name="gender" value="male" required>Male
<input type="radio" name="gender" value="female" required>Female</td>
</tr>

<tr>
<td><p><label>Designation</label></td>
<td><input type="text" name="desig" placeholder="Designation" required></td>
</tr>

<tr>
<td><p><label>Contact no</label></td>
<td><input type="number" name="phone" placeholder="contact no" required></td>
</tr>

<tr>
<td><p><label>Employee category</label></td>
<td><input type="radio" name="cat" value="fulltime" onchange="findSelected(this.value)">Full-Time
<input type="radio" name="cat" value="parttime" onchange="findSelected(this.value)">Part-time
<input type="radio" name="cat" value="contract" onchange="findSelected(this.value)">Contract</td>
</tr>

<tr>
<td><p><label>Number of hours</label></td>
<td><input type="number" name="hours" value="0" placeholder="Number of hours"></td>
</tr>

<tr>
<td><p><label>Basic salary</label></td>
<td><input type="number" name="salary" placeholder="Basic salary"></td>
</tr>

<tr>
<td><p><input type="submit" name="submit" value="submit"></td>
</tr>
</table>

</form>

<?php
	if($_POST)
	{
		$cat = $_POST['cat'];
		$basic = $_POST['salary'];
		$salary = 0;
		$da = 0;
		$hra = 0;
		$pf = 0;
		$tax = 0;
		if($cat == 'parttime')
		{
			$hours = $_POST['hours'];
			$salary = $hours * 100;
		}
		elseif ($cat == 'fulltime') 
		{
			if($basic < 1000)
			{
				$da = $basic * 0.45;
				$hra = $basic * 0.10;
				$pf = 0;
				$tax = 0;
				$gross = $basic + $da + $hra;
				$salary = $gross - $pf - $tax;
			}
			elseif ($basic < 5000 and $basic >= 1000) 
			{
				$da = $basic * 0.75;
				$hra = $basic * 0.20;
				$pf = 1200;
				$tax = $basic * 0.05;
				$gross = $basic + $da + $hra;
				$salary = $gross - $pf - $tax;
			}
			elseif ($basic > 5000) 
			{
				$da = $basic * 0.90;
				$hra = $basic * 0.30;
				$pf = $basic * 0.05;
				$tax = $basic * 0.15;
				$gross = $basic + $da + $hra;
				$salary = $gross - $pf - $tax;
			}
		}
		elseif ($cat == 'contract') 
		{
			if($basic < 5000)
			{
				$da = 200;
				$hra = 0;
				$tax = 0;
				$gross = $basic + $da + $hra;
				$salary = $gross - $tax;
			}
			elseif ($basic > 5000 and $basic <= 25000) 
			{
				$da = $basic * 0.15;
				$hra = 1000;
				$tax = $basic * 0.03;
				$gross = $basic + $da + $hra;
				$salary = $gross - $tax;
			}
			elseif ($basic > 25000) 
			{
				$da = $basic * 0.20;
				$hra = $basic * 0.00;
				$tax = $basic * 0.09;
				$gross = $basic + $da + $hra;
				$salary = $gross - $tax;
			}
		}
		if($cat == 'parttime')
		{
			echo "<p>The basic salary is : ".$basic;
			echo "<p>The salary is : ".$salary;
		}
		elseif ($cat == 'fulltime') 
		{
			echo "<p>The basic salary is : ".$basic;
			echo "<p>The da is : ".$da;
			echo "<p>The hra is : ".$hra;
			echo "<p>The pf is : ".$pf;
			echo "<p>The tax is : ".$tax;
			echo "<p>The gross salary is : ".$gross;
			echo "<p>The net salary is : ".$salary;
		}
		elseif ($cat == 'contract') 
		{
			echo "<p>The basic salary is : ".$basic;
			echo "<p>The da is : ".$da;
			echo "<p>The hra is : ".$hra;
			echo "<p>The pf is : ".$pf;
			echo "<p>The tax is : ".$tax;
			echo "<p>The gross salary is : ".$gross;
			echo "<p>The net salary is : ".$salary;
		}

	}


?>

</body>
</html>
