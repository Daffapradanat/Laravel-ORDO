<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Cars;

class reviews extends Model
{
    public function car(): BelongsTo
    {
        return $this->belongsTo(Cars::class);
    }
}
