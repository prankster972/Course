@extends('layouts.app')

@section('Title')Login
@endsection




@section('form')
@if($errors->any())
<div class="alert alert-danger" >
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul> 
</div>  
@endif   
<div class="container">
<form action="{{ route('login-sub')}}" method="post">

    @csrf
    <div class="mx-auto col-md-3 pl-2" outline: red dashed 2px;>
    <form class="form-signin ">
    <svg xmlns="http://www.w3.org/2000/svg" width="247.5" height="40" fill="currentColor" class="bi bi-calendar-check-fill mx-auto mt-5 mb-4 " viewBox="0 0 16 16">
  <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"></path>
</svg>
      <h1 class="h1 mb-4 font-weight-normal">Please sign in</h1>
      <label for="inputEmail4">Email address</label>
      <input type="email" name="Email" id="inputEmail4" class="form-control mb-3" placeholder="Email address" >
      <label for="inputPassword4" >Password</label>
      <input type="password" name="Password" id="inputPassword4" class="form-control" placeholder="Password" >
      <div class = "mt-4">
      <button type="submit" class="btn btn-lg btn-primary btn-block m" >Sign in</button>
      </div>
    </form>
</div>
  </div>
</form>
</div>

  <!--<h2 class="ml-auto fixed-bottom mb-4" style="width: 200px;">RU</h1>
</div>
@endsection