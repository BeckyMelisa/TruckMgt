<!DOCTYPE html>
<html >
  <head>
      <meta charset="UTF-8">
      <title>Sign-Up/Login Form</title>
      <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
    
  <body style="background-image: url('images/truck.png');">
        <div class="form">
        
         

   
<?php
 require("dbconnect.php");
//if(isset($_POST['submit']))
// {
 $fname=$connection->real_escape_string($_POST['fname']);
 $startdate=$connection->real_escape_string($_POST['startdate']); 
 $enddate=$connection->real_escape_string($_POST['enddate']); 
 //$fname=$connection->real_escape_string($_POST['fname']);
    // $count=1;
     $query="SELECT users.userid, users.fname, users.lname, delivery.location, delivery.type_of_delivery, delivery.date FROM delivery LEFT JOIN users ON users.userid=delivery.userid WHERE fname LIKE '%$fname%' AND (date BETWEEN '$startdate' AND '$enddate')";

     $result=mysqli_query($connection, $query);   
          
if(mysqli_num_rows($result)>0){         
?>

<div class="container-login100">
              
<table border="1px" width="100%" align="center";>
 <tr>
    <th><strong>User ID</strong></th>
    <th><strong>First Name</strong></th>
    <th><strong>Last Name</strong></th>
    <th><strong>Location</strong></th>
    <th><strong>Delivery Type</strong></th>
    <th><strong>Date</strong></th>
   
</tr>
     
     
       <?php   
        
             // if(mysqli_num_rows($connection, $result)>0)
    while($row=mysqli_fetch_array($result)){ 
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
		//echo "<td>".$row['pwd']."</td>";
		?>
    
      <?php
    }
        echo "</tr>";
        echo "</table>";
              }
          else 
              echo "No Deliveries";
          
          mysqli_close($connection);
     ?>
    
     
    </table>
    <p>
    <a href="mreport.php">Back to home</a></p>
          </div>
            
      </div>
    </body>
</html>