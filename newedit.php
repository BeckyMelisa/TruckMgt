<!DOCTYPE html>
<html>
<head>
 <title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 </title>
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Update Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
require('dbconnect.php');
if (isset($_GET['submit'])) {
$userid = $_GET['userid'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$contact = $_GET['contact'];
$residence = $_GET['residence'];
$email = $_GET['email'];
$pwd = $_GET['pwd'];
$query = mysql_query("update users set
fname='$fname', lname='$lname', contact='$contact',
residence='$residence', email='$email', pwd='$pwd' where fname='$fname'", $connection);
}
//mysqli_query= "Select * from users; ";
$result = ($connection,$mysqli_query);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='newedit.php?update={$row['fname']}'>{$row['fname']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from users where fname=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='userid' value='{$row1['userid']}' />";
echo "<br />";
echo "<label>" . "First Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='fname' value='{$row1['fname']}' />";
echo "<label>" . "Last Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='lname' value='{$row1['lname']}' />";
echo "<br />";
echo "<label>" . "Contact:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='contact' value='{$row1['contact']}' />";
echo "<br />";
echo "<label>" . "Residence:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='residence' value='{$row1['residence']}' />";
echo "<br />";
echo "<label>" . "Email:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='email'>{$row1['employee_address']}";
echo "</textarea>";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysql_close($connection);
?>
</body>
</html>