<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class playground extends Controller
{
    public function list()
    {
        return view('playground');
    }
}
