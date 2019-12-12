<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Record</title>
    <link rel="stylesheet"  type="text/css" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="admin.php">Dashboard</a> 
| <a href="insert2.php">Insert New Record</a> 
| <a href="index.php">Logout</a></p>
<h1>Update Record</h1>



<?php
require('dbconnect.php');
   // $edit=$_GET['fname'];
    //$myquery="Select * From users WHERE fname= $fname";

//$status = "";
      $fname =$_REQUEST['fname'];
  $lname =$_REQUEST['lname'];
  $contact =$_REQUEST['contact'];
  $residence =$_REQUEST['residence'];
  $email=$_REQUEST['email'];
  $pwd =$_REQUEST['pwd']; 


    ?>

    
<div>
<form name="form" method="POST" action=""> 
<input type="hidden" name="new" value="1" />
<!--<input name="userid" type="hidden" value="<?php// echo $row['userid'];?>" />-->
   <p><input type="text" name="fname" placeholder="Enter First name" value= "<?php echo $fname; ?>"/></p>
    
   <p><input type="text" name="lname" placeholder="Enter Last Name" value= "<?php echo $lname; ?>"/></p>
    
    <p><input type="text" name="contact" placeholder="Enter Contact" value= "<?php echo $contact; ?>"/></p>
    
    <p><input type="text" name="residence" placeholder="Residence" value= "<?php echo $residence; ?>"/></p>
    
    <p><input type="email" name="email" placeholder="Enter Email" value= "<?php echo $email; ?>"/></p>
    <p><input type="password" name="pwd" placeholder="Enter Password" value= "<?php echo $pwd; ?>"/></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php  ?>
</div>
</div>
</body>
</html>
    
<?php

if(isset($_POST['submit'])){

   
$update="update users set fname='".$fname."', lname='".$lname."', contact='".$contact."',residence='".$residence."', email='".$email."',pwd='".$pwd."' where fname='".$fname."'";
mysqli_query($connection, $update);
    //or die(mysqli_error($connection));
   // $result = mysqli_query($connection, "SELECT * FROM users WHERE fname=$fname");
 

   
    if($update)
    {   

echo "<a href='view.php'>View Updated Record</a>";

      }
else {
   echo "Not Updated";
 }
}

?>


