var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var i = 0;
var j = 0;
var x_coor = 10;
var y_coor = 50;
var Width = 3;
var height = 10;
ctx.fillStyle = "black";

ctx.fillRect(220, 0, 1110, 3);
for (i = 0; i < 9; i++) 
{  
 height = 1000;
x_coor+=170;
ctx.fillRect(x_coor, y_coor, Width, height);
}
