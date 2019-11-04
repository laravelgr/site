<?php

Route::get('/', function () {
    return view('index');
});

Route::post('/signup','SignupController');

