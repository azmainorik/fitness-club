<?php
session_start();

// initializing variables
$trainer_Name="";
$train_From="";
$email="";
$Gender="";
$training_day="";
$start_time="";
$finish_time="";
$Age="";
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
  $trainer_Name = mysqli_real_escape_string($db, $_POST['Trainer_Name']);
  $train_From = mysqli_real_escape_string($db, $_POST['From']);
  $email= mysqli_real_escape_string($db, $_POST['Email']);
  $Gender= mysqli_real_escape_string($db, $_POST['Gender']);
  $training_day= mysqli_real_escape_string($db, $_POST['Training_Day']);
  $start_time = mysqli_real_escape_string($db, $_POST['start_Time']);
  $finish_time= mysqli_real_escape_string($db, $_POST['End_Time']);
  $Age = mysqli_real_escape_string($db, $_POST['Age']);
 
 
 
 
 
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($trainer_Name)){ array_push($errors, "this field is required"); }
  if (empty($train_From)){ array_push($errors, "this field is required"); }
  if (empty($email)){ array_push($errors, "this field  is required"); }
  if (empty($Gender)){ array_push($errors, "this field  is required"); }
  if (empty($training_day)) { array_push($errors, "this field is required"); }
  if (empty($start_time)) { array_push($errors, "this field is required"); }
  if (empty($finish_time)) { array_push($errors, "this field is required"); }
  if (empty($Age)) { array_push($errors, "this field is required"); }
  // Finally, register user if there are no errors in the form
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    
  	$sql = "INSERT INTO trainer(name,train_from,email,gender,start_time,finish_time,age,Training_day) 
              VALUES('$trainer_Name','$train_From','$email','$Gender','$start_time','$finish_time','$Age','$training_day')";        
  	mysqli_query($db, $sql);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "information reserve successfull";
  	header('location: trainerid.php');
  }
} ?>

<?php  if (count($errors) > 0) { ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
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
  <li><a href="login.php">Instrutor & Trainer</a></li>
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
				 $sql ="select * from trainer";
			     $result=mysqli_query($conn,$sql);				 
                 
	?>
	
	</div>
	<div>
	
	<table id="trainer">
                        <tr>												
						<th>Trainer Name</th>						
						<th>From</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Training_day</th>
                        <th>Start_time</th>						
						<th>Finish_time</th>
						<th>Age</th>						
				    	</tr>
						
						

						
						
					<?php while($row=mysqli_fetch_object($result)){?>
					<tr>
						<td><?php echo $row->name?></td>
						<td><?php echo $row->train_from?></td>
						<td><?php echo $row->email?></td>
						<td><?php echo $row->gender?></td>
						<td><?php echo $row->Training_day?></td>
						<td><?php echo $row->start_time?></td>
						<td><?php echo $row->finish_time?></td>
						<td><?php echo $row->age?></td>												
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
<form   action="trainerid.php"  method="post">
<div class="SearchTitle"><h2>Trainer Information</h2></div>
<div class="information" >Trainer_Name :</div> 
<div id="inputFiled"><input type="text" name="Trainer_Name" required/></div>
<div class="information" >Train From :</div> 
<div id="inputFiled"><input type="text" name="From" required/></div>
<div class="information" >Email :</div> 
<div id="inputFiled"><input type="text" name="Email" required/></div>
<div class="information">Gender:</div>
<div id="inputFiled"><input type="text" name="Gender"  required/></div>
<div class="information" >Training Day :</div> 
<div id="inputFiled"><input type="text" name="Training_Day" required/></div>
<div class="information" >start Time :</div> 
<div id="inputFiled"><input type="text" name="start_Time" required/></div>
<div class="information" >End Time :</div> 
<div id="inputFiled"><input type="text" name="End_Time" required/></div>
<div class="information">Age :</div> 
<div id="inputFiled"><input type="number" name="Age" required/></div>
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