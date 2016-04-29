<?php

Route::get('/', 'HomeController@home');

Route::get('contact/office-hours', function () {
    return 'we have no office';
});

Route::controller('contact', 'Pages\ContactController');
