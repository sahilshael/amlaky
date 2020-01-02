<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertySubTypes extends Model
{
    //
    protected $table = 'property_sub_types';
    protected $fillable = [
        'property_type_id',  'property_subtype'
    ];
}
