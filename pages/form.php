<!DOCTYPE html>
<html>
<head lang="en">
   <meta charset="utf-8"/>
   <title> reservation</title>
<link rel="stylesheet"  href="../css/css.css"/>
<script type="text/javascript" src="../js/jas.js">

</script>
</head>
<body>

<header>
<a href="../index.php">
<img src="../img/mainlogo.jpg"   height="190" width="210" /></a>
<nav>
<ul>
<li><a href="../index.php" >HOME</a> </li>
<li><a href="menu.php" >MENU</a></li>
<li><a href="form.php" >RESERVATION</a> </li>
<li><a href="team.php" >TEAM</a> </li>
<li><a href="login.php" >LOG IN</a> </li>
</ul>
</nav>
</header>
<h1>◤reservation◢ </h1>
<p class="line">━━━━━━━━━━━━━✧✧━━━━━━━━━━━━━</p>
<div id="body" class="row">
<form name="myForm" onsubmit="return validateForm()" method="post" >
  <fieldset>
     <legend>Appointment Booking</legend> 
      
      <p>
<label>
Name: 
          </label>
      <input type="text" name ="text1" size="50" /> <br/>
        
		<br />
		
          <label>
          Email: 
          </label>
      <input type="email" name ="text2" size="50" /> <br/>
         
 <br />
 
         
          <label>
          Tel: 
          </label>
      <input type="tel"  name ="tel" size="50" /> <br/>
        
		<br />

         
            <label> number of people </label>
           
            <select  name ="select" >
                
               <option selected="true">1-3 Person</option>
                <option>4-6 Person</option>
               <option>7-9 Person</option>
               <option>9-13 Person</option>
               
            </select>
         
		 <br />
		 <br />
             <label>Date: </label>
             <input type="date"  name ="date"	/>		 
             
<br />
          
         
            <label>Period </label><br />
            <input class="ra" type="radio"  name ="radio1" value="1"/>PM<br/>
            <input class="ra" type="radio"  name ="radio2" value="2"/>AM<br/>
             

		 <br />
		 
          <label>Categories: </label><br/>
            
          <textarea  name ="text3" placeholder="Enter a comment here" rows = "10" cols= "100">
          
          </textarea>
      
      

<br />
     <input type="submit" value="submit" /><br/>
     
      </p>
  </fieldset>
</form>
</div>
<p class="clear"></p><!--for footer-->
<br />
<br />
 
<?php
include "footer.php";
?>
</body>
</html>