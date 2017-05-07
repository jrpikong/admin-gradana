<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Developer extends Model
{
    public function userId(){
        return $this->belongsTo(User::class);
    }

    public function properties(){
        return $this->hasMany(Property::class);
    }
}
