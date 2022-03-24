<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('signup');
});
Route::post('/login/submit', 'LoginController@submit') -> name('login-sub');
Route::get('/login/submit', 'LoginController@submit') -> name('login-sub');
Route::post('/main/event', 'EventController@event') -> name('event-ev');
Route::get('/main/event', 'EventController@event') -> name('event-ev');
Route::get('/main/event/list', 'EventController@event2') -> name('event-list');
Route::put('/main/event/list/', 'EventController@event2') -> name('event-list');
Route::post('/main/event/list', 'EventController@event2') -> name('event-list');
Route::get('/main/event/list1/', 'EventController@MRList') -> name('event-list-id');


Route::get('/main', function () {
    return view('main');
});
