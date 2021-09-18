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
	    top:650px; left: 450px; 
	    width: 1270px; height: 930px;
	    margin-left: 10px;
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

<button class="button" style="vertical-align:middle"><span>Hover </span></button>

 <div id="Search">
<form action="logconnect.php" method="post">
<h2>Abs Beginner</h2>
<p>
Rock-hard abs always need to start from somewhere and the Beginner Abs workout 
is as good a place as any. These are exercises designed to activate your abs (including the core) without 
putting undue stress in any of the supporting muscle structure. Perfect for beginners but also a great 
set of abs exercises for those wishing to maintain ab strength.
</p> 
<input type="text" name="AdminID" placeholder="AdminID" required/>
<input type="password" name="Password" placeholder="Password" required/>
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
