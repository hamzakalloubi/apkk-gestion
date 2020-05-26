<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remise extends Model
{
    public $timestamps = true;


    public function demande(){
        return $this->belongsTo('App\Demande','demande_id');
    }

    
}
