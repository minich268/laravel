<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\App;
use App\Models\Service;
class BaseController extends Controller
{
    public function getIndex(){
        $services = Service::whereIn('type', ['Гимнастика'])->get();
        return view ('index', compact('services'));
    }
    public function getUrl ($url = null){
        
        $lang = App::getLocale();
        $article = Article::where('url', $url)->where('lang', $lang)->first();
        return view ('article', compact('article'));
    
    }
    public function getOne(Blog $blog){
        return view('blog', compact('blog'));
    }

   
}
