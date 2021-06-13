<html>
<head><title>billa11</title></head>
<body>
     <h2>Bill</h2>
     <?php
     if($_POST)  
    {   
        $names = $_POST['names']; 
        $price = $_POST['price'];

        $iname = explode(',',$names);
        $x = count($iname);

        $iprice = explode(',',$price);

        echo '<body>
	           <table>
                <tr>
                    <th>Item Name</th><th>Item Price</th>
                </tr>';
                for($i=0;$i<$x;$i++)
                {
                    echo "<tr>";
                    echo "<td>{$iname[$i]}</td><td>{$iprice[$i]}</td>";
                }
                echo "<tr>";
                echo "</table>";

                echo '<br>';
                $total = 0;
                for($i=0; $i<$x;$i++)
            {
                $total = $total + $iprice[$i];
            }

        echo '<p>Total Amount is: '.$total;

        $mx= max($iprice);
        $ky = array_search($mx, $iprice);
        echo '<br>';
        echo '<p>Costliest item is: '.$iname[$ky];


        $mn= min($iprice);
        $key = array_search($mn, $iprice);
        echo '<br>';
        echo '<p>Cheapest item is: '.$iname[$key];
    }     
?>
<br>
    <form method="post" action="a11.php">
        <input type="submit" name="submit" value="Back"/>
    </form>
</body>
</html>
