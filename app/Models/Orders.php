<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
       public $fillable = ['user_id', 'name', 'email', 'phone', 'body', 'status'];
}
