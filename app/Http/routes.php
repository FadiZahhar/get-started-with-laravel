<?php

Route::get('form', function () {
    return view('form');
});

Route::post('submitted', function (App\Http\Requests\ExampleRequest $request) {
    return 'hooray it passed!';
});

Route::put('submitted', function () {
    return 'submitted put';
});

Route::delete('submitted', function () {
    return 'submitted delete';
});
