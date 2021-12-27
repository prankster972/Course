@extends('layouts.app')

@section('Title')Login
@endsection

@section('Content')<h1>Login Page</h1>@endsection


@section('form')
@if($errors->any())
<div class="alert alert-danger">
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

  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputEmail4">Email</label>
      <input type="text" name="Email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-2">
      <label for="inputPassword4">Password</label>
      <input type="password" name="Password" class="form-control" id="inputPassword4" placeholder="Password">
    </div> 
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
@endsection