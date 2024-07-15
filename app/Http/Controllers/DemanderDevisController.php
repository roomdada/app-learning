<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemanderDevisController extends Controller
{
    public function show()
    {
        return view('devis');
    }
}