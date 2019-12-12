<!DOCTYPE html>
<html> 
    <head>
     <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body style="background-color:peach;" >
    
    
<?php 

    require("dbconnect.php");

    $fname=$connection->real_escape_string($_POST['fname']);
    $date=$connection->real_escape_string($_POST['date']);
	
	$query ="SELECT users.userid, users.fname, users.lname, delivery.location, delivery.type_of_delivery, delivery.date FROM users LEFT JOIN delivery ON users.userid=delivery.userid WHERE fname LIKE '%$fname%'AND date LIKE '%$date%' ";
	$result =mysqli_query($connection,$query);
	
if(mysqli_num_rows($result)>0){
	?>
        <div class="container-login100">
            
    
	<table border="1px" width="80%" align="center" tr:nth-child(even)=background-color:#f2f2f2;>
        <tr><h1 style="color: black">DRIVER DETAILS</h1></tr>
	<tr>
		<th>userID</th>
		<th>first Name </th>
		<th>Last Name</th>
		<th>Location</th>
		<th>Type of Delivery</th>
		<th>Date</th>
		
	</tr>
    
    
    <?php
while($row = mysqli_fetch_array($result)){
    $userid=$row[0];
    $fname=$row[1];
    $lname=$row[2];
    $location=$row[3];
    $type_of_delivery=$row[4];
    $date=$row[5];
    
    
		echo "<tr>";
        echo "<td>".$row['userid']."</td>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['lname']."</td>";
		echo "<td>".$row['location']."</td>";
		echo "<td>".$row['type_of_delivery']."</td>";
		echo "<td>".$row['date']."</td>";
		
		?>
		
		<?php
     }
		echo "</tr>";
	echo "</table>";
 
   
}
else

    echo "result not found";


mysqli_close($connection);
    
    
?>
        
            </table>
        
        <p align="center">
        
            <button type="submit" class="btn btn-primary style" ><a href="manager.php"><h4 align="center" style="color:black;">Back</h4></a></button>
        </p>
    </div>
    </body>
</html>