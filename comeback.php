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
      
      
      <div class="tab-content">
        
          
        </div>
        
        <div id="login">   
          <h1>You can now login</h1>
          
          <form action="home.php"  method="get">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" id="pwd" name="pwd" required autocomplete="off"/>
          </div>
          
          
          
          <button class="button button-block">Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>

</body>
</html>
