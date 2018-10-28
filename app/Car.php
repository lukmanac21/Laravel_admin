<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Car as Authenticatable;

class Cars extends Model
{
	use Notifiable;
    protected $fillable= [
    	'car_name','merk_car','img_car','price_car'
    ];
}
