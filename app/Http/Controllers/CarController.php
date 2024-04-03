<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarController extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        return view('index', ['cars' => $cars]);
    }

    public function show($id)
    {
        $cars = Cars::findOrFail($id);
        return view('show', ['cars' => $cars]);
    }    
}
