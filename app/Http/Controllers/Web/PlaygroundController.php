<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class PlaygroundController extends Controller
{
    public function view()
    {
        return view('playground.view');
    }
}
