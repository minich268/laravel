<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\App;




class GalleryController extends Controller
{
    public function getAll ($url = null){
        $galleries = Gallery::all();
        return view ('gallery', compact('galleries'));
    }
}
