<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function getAll ($url = null){
        $questions = Question::all();
        return view ('question', compact('questions'));
    }
}
