<!DOCTYPE html>
<html lang="en">

<head>
 
  <title>
    REDBAG
  </title>
 <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">
</head>

<body class="">
  <div class="wrapper ">
    <!-- link to sidebar file, which carries the menu -->
   
    <div class="main-panel">
      <!-- Navbar -->
      <!---->
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Request Form</h4>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                            <form method="post" action="submitRequest.php">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                           <select type="text" class="form-control" name="bloodbank" id="bloodbank" required>
                              <option value="">Select Blood Bank</option>
                             
                                                            
                            </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select type="text" class="form-control" name="blood_type" id="bloodType" required>
                              <option value="">Select Blood Type</option>
                              
                                
                            <!--  <option>A</option>
                              <option>B</option>
                              <option>AB</option>
                              <option>O</option>-->
                              
                              
                            </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select type="text" class="form-control" name="transport_type" id="transportType" required>
                              <option value="">Select Transport Type</option>
                            
                                                            
                            </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Quantity</label>
                          <input type="number" class="form-control" id="quantity" name="quantity" required>
                        </div>
                      </div>
                      <input type="text" hidden class="form-control" name="user_id" value="">
                    </div>
                    <!--<div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Start Of Stock</label>
                          <input type="number" class="form-control" id="start_of_stock">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">End Of Stock</label>
                          <input type="number" class="form-control" id="end_of_stock">
                        </div>
                      </div>
                    </div>-->
                    
                    <button class="btn btn-primary pull-right" name="add_request" id="tempSave">Add Request</button>
                  
                    
                   
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright float-right">
            &copy;
           , Structured and made by BIT 19-2.
            
          </div>
        </div>
      </footer>
    </div>
  </div>


</body>

</html>
