<?php
session_start();


if(array_key_exists('email1',$_POST) OR array_key_exists('pass1',$_POST))
{ 
$link=mysqli_connect("localhost","sakshi","Sakshi@#1220","sakshi");

if(mysqli_connect_error())
{
	die("There is an error in connecting to servere");
}
	   if ($_POST['email1'] == '') {
            
            echo "<p>Email address is required.</p>";
            
        } else if ($_POST['pass1'] == '') {
            
            echo "<p>Password is required.</p>";
            
        }
		else if ($_POST['text1'] == '') {
            
            echo "<p>Name  is required.</p>";
            
        }
		else {
            
            $query = "SELECT id FROM tour WHERE email = '".mysqli_real_escape_string($link, $_POST['email1'])."'";
            
            $result = mysqli_query($link, $query);
            
            if (mysqli_num_rows($result) > 0) {
                
                echo "<p>That email address has already been taken.</p>";
                
            } else {
                
                $query = "INSERT INTO tour (email1, pass1,text1) VALUES ('".mysqli_real_escape_string($link, $_POST['email1'])."', '".mysqli_real_escape_string($link, $_POST['pass1'])."','".mysqli_real_escape_string($link, $_POST['text1'])."')";
                
                if (mysqli_query($link, $query)) {
                    
                    $_SESSION['email1']=$_POST['email1'];
					header("Location:cookie1.php");
                    
                } else {
                    
                    echo "<p>There was a problem signing you up - please try again later.</p>";
                    
                }

                
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

      <title>Tourismo Sing Up</title>
	  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      </head>
      <style type="text/css">
	  html { 
          background: url(travel5.png) no-repeat center center fixed; 
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
			  color:green;
		  }
		  .container {
              
              text-align: center;
              margin-top: 100px;
              width: 450px;
		  }
		  #t1{
			  font-size:30px;
			  
			  
		  }
		  #p1{
			  font-size:30px;
			 
			  
		  }
		  #e1{
			  font-size:30px;
			
		  }
        .c1{
			color:red;
		}		  
		  
	</style>
	<body>
	<div class="container">
	<h1>Sign Up </h1>
	<form method="post">
  <fieldset class="form-group" id="error">
    <label for="username" id="t1">Full Name<span class="c1">*</span></label>
    <input type="text" class="form-control" id="text1" name="text1" placeholder="Example: Charlie Agrawal">
    <small class="text-muted">We'll never share your username with anyone else.</small>
  </fieldset>
  <fieldset class="form-group">
   <label for="exampleInputEmail1" id="e1">Email address<span class="c1">*</label>
    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Eg:abc@gmail.com" name="email1">
  <fieldset class="form-group">
    <label for="Password1" id="p1">Password<span class="c1">*</span></label>
    <input type="password" class="form-control" id="pass1" name="pass1" >
  </fieldset>
  
  <button type="submit" id="submit1" class="btn btn-primary">Submit</button>
  

</form>


          
        </div>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
          
          
    <script type="text/javascript">
          
          $("form").submit(function(e) {
              
              var error = "";
              
              if ($("#text1").val() == "") {
                  
                  error += "The Username field is required.<br>"
                  
              }
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