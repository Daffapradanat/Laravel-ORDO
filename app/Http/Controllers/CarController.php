<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarController extends Controller
{
    public function index()
    {
        $cars = Cars::where('jenis', 'MPV')->get();

        return view('cars.index', compact('cars'));
    }
}
