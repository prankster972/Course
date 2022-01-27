  //alert('123');



var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var i = 0;
var x = 10;
var y = 10;
var z = 100;
var f = 100;
for (i = 0; i < 10; i++) 
{  
  ctx.fillStyle = "black";
ctx.fillRect(x, y, z, f);
}
