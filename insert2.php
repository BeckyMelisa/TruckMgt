<?php
require('dbconnect.php');
//include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    //$trn_date = date("Y-m-d H:i:s");
    $fname =$_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $contact = $_REQUEST['contact'];
    $residence = $_REQUEST['residence'];
    $email= $_REQUEST['email'];
    $pwd = $_REQUEST['pwd'];
   // $submittedby = $_SESSION["username"];
    $ins_query="insert into users
    (fname,lname,contact,residence,email,pwd)values
    ('$fname','$lname','$contact','$residence','$email','$pwd')";
   
    mysqli_query($connection,$ins_query) or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div class="form">
<p><a href="admin.php">Dashboard</a> 
| <a href="view.php">View Records</a> 
| <a href="index.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="fname" placeholder="Enter First Name" required /></p>
<p><input type="text" name="lname" placeholder="Enter last Name" required /></p>
    <p><input type="text" name="contact" placeholder="Enter Contact" required /></p>
    <p><input type="text" name="residence" placeholder="Residence" required /></p>
    <p><input type="email" name="email" placeholder="Enter email" required /></p>
    <p><input type="password" name="pwd" placeholder="Enter password" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
</body>
</html