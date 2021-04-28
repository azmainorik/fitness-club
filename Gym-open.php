<?php
session_start();

// initializing variables
$gender="";
$stime="";
$etime="";
$day="";

$errors = array();
// connect to the database
$db = mysqli_connect('localhost','root','','fitness_club');
if (!$db) {
    die("Connection failed: " .mysqli_connect_error());
}



echo "Connected successfully";
// REGISTER USER
if (isset($_POST['submit'])){
  // receive all input values from the form
  
  
  
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $stime = mysqli_real_escape_string($db, $_POST['start_time']);
  $etime= mysqli_real_escape_string($db, $_POST['end_time']);
  $day= mysqli_real_escape_string($db, $_POST['day']);
  
 
 
 
  if (count($errors) == 0) {
    
  	$sql = "INSERT INTO opentime(gender,stime,etime,day) 
              VALUES('$gender','$stime','$etime','$day')";        
  	mysqli_query($db, $sql);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "information reserve successfull";
  	header('location: Gym-open.php');
  }
} ?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>css class 7</title>
<style type="text/css">
body{font-family:arial;}  
  
   h1{  
        padding:60px;
        border:3px  #FF0000;
        border-top-left-radius: 25px; 	
        border-top-right-radius:25px;
        border-bottom-right-radius:25px;		 
        border-bottom-left-radius: 25px;
     }

	
     div#Submit
	 {
	    border:12px solid #000000; 
	    padding:8px; background:#FFFFFF;	  
	    top:550px; left: 450px; 
	    width: 400px; height: 600px;
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
	  
	  #bus {
       font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
       border-collapse: collapse;
       width: 100%;
	   bottom:10%;
	   background-size: 100px 80px;
	   opacity:0.9;
	   width:70%;
    }


			  
			  
	.btn2 {
          background-color: #FFFFFF;
          border: none;
          color: black;
          padding: 16px 32px;
          text-align: center;
          font-size: 16px;
  		  position: absolute;
          left: 650px;          
		  bottom:-120px;
          margin: 4px 2px;
          transition: 0.3s;
		  font-family: Arial Black;
         }
		 
		 

       .btn2:hover {
            
			background-color: #000000;
            color: white;		   
           }



	 
	 #trainer th, td 
	   {
           border: 1px solid black;
           border-collapse: collapse;
		   background-color: #f1f1c1;
       }
	   
       th, td {
            padding: 15px;
            text-align: left;
              } 
	 
	 

    div#inputFiled input{padding:2px;margin-bottom:5px;width:150px}
    .selectList {padding:2px;margin-bottom:5px;width:150px}
    .SearchTitle{background:#FFFFFF;width:200px}
     .SearchTitle h2{padding:5px;color:#2F4F4F;}
    .submitButton input{background: #FFFFFF;color:#000000;padding:9px;width:125px}
    .information{color:#000000}
    .go{color:white}
    .depart{color:white}
    .coach{color:white}
	
    text-align: center;
    padding: 20px;
    margin-top: 50px; 
    
</style>
</head>
<body>

<h1><marquee><img src="capture1.png"/></marquee></h1>

<ul>
 <li><a href="HOMEE.php">Home</a></li>
  <li><a href="login.php">Membership Fees</a></li>  
  <li><a href="login.php">Instructor & Trainer</a></li>
  <li><a href="login.php">Gym-Open Time</a></li>  
 
</ul>





<div class="row">   
  
    <?php 
	             $user = 'root';
                 $pass = '';
                 $db = 'fitness_club';
                 // Create connection
                 $db = new mysqli('localhost', $user, $pass ,$db) or die ("unable to connect");
                  
			     $conn= mysqli_connect('localhost','root','','fitness_club');
				 $sql ="select * from opentime";
			     $result=mysqli_query($conn,$sql);				 
                 
	?>
	
	</div>
	<div>
	
	<table id="trainer">
                        <tr>												
						<th>Gender</th>						
						<th>Start time</th>
						<th>End time</th>
						<th>Week day:</th>											
				    	</tr>
						
						

						
						
					<?php while($row=mysqli_fetch_object($result)){?>
					<tr>
						<td><?php echo $row->gender?></td>
						<td><?php echo $row->stime?></td>
						<td><?php echo $row->etime?></td>
						<td><?php echo $row->day?></td>
															
					</tr>
					<?php } ?>
				</table>
 </div>
 <br/>
<br/>
<br/>
<br/>
 <div>
 <div> 
 </div>
<br/>
<br/>
<br/>
<br/>
 <a class="btn2" href="Admin_login.php" name="T">Logout</a>
<div id="Submit">
<form   action="Gym-open.php"  method="post">
<div class="SearchTitle"><h2>Gym Opening Time</h2></div>
<div class="information" >Gender:</div> 
<div id="inputFiled"><input type="text" name="gender" required/></div>
<div class="information" >start Time :</div> 
<div id="inputFiled"><input type="text" name="start_Time" required/></div>
<div class="information" >End Time :</div> 
<div id="inputFiled"><input type="text" name="end_Time" required/></div>
<div class="information">Week Day:</div>
<div id="inputFiled"><input type="text" name="day"  required/></div>
<div class="submitButton"><input type="submit"  name="submit"  value="SUBMIT"></div>
</form>
</div>
<body background="PREMIUM-CLUB.jpg">
</body>
 </div>
 </div>
</body>
<br/>
<br/>
<br/>
<br/>


</body>
</html>