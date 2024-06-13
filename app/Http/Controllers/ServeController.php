<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        //return'Invoke In Serve Controller';
        return $request;
    }
}
