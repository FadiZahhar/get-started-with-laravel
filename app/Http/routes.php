<?php

Route::get('/', function () {
    return 'hello world';
});

Route::get('users/{name?}', function ($name = 'bob') {
    return $name;
})->where('name', '\w+');

Route::get('users', function () {
    // returns all users
});

Route::post('users', function () {
    // creates a new user
});
