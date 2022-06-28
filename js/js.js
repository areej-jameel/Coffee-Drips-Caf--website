/**function required()
{
var empt = document.form1.text1.text2.text3.select.radio1.radio2.date.tel.value;
if (empt == "")
{
alert("Please input a Value");
return false;
}
else 
{
alert('Code has accepted : you can try another');
return true;}
}

var x=1;
function like( ){
	document.getElementById("sh").innerHTML=x;
x=++x;
}



var d = new Date(2018, 11, 24);
document.getElementById("demo").innerHTML = d;
d.style.backgroundColor = value;**/

var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
function myFunction{
     var red = Math.floor(Math.random() * 256);
 var blue = Math.floor(Math.random() * 256);
 var green = Math.floor(Math.random() * 256);

 document.getElementById("top_button").style.backgroundColor = "rgb(" + red + "," + green + "," + blue + ")";
}
