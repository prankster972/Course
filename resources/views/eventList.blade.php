
@extends('layouts.app')

@section('Title')list
@endsection




@section('form')
<form action="{{ route('event-list')}}" method="get">
@csrf
<pre><h2 class="mt-4 pt-4">              Monaday   Tuesday    Wednsday  Thursday    Friday   Saturday    Sunday</h3></pre>
<canvas id="canvas" width="1500" height="800" class="bg-light" style="z-index:1"></canvas>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:150px; left:30px" id="0" >00:00</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:180px; left:30px" id="1" >00:01</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:210px; left:30px" id="2" >00:02</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:240px; left:30px" id="3" >00:03</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:270px; left:30px" id="4" >00:04</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:300px; left:30px" id="5" >00:05</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:330px; left:30px" id="6" >00:06</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:360px; left:30px" id="7" >00:07</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:390px; left:30px" id="8" >00:08</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:420px; left:30px" id="9" >00:09</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:450px; left:30px" id="10" >00:10</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:480px; left:30px" id="11" >00:11</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:510px; left:30px" id="12" >00:12</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:540px; left:30px" id="13" >00:13</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:570px; left:30px" id="14" >00:14</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:600px; left:30px" id="15" >00:15</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:630px; left:30px" id="16" >00:16</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:660px; left:30px" id="17" >00:17</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:690px; left:30px" id="18" >00:18</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:720px; left:30px" id="19" >00:19</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:750px; left:30px" id="20" >00:20</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:780px; left:30px" id="21" >00:21</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:810px; left:30px" id="22" >00:22</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:840px; left:30px" id="23" >00:23</button>
<button type="button" class="btn btn-light" style="z-index:2; position:absolute; top:870px; left:30px" id="24" >00:24</button>
<script src="{{ mix('js/GUI.js') }}" ></script>
<p>{{ $req }}</p>
@if($req =='00:00')
         {
            <h3 style="z-index:2; position:absolute; top:150px; left:80px" >00:00</h3>
         }
         @endif
@endsection