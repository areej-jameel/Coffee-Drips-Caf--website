<!DOCTYPE html>

<html>

<head>
<script type="text/javascript" src="js/jas.js">

</script>
<title>home</title>
<link rel="stylesheet" href="css/css.css"/>
<script type="text/javascript" src="js/js.js"></script>
</head>
<body>
<header>
<img src="img/mainlogo.jpg"    height="190" width="210" />
<nav>
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="pages/menu.php" >MENU</a>
</li>
<li><a href="pages/form.php">RESERVATION</a></li>
<li><a href="pages/team.php" >TEAM</a> </li>
  <li><a href="pages/login.php" >LOG IN</a> </li>
</ul>
</nav>
</header>


<div id="body">
<h1 style="padding-top: 14%;">◤Our Story◢ </h1>

<p class="line">━━━━━━━━━━━━━✧✧━━━━━━━━━━━━━</p>

<p class="paragraph">
Ever since Coffee Drips Café first opened its doors in 2019 we have been dedicated to sourcing fresh local ingredients and providing the quality finished product to our customers. 
Founder: wejdan,rahaf albeshri,areej,shahad and rahaf ghazi.
is passionate about food and customer service. This passion is what inspires every menu item and we are proud of the classics, as well as the new items that we serve.
</p>


<h3>✨we have some of the contens of this pic just click in whatever you want and it will take you to the page of the same type✨</h3>
<img src="img/home1.jpg" alt="menu" usemap="#workmap">
<map name="workmap">
<area shape="circle" coords="362,77,63" alt="sandwich" href="pages/sandwish.php">
<area shape="circle" coords="363,298,60" alt="sandwich" href="pages/sandwish.php">

<area shape="circle" coords="228,100,28" alt="coffee" href="pages/hot.php">
<area shape="circle" coords="520,301,36" alt="tea" href="pages/hot.php">

<area shape="circle" coords="120,216,38" alt="backery" href="pages/bakery.php">
<area shape="rect" coords="131,13,187,137" alt="backery" href="pages/bakery.php">

<area shape="circle" coords="253,155,21" alt="orangejouce" href="pages/cold.php">
<area shape="circle" coords="457,203,14" alt="greenjouce" href="pages/cold.php">

<area shape="rect" coords="107,276,221,335" alt="desert" href="pages/dessert.php">
<area shape="circle" coords="629,308,37" alt="desrt" href="pages/dessert.php">

</map>

<table>
<caption>Opening Hours</caption>
<tr>
<td>Saturday - Thursday</td>
<td>7:00am - 12:00am</td>
</tr>
<tr>
<td>Friday</td>
<td>05:00pm - 12:00am</td>
</table>

<h1>◤Contact Us◢ </h1>

<p class="line">━━━━━━━━━━━━━✧✧━━━━━━━━━━━━━</p>

<div class="Evaluation"> <p> do you like our Serves ?</p><img  onclick="like()" src="img/like.jpg"hight="30px" width="30px" /><p id="sh"></p>
 <p>Do you have a compliment or a complaint about coffe drips or any question about us  ?<br />
Please talk to us. We would like to hear from you.<br /><a href="areej.jm1998@hotmail.com" >"areej.jm1998@hotmail.com"</a></p></div>


<form enctype="multipart/form-data" method="post" id="test">
<br>
<input type="text" name="text1" id="text1" size="50" />
<br><br>
<input type="file" name="file1" id="file1" /><br><br>

<input type="submit"/>
</form>

<?php

$max_file_size = 100000000;

foreach($_FILES as $ileKey => $fileArray)
{

if($fileArray["size"]>$max_file_size) {

	echo"error".$ileKey."Too Big";

}

printf("%s is .2f KB".$ileKey.$fileArray["size"]/1024);
 
}

?>

<p class="clear"></p><!--for footer-->

 <footer class="footer">
 	<div>
   
<button id="top_button" ><a href="#top">Back to top</a></button>
<p><?php
$today = date("d/m/Y");
echo $today;
?>
</p><!--date-->
<p>the server time is 
<?php
echo"<strong>";
echo date("H:i:s");
echo"</strong";
?></p><!--time-->

 	
 <p><a href="https://www.google.com/search?q=twitter&oq=twe&aqs=chrome.4.69i57j0l5.3344j0j7&sourceid=chrome&ie=UTF-8">
 <img src="img/tweet.jpg" hight="60px" width="60px"/>
 </a>|<a href="https://www.google.com/search?safe=strict&ei=tbKDXKXZG8LNwAKAgb-gDg&q=instagram&oq=ins&gs_l=psy-ab.1.0.0i67l4j0i131i67j0i67j0i131j0j0i131l2.43763.49689..53180...1.0..0.195.747.0j4......0....1..gws-wiz.....6..0i71j35i39j0i3.NDvpcf8pdYs ">
 <img src="img/insta.jpg"hight="60px" width="60px"/></a> 
 |<a href="https://www.google.com/search?q=email&oq=email&aqs=chrome..69i57j69i61j0l4.5057j0j7&sourceid=chrome&ie=UTF-8"> <img src="img/email.jpg"hight="60px" width="60px"/></a></p>
  <p><em>coffe drips 2019 Copyright &copy; </em></p>
</div>
</body>

</html>