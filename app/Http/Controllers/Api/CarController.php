<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Car;


class CarController extends Controller
{
    public function index() {
        $cars = Car::all();
        return response()->json($cars);

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
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'car_name' => 'required|string',
            'merk_car' => 'required|string',
            'img_car' => 'required|string',
            'price_car' => 'required|string'
        ]);
        $car->car_name = $request['car_name'];
        $car->merk_car = $request['merk_car'];
        $car->img_car = $request['img_car'];
        $car->price_car = $request['price_car'];
        $car->save();
         return response()->json([
            'message' => 'Successfully updated car!'
        ], 201);
    }
    public function destroy(Car $car)
    {
        $car->delete();
        return response()->json([
            'message' => 'Successfully deleted car!'
        ], 201);

    }

    
    
}
