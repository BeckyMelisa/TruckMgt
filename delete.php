
<?php
require('dbconnect.php');


//if (isset($_GET['id']) && is_numeric($_GET['id'])){
    
    
 $fname = $_GET['fname']; 
    
    
    
    
    $sql="DELETE FROM users WHERE fname LIKE '%$fname%'";
   // $result=mysqli_query($connection, $query) or die(mysqli_error());
    if($connection->query($sql)=== TRUE){ 
        

echo "<script type="text/javascript">
  window.confirm("Delete Record?");
     </script>";
 


        echo "Record deleted successfully";
        header("Location:view.php");
    }
    else{
        echo "error in deleting:" .$connection->error;
    }
    $connection->close();


?>