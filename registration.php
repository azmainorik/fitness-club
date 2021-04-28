<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fitness_club');

// REGISTER USER
if (isset($_POST['reg'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array  
  if ($password_1 != $password_2) {
  die("The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE name='$username' OR email='$email' ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $username) {
      die( "Username already exists");
    }

    if ($user['email'] === $email) {
      die("email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $username;
  	$_SESSION['success'] = "You are now signed in";
  	header('location: loggedin.php');
  }
} ?>

<?php  if (count($errors) > 0) { ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	<td>  <p><?php echo $error ?></p> </td>
  	<?php endforeach ?>
  </div>
<?php }?>

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
	    width: 400px; height: 390px;
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
		
		
		   			
			
	   .btn2 {
          background-color: #FFFFFF;
          border: none;
          color: black;
          padding: 16px 32px;
          text-align: center;
          font-size: 16px;
  		  position: absolute;
          left: 680px;          
		  bottom:-80px;
          margin: 4px 2px;
          transition: 0.3s;
		  font-family: Arial Black;
         }
		 
		 

       .btn2:hover {
            
			background-color: #000000;
            color: white;		   
           }
		   
		   
		   
		   
		   
					
			
	
	.selectList {padding:2px;margin-bottom:5px;width:150px}
    .SearchTitle{background:#FFFFFF;width:200px}
    .SearchTitle h2{padding:5px;color:#000000;}
    .submitButton input{background: #FFFFFF;color:#000000;padding:9px;width:125px}
    
    
</style>
</head>
<body>



<h1><marquee><img src="capture1.png"/></marquee></h1>


<ul>
 <li><a href="HOMEE.php">Home</a></li>
  <li><a href="login.php">Membership Fees</a></li>  
  <li><a href="login.php">Instructor & Trainer</a></li>
  <li><a href="login.php">Membership FORM</a></li>  
  <li><a href="Admin_login.php">Admin</a></li>  
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
<a href="login.php" class="btn2" name="login">Log-In</a>';

 <div id="Search">
<form action="registration.php" method="post">
<div class="SearchTitle"><h2>Registration</h2></div>
<input type="text" name="username" placeholder="Username" required/>
<input type="text" name="email" placeholder="email" required/>
<input type="password" name="password1" placeholder="Password" required/>
<input type="password" name="password2" placeholder="Confirm Password" required/>
<div class="submitButton"><input type="submit" name="reg"  value="Sign-Up"></div>
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