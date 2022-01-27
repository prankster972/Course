@extends('layouts.app')

@section('header')
<div class="container">
<header class="d-flex flex-wrap justify-content-right py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-left pl-7 text-dark text-decoration-none">
          <span class="fs-4">Log out</span>
      </a>
</div>
    </header>
@endsection

@section('Title')
    Main
@endsection

@section('Content')
<form action="{{ route('event-list')}}" method="post">
@csrf
<p>Choose the date: 
   <input type="date" name="Calendar">
  <label for="appt-time">Choose an appointment time: </label>
  <input id="appt-time" name="appt-time" list="timeid">
  <datalist id="timeid">
  <option value="00:00" label="00:00" >
  <option value="00:01" label="00:01">
  <option value="00:02" label="00:02">
  <option value="00:03" label="00:03">
  <option value="00:04" label="00:04">
  <option value="00:05" label="00:05">
  <option value="00:06" label="00:06">
  <option value="00:07" label="00:07">
  <option value="00:08" label="00:08">
  <option value="00:09" label="00:09">
  <option value="00:10" label="00:10">
  <option value="00:11" label="00:11">
  <option value="00:12" label="00:12">
  <option value="00:13" label="00:13">
  <option value="00:14" label="00:14">
  <option value="00:15" label="00:15">
  <option value="00:16" label="00:16">
  <option value="00:17" label="00:17">
  <option value="00:18" label="00:18">
  <option value="00:19" label="00:19">
  <option value="00:20" label="00:20">
  <option value="00:21" label="00:21">
  <option value="00:22" label="00:22">
  <option value="00:23" label="00:23">
  <option value="00:24" label="00:24">
</datalist>
  <span class="validity"></span>
    <a href ="{{route ('event-list-id') }}"><button type="submit" class="btn btn-primary">Create</button></a>
    <div class = "col-md-5 mb-4">
      <p>Task</p>
    <input class = "pr-5 pb-4" type="text" name="TaskText">
      <div>
  </form>

 
 @endsection