<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class Tday extends Model
{
    use HasFactory;

    // singular or plural to table name
    public function locations()
    {
        // return to the class Location
        return $this->belongsToMany(Location::class);
    }


}
