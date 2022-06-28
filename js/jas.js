var z=1;
function like( ){
	document.getElementById("sh").innerHTML=z;
z=++z;
}

var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  var n = d.toDateString();
  var t=d.toLocaleTimeString();
  document.getElementById("demo").innerHTML = t+'   '+n;
}

function myFunction(){
     var red = Math.floor(Math.random() * 256);
 var blue = Math.floor(Math.random() * 256);
 var green = Math.floor(Math.random() * 256);

 document.getElementById("demo").style.color = "rgb(" + red + "," + green + "," + blue + ")";
}
function validateForm() {
  var x = document.forms["myForm"]["text1"].value;
  var y=document.forms["myForm"]["text2"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  else if(y==""){
    alert("Email must be filled out");
    return false;
  }
  
}
