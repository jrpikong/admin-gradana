<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lender extends Model
{
    public function userid(){
        return $this->belongsTo(User::class);
    }
}