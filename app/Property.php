<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Property extends Model
{
//    public function province(){
//        return $this->belongsTo(Province::class);
//    }
//
//    public function regencies(){
//        return $this->belongsTo(Regency::class);
//    }
//
//    public function districts(){
//        return $this->belongsTo(District::class);
//    }
//    public function villages(){
//        return $this->belongsTo(Village::class);
//    }

    public function developer(){
        return $this->belongsTo(Developer::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function developerId(){
          return $this->belongsToMany(Developer::class);
    }
}
