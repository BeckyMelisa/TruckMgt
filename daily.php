<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body style="background-image: url('images/truck.png');">
  <div class="form">
    <h1>PREMIER TRUCK FLEET MANAGEMENT</h1>
    <?php 
      /*require('dbconnect.php');
      $userid=$_POST['userid'];
      $email=$_POST['email'];
      
      $query="select userid from users where email='$email';";
      $result=mysqli_query($connection, $query);
      while($row =mysqli_fetch_assoc($result)){
          echo "UserID:".$row["userid"];
      }*/
      
      
      ?>
      
          
      
      <div class="tab-content">
        <div id="signup">   
            
           <?php /* Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; */?>
          <h1>Enter today's work information</h1>
            
          
          <form action="dailywork.php"  method="post">
          
          <div class="top-row">
            
              
                <!-- <div class="field-wrap"> -->
               <label>
                Date<span class="req">*</span>
              </label>
              <input type="date" id="date" name="date" required autocomplete="off" />
              </div>
            
              <!-- <div class="field-wrap">
              <label>
                UserID<span class="req">*</span>
              </label>
              <input type="text" id="userid" name="userid" required autocomplete="off" />
              </div>-->
              
            <div class="field-wrap">
              <label>
                Client<span class="req">*</span>
              </label>
              <input type="text" id="client" name="client" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Client Contact<span class="req">*</span>
              </label>
              <input type="text" id="contact" name="contact" required autocomplete="off"/>
            </div>
          

          <div class="field-wrap">
            <label>
              Type of delivery<span class="req">*</span>
            </label>
            <input type="text" id="type_of_delivery" name="type_of_delivery" required autocomplete="off"/>
          </div>
              
          <div class="field-wrap">
            <label>
              Location<span class="req">*</span>
            </label>
            <input type="text"  id="location" name="location" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block">Submit</button>
          
          </form>
      </div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

      </div>
    </div>

</body>
</html>