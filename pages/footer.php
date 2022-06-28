<!DOCTYPE html>



<html>
<body>
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
 <img src="../img/tweet.jpg" hight="60px" width="60px"/>
 </a>|<a href="https://www.google.com/search?safe=strict&ei=tbKDXKXZG8LNwAKAgb-gDg&q=instagram&oq=ins&gs_l=psy-ab.1.0.0i67l4j0i131i67j0i67j0i131j0j0i131l2.43763.49689..53180...1.0..0.195.747.0j4......0....1..gws-wiz.....6..0i71j35i39j0i3.NDvpcf8pdYs ">
 <img src="../img/insta.jpg"hight="60px" width="60px"/></a> 
 |<a href="https://www.google.com/search?q=email&oq=email&aqs=chrome..69i57j69i61j0l4.5057j0j7&sourceid=chrome&ie=UTF-8"> <img src="../img/email.jpg"hight="60px" width="60px"/></a></p>
  <p><em> coffe drips 2019 Copyright &copy; </em></p>
</div>
</footer>
 
 
</body>

</html>

