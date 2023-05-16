<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_type',
        'city',
        'street_type',
        'street',
        'house_type',
        'house',
        'block_type',
        'block',
        'geo_lat',
        'geo_lon'
    ];
}
