
@extends('layouts.app')





@section('Title')list
@endsection

@section('Content')<h1>list Page</h1>@endsection


@section('form')
<form action="{{ route('event-list')}}" method="get">
@csrf
<p>{{ $req }}</p>
<canvas id="canvas" width="1500" height="800" class="bg-light" style="z-index:1"></canvas>
<input type="button" style="z-index:2; position:absolute; top:300px; left:200px" value="test"/>
<script>
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

    </script>
<table cols="10">
  <tr><td>00:00</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:01</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:02</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:03</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:04</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:05</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:06</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:07</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:08</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:09</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:10</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:11</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:12</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:13</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:14</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:15</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:16</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:17</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:18</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
  <tr><td>00:19</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td></tr>
</table>

</script>
@endsection