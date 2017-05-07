<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    public function propertyid(){
        return $this->belongsTo(Property::class);
    }
}
