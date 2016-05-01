<?php

Route::get('create', function () {
    DB::table('users')->insert([
        [
            'name' => 'Wanda',
            'email' => 'wanda@mail.com',
            'location' => 'Venus'
        ],
        [
            'name' => 'Jeb',
            'email' => 'jeb@mail.com',
            'location' => 'Mars'
        ]
    ]);

    return 'user was created';
});

Route::get('edit', function () {
    DB::table('users')->update([
        'location' => 'Moon'
    ]);

    return 'user was edited';
});

Route::get('delete', function () {
    DB::table('users')->truncate();

    return 'user was deleted';
});
