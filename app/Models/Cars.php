<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    /**

     */
    public function manufacturer(): HasOne
    {
        return $this->hasOne(Manufacturer::class, 'id', 'manufacturer_id');
    }
    public function reviews(): hasMany
    {
        return $this->hasMany(Review::class);
    }
}
