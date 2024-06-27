<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Banana extends Controller
{
    public function banana()
    {
        $banana = 'banana';
        return response->json($banana);
    }
}
