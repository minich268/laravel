<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Auth;

class RegisterController extends Controller
{
    public function getIndex(){
        $registers = Register::orderBy('user_id', 'DESC')->simplePaginate(33);
        return view('format', compact('registers'));
       }
        public function postIndex(Request $request){
            $request['user_id'] = Auth::guest() ? 0 : Auth::user()->id;
                                 Register::create($request->all());
            $request->session()->flash('status', 'Your message has been received. After verification it will be posted on the website');
            return redirect()->back();
       }
}
