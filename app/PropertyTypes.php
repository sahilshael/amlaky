<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyTypes extends Model
{
    //

    protected $fillable = [
        'property_type', 
    ];

    protected $table = 'property_types';
}
