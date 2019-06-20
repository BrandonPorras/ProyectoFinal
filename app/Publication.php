<?php

namespace INTEGRATEITM;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{

    public function user(){
        return $this->belongsTo('\INTEGRATEITM\User');
    }  
}
