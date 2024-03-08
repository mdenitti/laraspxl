<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tday;

class Location extends Model
{
    use HasFactory;

       // singular to table name
       public function tdays()
       {
           // return to the class Tday
           return $this->belongsToMany(Tday::class);
       }

}
