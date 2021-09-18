
<?php
session_start();

if (isset($_POST['logout'])){ 
	
	session_unset();
        session_destroy();  
	header('location: HOMEE.php');
 
	}


	
  if (isset($_POST['M'])) { 
		    
    header('location: membership.php');
 
	}
	
	
	if (isset($_POST['T'])) { 
		    
    header('location: trainerid.php');
 
	}
	
	if (isset($_POST['G'])) { 
		    
    header('location: Gym-open.php');
 
	}
	



 ?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>css class 7</title>
<style type="text/css">
body{font-family:arial;}  
  
	
     div#Submit
	 {
	    border:1px solid #000000; 
	    padding:8px; background:#FFFFFF;	  
	    top:550px; left: 250px; 
	    width: 300px; height: 70px;
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
		
		
	
	.btn {
          background-color: #FFFFFF;
          border: none;
          color: black;
          padding: 16px 32px;
          text-align: center;
          font-size: 16px;
	  position: absolute;
          left: 400px;          
	  bottom:-220px;
          margin: 4px 2px;
          transition: 0.3s;
	  font-family: Arial Black;
         }

       .btn:hover {
          background-color:#000000;
          color: white;
           }
			
			
	  .btn2 {
          background-color: #FFFFFF;
          border: none;
          color: black;
          padding: 16px 32px;
          text-align: center;
          font-size: 16px;
  	  position: absolute;
          left: 600px;          
	  bottom:-220px;
          margin: 4px 2px;
          transition: 0.3s;
	  font-family: Arial Black;
         }
		 
		 

       .btn2:hover {
            
			background-color: #000000;
            color: white;		   
           }
		   
		   
		   
		   	
	   .btn3 {
          background-color: #FFFFFF;
          border: none;
          color: black;
          padding: 16px 32px;
          text-align: center;
          font-size: 16px;
  	  position: absolute;
          left: 750px;          
	  bottom:-220px;
          margin: 4px 2px;
          transition: 0.3s;
	  font-family: Arial Black;
         }
		 
		 

       .btn3:hover {
            
	    background-color: #000000;
            color: white;		   
           }
		   
		   
		   
					
	
    div#inputFiled input{padding:2px;margin-bottom:5px;width:150px}
    .selectList {padding:2px;margin-bottom:5px;width:150px}
    .SearchTitle{background:#FFFFFF;width:200px}
    .SearchTitle h2{padding:5px;color:#2F4F4F;}
    .submitButton input{
     position: absolute;        
     left: 610px;          
     bottom:-130px;		 		
     background: black;color:#FFFFFF;padding:9px;width:125px
		}
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

<form action="Gym-information.php" method="post">







  
 <?php
  
  if(isset($_SESSION['admin'])){ ?>

   <div id = "Submit">
 
   <h2><?php echo "WELCOME ADMIN!!!  "?></h2>  
   
   </div>
    <?php } 	   
  
?>
 
 <?php
  
 
  if(isset($_SESSION['admin'])){

    echo '<div class="submitButton"><input type="submit" name="logout"  value="Log-Out"></div>';	
	       echo '<button class="btn" name="M">Membership</button>
               <button class="btn2" name="T">Trainer</button>
               <button class="btn3" name="G">Gym</button> ';	 	
	
  }
  
  
  
  
  
	
 ?>  
</form>
  




 <br/>
<br/>
<br/>
<br/>
 <div>
<br/>
<br/>
<br/>
<br/>




 

 
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
