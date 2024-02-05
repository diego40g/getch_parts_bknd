<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proforma extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_id',
        'part_id',
        'user_id',
        'city_id',
        'price',
        'description',
        'file'
    ];
}
