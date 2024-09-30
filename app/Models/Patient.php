<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public $table = "formats";
    public $fillable = ['user_id', 'name', 'email', 'phone', 'body', 'status', 'order_date', 'order_time'];

}
