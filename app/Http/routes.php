<?php

Route::get('session', function () {
    Session::put('example', 'testing');

    Session::put('array', ['one']);

    Session::push('array', 'two');

    Session::flash('flashy', 'example');
});

Route::get('session/read', function () {
    var_dump(Session::get('example', 'default value'));

    var_dump(Session::get('array'));

    var_dump(Session::get('flashy', 'nothing flashed'));
});
