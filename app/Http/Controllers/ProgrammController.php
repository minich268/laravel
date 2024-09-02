<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programm;

class ProgrammController extends Controller
{
    public function getAll ($url = null){
        return view ('programm');
    }
}
