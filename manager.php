<!doctype html>
 <html>
     <head>
     <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        h3.right{
            text-align: right;
        }     
    </style>
     
     </head>
     
    <body style="background-image: url('images/truck.png');">
  <div class="form">
    <h1>PREMIER TRUCK FLEET MANAGEMENT</h1>
      

 <form action="search.php"  method="post">
          
            <div class="field-wrap">
            <label>
              Enter First name<span class="req" >*</span>
            </label>
            <input type="text" id="fname" name="fname" required autocomplete="off"/>
          </div>
     
     <div class="field-wrap">
          <!--  <label>
              Enter First name<span class="req" >*</span>
            </label>-->
            <input type="date" id="date" name="date" required autocomplete="off"/>
          </div>
      
      <button type="submit" class="button button-block">Search</button>
</form>
        
      
     <table width="100%">
      <tr>
          <td>
           <h3><a href="mreport.php">Report</a> </h3>
          </td>
          <td>
             <h3 class="right"><a href="index.php" style="align:right;">Home</a></h3> 
          </td>
         
      </tr>
      
      </table> 
      
     
        
     
        </div>
        
     
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

     </body>
</html> 
         
         
  
  
  
  
 