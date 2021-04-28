<?php
session_start();

// initializing variables
$username = "";
$password   = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fitness_club');

// REGISTER USER
if (isset($_POST['LogIn'])) {  
  // receive all input values from the form
  
  $username = mysqli_real_escape_string($db, $_POST['name']);
  $password = mysqli_real_escape_string($db, $_POST['password']); 	
 
 

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "SELECT * FROM admin WHERE name='$username' AND password='$password'";
  	
	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['admin'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: Admin.php');
  	}else {
  		die( "Wrong username/password combination");
  	}
	
	
	
  }
} ?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>css class 7</title>
<style type="text/css">
body{font-family:arial;}  
  
	
     div#Search
	 {
	    border:12px solid #000000; 
	    padding:8px; background:#FFFFFF;	  
	    top:550px; left: 450px; 
	    width: 400px; height: 330px;
	    margin-left: 500px;
	 }  
	
		


     ul
     {		 
       height:60px;
       list-style-type: none;
       margin-top: 60px;
	   margin-bottom: 60px;	  
       padding: 35px;      
	   justify-content: space-between;
       background-color: #FFFFFF;      
       border-style: outset;
       border-color: #2F4F4F;
	   overflow: auto;
	   display: flex;
	   
     }    

     li a 
          {
            width: 180px;            
			margin: 1px;
			display: inline;
            padding: 17px 17px;
            color:#000000 ;
            font-size: 38px;
            font-family: Arial Black;	
            text-decoration: none;			
          }	 	 
	 
    li 
     {
       float: left;
     }
	 
      li a:hover 
     {	  
       color: red;        
     }  
	   
	 

        input[type=text], input[type=password] 
		{
             width: 90%;
             padding: 12px 20px;
             margin: 8px 0;
             display: inline-block;
             border: 1px solid #ccc;
             box-sizing: border-box;
			 font-size: 16px;
        }
		
	
			
	
	.selectList {padding:2px;margin-bottom:5px;width:150px}
    .SearchTitle{background:#FFFFFF;width:200px}
    .SearchTitle h2{padding:5px;color:#2F4F4F;}
    .submitButton input{background: #FFFFFF;color:#000000;padding:9px;width:125px}
    
    
</style>
</head>
<body>



<h1><marquee><img src="capture1.png"/></marquee></h1>


<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="#contact"> Workouts</a></li>  
  <li><a href="login.php">Admin</a></li>
  <li><a href="booking.php">Neutrition</a></li>
  <li><a href="CancelTicket.php">Equipments</a></li>  
  <li><a href="booking.php">Registration</a></li>
  <li><a href="CancelTicket.php">Log In</a></li>  
</ul>

 <br/>
<br/>
<br/>
<br/>
 <div>
<br/>
<br/>
<br/>
<br/>


<div id="Search">
<form action="login.php" method="post">
<div class="SearchTitle"><h2>Admin Log In</h2></div>
<input type="text" name="admin" placeholder="Name" required/>
<input type="password" name="password" placeholder="Password" required/>
<div class="submitButton"><input type="submit" name="LogIn"  value="Log In"></div>
</form>
</div>
<body background="PREMIUM-CLUB.jpg">
</body>
</div>
 </div>
 </div>
</body>
<br/>
<br/>
<br/>
<br/>


</body>
</html>