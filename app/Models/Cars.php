<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    public function index()
    {
        $cars = DB::table('cars')
                    ->where('harga', '>', 200000000)
                    ->get();
        
        return view('cars.index', compact('cars'));
    }
    
}
