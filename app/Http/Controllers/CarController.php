<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cars;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CarController extends Controller
{

    public function index() {

    }
    public function store(Request $request) {
         $request->validate([
            'car_name' => 'required|string',
            'merk_car' => 'required|string',
            'img_car' => 'required|string',
            'price_car' => 'required|string'
        ]);
        $car = new Car([
           'car_name' => $request->car_name,
            'merk_car' => $request->merk_car,
            'img_car' => $request->img_car,
            'price_car' => $request->price_car
        ]);
        $car->save();
        return response()->json([
            'message' => 'Successfully created car!'
        ], 201);
    }
    
}
