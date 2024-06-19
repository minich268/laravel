<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Star;

class StarController extends Controller
{
    public function getAdd(){
        $obj = where('model_name', $model_name)->where('model_id', $model_id)->where('id', $_SERVER['REQUEST_URI'])->first();
        if($obj){
            $obj->delete();

        }else{
          $star = new Star;
          $star->model_id = $request->model_id;
          $star->model_name = $request->model_name;
          $star->ip = $_SERVER['REMOTE_ADDR'];
          $star->save();

        }
        return redirect()->back();
    }
}
