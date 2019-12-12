<?php


session_start();
require_once('dbconnect.php');


$email = $_GET['email'];
$pwd = $_GET['pwd'];


echo "<br>";


$my_query = "";

//$pwd=md5($pwd);
$my_query = "select * from Users where email = '$email' and pwd = '$pwd'"; 

$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0)
{
   
    
    echo "Welcome" .$row['fname'];
    header("location: daily.php");

      }


else{ 
    
    echo "Invalid email / password";
}
?>








