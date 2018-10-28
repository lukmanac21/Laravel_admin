<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
   protected $fillable = [
        'car_name', 'merk_car', 'img_car','price_car',
    ];
}
