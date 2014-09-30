

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Car Advisor</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="bootstrap.min.js"></script>

   <script>
function loginvalidation()
{
var uid = document.getElementById("user").value.length;
var passid = document.getElementById("pass").value.length;
if ((uid<6)||(uid>15)) 
  {
    document.getElementById("u").innerHTML="User Name must be 6 to 15 Characters";
    return false;
  }
else
{
  document.getElementById("u").innerHTML="";
  return true;
}

if ((passid<6)||(passid>15)) 
  {
    document.getElementById("p").innerHTML="User Name must be 6 to 15 Characters";
    return false;
  }
else
{
  document.getElementById("p").innerHTML="";
return true;
}
return false;
}


</script>        

</head>
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
       <a class="navbar-brand" href="Index.php"><b><font size="5">Car Advisor</font></b></a>
       </div>
          <div id="navbar-main" class="navbar-collapse collapse">
              
              <ul class="nav navbar-nav navbar-right">
              <li><a href="#myModal1" data-toggle="modal" title=""><b>Register</b></a></li>
              <li><a href="#myModal" data-toggle="modal" title=""><b>SignUp</b></a></li> 
              </ul>
        
        </div>
      </div>
    </div>

   
 
  
  
    
<br><br><br><br>
    
      <div class="col-lg-12">
      <div class="img-responsive">	
      <img  src="Snaps/Desert.jpg" height="500" width="1250" alt="image" />
      </div></div>
     
	
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><center>SignIn Here</center></h4>
      </div>
      <div class="modal-body">
        
   			  <form class="form-horizontal"  method="post" action="DoLogin.php" onsubmit="return loginvalidation()">
                               						

   			  										<div class="well bs-component">

   			  										<div class="form-group">
   			  										 <div class="col-lg-6 col-lg-offset-3">
   			  										<img src="Images/Tata/sumo.jpeg" height="150" width="250" alt="Image" />
   			  										</div></div>


                                         
                                                     <div class="form-group has-error">
                                                  
                                                    <div class="col-lg-6 col-lg-offset-3">
                                                    <input name="user" id="user" class="form-control" type="text" placeholder="Username" ><br/>
                                                    <div name="u" id="u" style="color:red"></div>
                                                    </div>
                                                    </div>
                            
                            
                                                    <div class="form-group has-error">
                                                  
                                                  
                                                    <div class="col-lg-6 col-lg-offset-3">
                                                    <input name="pass" id="pass" class="form-control" type="password" placeholder="Password"><br>
                                                    <div name="p" id="p" style="color:red"></div>
                                                    </div>
                                                    </div>
                           
                                                    <div class="form-group">
                                                 	 <div class="col-lg-6 col-lg-offset-3">
                                                  
                                                     <button type="submit" class="btn btn-primary">Sign in</button>
                                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  </div>
                                                           
                                                        
                                                  
                                                    </div>
                              </div>
                            </form>




      </div>
     
    </div>
  </div>
</div>
     
    

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><center>New Users Register Here</center></h4>
      </div>
      <div class="modal-body">
        
   			  <form class="form-horizontal"  method="post" action="RegisterNow.php">
                               
                                         <div class="well bs-component">
                                                     <div class="form-group has-warning">
                                                  
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                    <input name="user" id="user" class="form-control" type="text" placeholder="Username"><br/>
                                                    <div name="u" id="u" style="color:red"></div>
                                                    </div>
                                                    </div>
                            
                            
                                                    <div class="form-group has-warning">
                                                    <br>
                                                  
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                    <input name="pass" id="pass" class="form-control" type="password" placeholder="Password"><br>
                                                    <div name="p" id="p" style="color:red"></div>
                                                    </div>
                                                    </div>

                                                    <div class="form-group has-warning">
                                                    <br>
                                                  
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                    <input name="email" id="email" class="form-control" type="text" placeholder="Email"><br>
                                                    
                                                    </div>
                                                    </div>


                                                    <div class="form-group has-warning">
                                                    <br>
                                                  
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                    <input name="no" id="no" class="form-control" type="text" placeholder="Contact Number"><br>
                                                    </div>
                                                    </div>



                           
                                                    <div class="form-group">
                                                 	 <div class="col-lg-6 col-lg-offset-3">
                                                  
                                                     <button type="submit" class="btn btn-primary">Register</button>
                                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                     </div>
                                                     </div>
                              </div>
                            </form>




      </div>
     
    </div>
  </div>
</div>
     
    



      <footer class="text-center">
        <p><font size="3">&copy; V&nbsp; Nandakumar &nbsp;&nbsp;MS(SE)</font></p>
      </footer>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
