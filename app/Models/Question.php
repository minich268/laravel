<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public $table = "question_models";
    protected $fillable = [
        'body',
        'username',
        'user_id',
        'blog_id',
        'status',
        'ansver',
        'question',   
           ];
}
