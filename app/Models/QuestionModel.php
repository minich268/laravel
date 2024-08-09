<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
        'username',
        'user_id',
        'blog_id',
        'status',
           ];
}
