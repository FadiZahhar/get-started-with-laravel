<?php

Route::get('form', function () {
    return view('form');
});

Route::post('submitted', function () {
    dd(Request::has('newsletter'));
});

Route::put('submitted', function () {
    return 'submitted put';
});

Route::delete('submitted', function () {
    return 'submitted delete';
});
