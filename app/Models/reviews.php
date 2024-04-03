<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    public function post(): belongsTo
    {
        return $this->belongsTo(Cars::class);
    }
}
