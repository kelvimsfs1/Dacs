<!--clientes.php-->
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","bob","bob","univille");
            $sql = "select * from cliente";
		    $result = mysqli_query($con,$sql);
		    while($row = $result->fetch_row()){
		       echo "<tr>";
		   	   	  echo "<td>" . $row[0] . "</td>";
		   	   	  echo "<td>" . $row[1] . "</td>";
		   	   	  echo "<td>" . $row[2] . "</td>";
		   	   echo "</tr>";
		    }
        ?>
    </body>
</html>