<?php
 if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 3;
        $offset = ($pageno-1) * $no_of_records_per_page;
require('dbconnect.php');
//include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
    <style>
     .pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
    </style>
</head>
    
<body>
    
<div class="form">
<p><a href="admin.html">Home</a> 
| <a href="insert2.php">Insert New Record</a> 
| <a href="index.php">Logout</a></p>
<h1>View Records</h1>
      <!--<ul class="tab-group">
        <li class="tab active" type="submit"><a href="newedit.php">Edit Record</a></li>
        <li class="tab" type="submit"><a href="delete.php">Delete Driver</a></li>
      </ul>-->
      
    
    </div>
    
    <div class="">
<table width="80%" border="2" align="center"  font-color="white";>
<thead>
<tr>
   <!-- <th><strong>Number</strong></th>-->
    <th><strong>First Name</strong></th>
    <th><strong>Last Name</strong></th>
    <th><strong>Contact</strong></th>
    <th><strong>Residence</strong></th>
    <th><strong>Email</strong></th>
    <th><strong>Password</strong></th>
   <th><strong>Edit</strong></th>
    <th><strong>Delete</strong></th>
    
</tr>
</thead>
<tbody>
 

<?php
    $count=1;
      $total_pages_sql = "SELECT COUNT(*) FROM users";
        $result = mysqli_query($connection,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM users LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($connection,$sql);
        while($row = mysqli_fetch_array($res_data)){
            //here goes the data
        

/*$sel_query="Select * from users ORDER BY userid desc;";
$result = mysqli_query($connection,$sel_query);*/
//while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <!--<td align="center"><?php //echo $count; ?></td>-->
<!--<td align="center"><?php /*echo $row["userid"]; */?></td>-->
<td align="center"><?php echo $row["fname"]; ?></td>
    <td align="center"><?php echo $row["lname"]; ?></td>
    <td align="center"><?php echo $row["contact"]; ?></td>
    <td align="center"><?php echo $row["residence"]; ?></td>
    <td align="center"><?php echo $row["email"]; ?></td>
    <td align="center"><?php echo $row["pwd"]; ?></td>
<!--<td align="center">
<a href="adminedit.php">Edit</a>
</td>
<td align="center">
<a href="delete.php">Delete</a>
</td>
</tr>-->
    
    <?php 
    echo '<td><a href="adminedit.php?fname=' .$row["fname"] .'&lname=' .$row["lname"] .'&contact=' .$row["contact"] .'&residence=' .$row["residence"] .'&email=' .$row["email"] .'&pwd=' .$row["pwd"] .'">Edit</a></td>';
    

echo '<td><a href="delete.php?fname=' . $row['fname'] . '">Delete</a></td>';                                       
    $count++; 
    
        }?>
       </tbody>
</table>
        </div>
      <ul class="pagination">
         <a href="?pageno=1">First</a>
      <!--  <li class="<?php// if($pageno <= 1){ echo 'disabled'; } ?>">-->
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
           
        
       <!-- <li class="<?php //if($pageno >= $total_pages){ echo 'disabled'; } ?>">-->
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        
        <a href="?pageno=<?php echo $total_pages; ?>">Last</a>
    </ul>
 
       
</body>
</html>

