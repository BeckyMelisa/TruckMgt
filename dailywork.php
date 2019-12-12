<?php

require_once('dbconnect.php');

session_start();

if(!isset($_SESSION['Userid'])){
 

//$mysqli=mysqli_connect("localhost", "root", "", "premier_trucks");
//if(isset ($_POST['submit'])){
 
   
//$deliveryName =$_POST['deliveryName'];
//$sessionid =$_SESSION['Userid'];
$sessionid=$_POST['Userid'];
$client = $_POST['client'];
$contact = $_POST['contact'];
$type_of_delivery = $_POST['type_of_delivery'];
//$truck_brand = $_POST['truck-brand'];
$location = $_POST['location'];
$date = $_POST['date'];
    $query="insert into delivery (Userid,client,contact,type_of_delivery,location,date) values ('$Userid','$client','$contact','$type_of_delivery','$location','$date')";
 if ($connection->query($sql) === TRUE) {
     
    $session_id = $connection->Userid;  
if($stmt = $connection->prepare($query)){
		//Bind parameters
		//$stmt->bind_param("sissss",$Name,$telNumber,$address,$email,$username,$password);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got inserted
		if($stmt->affected_rows == 1){
			echo "successfully added";	
            header("location:index.php");
            
			
		}else{
			//Some error while inserting
			echo "failed miserably ".mysqli_error($connection);
		}					
	}else{
		//Some error while inserting
		echo "some error ".mysqli_error($connection);
}}
}
?>
    
    
