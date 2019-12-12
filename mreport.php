<!DOCTYPE html>
<html >
  <head>
      <meta charset="UTF-8">
      <title>Sign-Up/Login Form</title>
      <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
    
  <body style="background-image: url('images/truck.png');">
        <div class="form">
            
                <div class="tab-content"> 
          <h1>REPORT</h1>
          <form action="report.php"  method="post">
              
              <div class="field-wrap">
             
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" id="fname" name="fname" required autocomplete="off"/>
              </div>
          
          <div class="top-row">
              
    
    
        <div class="field-wrap">
             
            <h4>Start Date</h4>
              <input type="date" id="date" name="startdate" required autocomplete="off" />
              </div>
              
        <div class="field-wrap">
             
            <h4>End Date</h4>
              <input type="date" id="date" name="enddate" required autocomplete="off" />
              </div>
              </div>
              
            <button type="submit" class="button button-block">Submit</button>
              
   <p> <a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="manager.php">Back</a>
    </p>
          </form>
      </div>
      </div>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
    </body>
</html>
            