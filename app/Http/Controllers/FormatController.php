<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Format;
use Auth;

class FormatController extends Controller
{
    public function getIndex(){
        $formats= Format::orderBy('user_id', 'DESC')->where('preferred', 1)->simplePaginate(33);
        return view('format', compact('formats'));
       }
        public function postIndex(Request $request){
            $request['user_id'] = Auth::guest() ? 0 : Auth::user()->id;
            Format::create($request->all());            
            $request->session()->flash('status', 'Your message has been received. After verification it will be posted on the website');
            return redirect()->back();
       }
}
