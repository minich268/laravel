<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class review extends Model
{
    use HasFactory;
    protected $casts = [
        'preferred' => 'boolean',
    ];
    public $fillable = ['user_id', 'name', 'email', 'phone', 'preferred', 'message'];
}
