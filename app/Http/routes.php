<?php

Route::get('mail', function () {
    Mail::raw('hello this is just a test', function ($message) {
        $message->subject('testing')
                ->to('bill@mail.com')
                ->from('bob@mail.com');
    });

    return 'email has been sent';
});

Route::get('mail/view', function () {
    Mail::send('emails.example', ['name' => 'Bob'], function ($message) {
        $message->subject('testing')
                ->to('bill@mail.com')
                ->from('bob@mail.com');
    });
});
