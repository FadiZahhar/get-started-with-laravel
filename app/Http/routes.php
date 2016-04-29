<?php

Route::get('/', function () {
    return view('layout')->nest('content', 'pages.home');
});

Route::get('contact', function () {
    return view('layout')->nest('content', 'pages.contact');
});
