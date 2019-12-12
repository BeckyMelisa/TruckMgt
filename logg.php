<?php



require_once('dbconnect.php');


$email = $_GET['email'];
$password = $_GET['password'];


echo "<br>";


$my_query = "";


$my_query = "select * from Manager where email = '$email' and password = '$password'"; 

$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0)
{
   /* if('$email'=="shad@gmail.com"){
        echo "Manager logged In";
        header("manager.html");
    }else{ */
    
    echo "Welcome" .$row['fname'];
    header("location: manager.php");

      }


else{ 
    
    echo "Invalid email / password";
}
?>








