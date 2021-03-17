<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($name)
    {
        if ($name === 'ottavio') {
            abort(404);
        }

        return view('test-controller.index',
        ['nomeUtente' => $name]);
    }
}
