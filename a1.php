<!-- PHP program to choose a random number and display its square root. [ rand()] -->

<html>
<head><title>a1</title></head>
<body>
<p>Number generated randomly is : <?php
    $choice = rand(1, 100);
    echo $choice;
?><br>Square root : <?php
    echo sqrt($choice);
?></p>
</body>
</html>