<?php

Route::get('/', function () {
    return view('pages.home', ['name' => '<strong>Jason</strong>']);
});

Route::get('contact', function () {
    return view('pages.contact');
});
