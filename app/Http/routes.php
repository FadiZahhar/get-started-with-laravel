<?php

Route::get('user', function () {
    $user = DB::table('users')->find(1);

    $user = DB::select('SELECT * FROM users WHERE id=1');

    dd($user);
});
