<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Manufacturer;
use App\Models\Review;

class Cars extends Model
{
    /**

     */
    public function manufacturer(): HasOne
    {
        return $this->hasOne(Manufacturer::class);
    }
    public function reviews(): hasMany
    {
        return $this->hasMany(Review::class);
    }
}
