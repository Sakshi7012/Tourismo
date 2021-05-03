<?php
session_start();


if(array_key_exists('text1',$_POST) OR array_key_exists('pass1',$_POST))
{ 
$link=mysqli_connect("shareddb-w.hosting.stackcp.net","tourism-313439e8af","iogfck0tgy","tourism-313439e8af");

if(mysqli_connect_error())
{
	die("There is an error in connecting to servere");
}

if ($_POST['email1']=='')
{
	echo "<p>The Email field is required</p>";
}	
 else if (filter_var($_POST['email1'], FILTER_VALIDATE_EMAIL) === false) {
  
            $error = "Please enter a valid email address.";
 }
else if ($_POST['pass1']=='')
{
	echo "<p>The Password Field is required</p>";
	
}
else{
 $query = "SELECT Id FROM tour WHERE email1 = '".mysqli_real_escape_string($link, $_POST['email1'])."'";
$result = mysqli_query($link, $query);
            
            if (mysqli_num_rows($result) > 0) {
                
                header("Location:ArcadeAlpha.php");
                
            }
else 
{
	echo "<b><div id='ph1'>User Not Found<div id='ph2'>Sign Up</div></div>";
}
}
        

	}
	?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

      <title>Tourismo</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      
      <style type="text/css">
      
      html { 
          background: url(travel4.png) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          }
        
          body {
              
              background: none;
              
          }
          
          .container {
              
              text-align: center;
              margin-top: 100px;
              width: 450px;
              
          }
		  h1{
			  font-size:40px;
			  font-weight:bold;
			  color:black;
		  }
          h2{
			  font-size:20px;
			  font-style:italic;
			  color:grey;
		  }
		  #t1{
			  font-size:25px;
			  font-weight:bold;
			  color:black;
		  }
		   #p1{
			  font-size:25px;
			  font-weight:bold;
			  color:black;
		  }
		  .r2:hover{
			  font-size:50px;
			  color:blue;
			  text-decoration:underline;
			  font-weight:bold;
			  font-style:italic;
		  }
		  .r2{
			  
			  color:black;
			  
		  }
		  .c1{
			  color:red;
		  }
        #ph1{
			font-size:30px;
			color:red;
			text-align:center
		}
		 #ph2{
			font-size:30px;
			color:green;
			text-align:center
		}
         
      </style>
 
      
  </head>
  <body>
    
      <div class="container">
      
          <h1>Want To Explore new Places?</h1>
          <h2>Sign Up to know more</h2>            
        
 <form method="post">
  <fieldset class="form-group" id="error">
    <label for="username" id="t1">Email Address<span class="c1">*</span></label>
<input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Eg:abc@gamil.com" name="email1">    
<small class="text-muted">We'll never share your email with anyone else.</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="Password1" id="p1">Password<span class="c1">*</span></label>
    <input type="password" class="form-control" id="pass1" name="pass1" >
  </fieldset>
  
  <button type="submit" id="submit1" class="btn btn-primary">Log In</button>
  <label for="notreg" id="r1">Not Register?</label>
 <a href ="http://sakshiagrawal-com.stackstaging.com/abc.php" id="r2">Register>></a>

</form>


          
        </div>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
          
          
    <script type="text/javascript">
          
          $("form").submit(function(e) {
              
              var error = "";
              
              if ($("#email1").val() == "") {
                  
                  error += "The Email field is required.<br>"
                  
              }
              
              if ($("#pass1").val() == "") {
                  
                  error += "The Password field is required.<br>"
                  
              }
                 
              
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          })
          
    </script>
          
  </body>
</html> 
  </body>
</html>