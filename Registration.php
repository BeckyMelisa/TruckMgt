<?php



require_once('dbconnect.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$residence = $_POST['residence'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];


echo "<br>";

//$pwd=md5($pwd);
$my_query = "";


$my_query = "select * from Users where email = '$email' "; 

$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0)
{
    
    echo "Sorry! This email already exists. Please choose a different email.";
    
}

else
    
{
    //$pwd=md5($pwd);
    $my_query = "INSERT INTO Users (fname, lname, contact, residence, email, pwd) VALUES ('$fname', '$lname', '$contact', '$residence', '$email', '$pwd' )";
    
    echo "<br>";
    
    $result = mysqli_query($connection, $my_query);
    
    if($result)
    {
        echo  "Item Successfully Added!";
        header("location: comeback.php");
        
    }
    
    else
    {
        echo "<b>ERROR: unable to post </b>";
        
    }
    
    
}

mysqli_close($connection);

?>