<!-- Write a PHP script to create Student application form for Nitte PG course and display all the details of the Student 
*which includes First name, Middle Name,  Last name, student photo, Father Name, Address, contact Number, Email Id, Date of Birth, Gender, Percentage in Degree, Hobbies(check box), Institution studied, CourseStudied(BCA,BSc,B.Com,B.E, )(radio button),
	Course Offered ( MCA,MBA, M.Tech, MSc(option button) include submit and reset
*All the fields are mandatory
*For MCA and M.tech, Percentage should be more than 70% in degree,
	 for MBA, percentage should be more than 60% in degree, 
	others more than 40%
*For M.tech- course studied must be B.E,
	 for Msc- BSC or BCA, 
	for MCA- BCA or Bsc,
	for MBA any -->


<html>
<head><title>a8</title></head>
<body>
<center>
     <h2>
        Student Registration
    </h2>
     
    <form method="post">
        <table border="2" cellpadding="10" cellspacing="3">
            <tr>
                <td>First Name</td>
		<td><input type="text" name="fname" placeholder="First Name" required /></td>
            </tr>
            <tr>
                <td>Middle Name</td>
		<td><input type="text" name="mname"  placeholder="Middle Name" required/></td>
            </tr>
            <tr>
                <td>Last Name</td>	
		<td><input type="text" name="lname"  placeholder="Last Name" required/></td>
            </tr>
            <tr>
                <td>Photo</td>
		<td><input type="file" name="pic"  placeholder="Photo" required/></td>
            </tr>
            <tr>
                <td>Father Name</td>
		<td><input type="text" name="father"  placeholder="Father Name" required/></td>
            </tr>
            <tr>
            <tr>
                <td>Address</td>
		<td><textarea name="address" placeholder="Address" required></textarea></td>
            </tr>
            <tr>
                <td>Contact Number</td>
		<td><input type="number" name="phone"  placeholder="Contact Number" required/></td>
            </tr>
            <tr>
                <td>Email-Id</td>
		<td><input type="email" name="email"  placeholder="Email Id" required/></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
		<td><input type="date" name="dob"  placeholder="Date Of Birth" required/></td>
            </tr>
            <tr>
                <td>Gender</td>
		<td><input type="radio" name="gender"  value="male" required/>Male
                    <input type="radio" name="gender"  value="female"/>Female</td>
            </tr>
            <tr>
                <td>Degree Percent</td>
		<td><input type="number" name="ug"  placeholder="Percentage in degree" required/></td>
            </tr>
            <tr>
                <td>Hobbies</td>
		<td><input type="checkbox" name="hobby"  value="reading"/>reading
                <input type="checkbox" name="hobby"  value="writing"/>writing
                <input type="checkbox" name="hobby"  value="playing"/>playing</td>
            </tr>
            <tr>
                <td>Institution Studied</td>
		<td><input type="text" name="clg"  placeholder="Institution Studied" required/></td>
            </tr>
            <tr>
                <td>Course Studied</td>
		<td><input type="radio" name="course"  value="BCA"/>BCA
                <input type="radio" name="course"  value="BSc"/>BSc
                <input type="radio" name="course"  value="BCom"/>BCom
                <input type="radio" name="course"  value="BE"/>B.E</td>
            </tr>
            <tr>
                <td>Course Offered</td>
		<td><select name="opt" required>MCA,MBA, M.Tech, MSc
                    <option value="MCA">MCA</option>
                    <option value="MBA">MBA</option>
                    <option value="MTech">MTech</option>
                    <option value="MSc">MSc</option>
                </select></td>
            </tr>
            <tr>
               <td></td> <td> <input type="submit" name="submit" value="Submit"/></td>
            </tr>
        </table>
    </form>



 
<?php   
    if($_POST)  
    {   
        $opt =$_POST['opt'];
        $crs = $_POST['course'];
        $ug = $_POST['ug'];


        if( $opt == 'MCA' or $opt == 'MTech'){
            if( $ug >= 70){
                if($opt =='MTech' and $crs == 'B.E'){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be B.E "); </script>';
                }
                if($opt =='MCA' and ($crs == 'BCA' or $crs == 'BSc')){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
                }
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 70%"); </script>';
            }
        }
        elseif( $opt == 'MBA'){
            if( $ug >= 60){
                echo '<script>alert("Registration Successful "); </script>';
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 60%"); </script>';
            }
        }
        else{
            if( $ug >= 40){
                if($opt =='MSc' and ($crs == 'BCA' or $crs == 'BSc')){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
                }
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 40%"); </script>';
            }
        }
    }     
?> 

<?php
{
    foreach($_POST as $key=>$post_data){
        if(is_array($post_data)){
            echo "You posted:" . $key . " = " . print_r($post_data, true) . "<br>";
        } else {
            echo "You posted:" . $key . " = " . $post_data . "<br>";
        }
    }
 }
?>
</center>
</body>
</html>

