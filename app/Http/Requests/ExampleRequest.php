<?php

namespace App\Http\Requests;

class ExampleRequest extends Request
{
    public function rules()
    {
        return [
            'name' => ['required'],
            'age' => ['required', 'in:12,26,50'],
            'sex' => ['in:male,female,other'],
            'tos' => ['accepted']
        ];
    }
}
