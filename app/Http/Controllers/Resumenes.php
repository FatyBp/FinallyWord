<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Resumenes extends Controller
{
    public function libs($name){
        return view("sinopsis/$name", compact('name'));
    }
}
