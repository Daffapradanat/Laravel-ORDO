<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Cars;

class Manufacturer extends Model
{
    public function car(): HasOne
    {
        return $this->belongsTo(Cars::class);
    }
}
