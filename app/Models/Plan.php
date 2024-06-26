<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = ['sponsor_id', 'user_id', 'mon_tue_wed_thu_fri_san_sun', 'date_time_from', 'date_time_to', 'status'];
}
