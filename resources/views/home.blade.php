@extends('layouts.app')



@section('Title')
    Home
@endsection

@section('Content')


<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-- mb-0 mb-md-0 ">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
  <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg>
      </a>

      <div class="col-md-3 text-end">
      <a href="/login"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
      </div>
    </header>
  </div>
      <h1 class="text-center">Meeting Room</h1>
      <div class="text-center">
      <img src="https://meetingroom.io/wp-content/uploads/2019/05/Company-Meetings.png" class="img-fluid" alt="Sample photo">
      </div>
      <div class = "text-center">
          <h2>About Meeting Room</h2>
          <p class="text-center">A meeting room is a corporate space equipped<br> 
with a high-tech audio-visual complex for comfortable 
and efficient holding of meetings, meetings, presentations,
brainstorming sessions, discussions, demonstrations and<br>
other events in order to quickly resolve business processes
and strategic tasks.</p>
    </div>
    <div class="text-center">
      <img src="https://sun9-9.userapi.com/impg/zbN9jXNqlceaA7GlE1-myV5u2E301qq_9oLNCw/tyisNRRQRtk.jpg?size=1895x774&quality=96&sign=6e8245902add048befa0e775ef29f311&type=album" class="img-thumbnail" alt="Sample photo">
      </div>
      
      
    <footer class="text-dark">
      <div class="container">
        <p class="float-right">
          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></a>
        </p>
      </div>
    </footer>
@endsection