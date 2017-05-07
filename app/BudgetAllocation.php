<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BudgetAllocation extends Model
{
    public function lenderId(){
        return $this->belongsTo(Lender::class);
    }
}
