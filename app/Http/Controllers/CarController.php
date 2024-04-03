<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarController extends Controller
{
    public function showCarsByBrand($brand)
    {
        $cars = DB::table('cars')
            ->where('brand', $brand)
            ->get();

        return view('cars-by-brand', ['cars' => $cars, 'brand' => $brand]);
    }
}
