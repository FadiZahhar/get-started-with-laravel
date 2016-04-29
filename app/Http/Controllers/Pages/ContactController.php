<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function getIndex()
    {
        return 'this is the contact page';
    }

    public function getMyDetails()
    {
        return 'my contact details';
    }
}
