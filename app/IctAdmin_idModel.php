<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IctAdmin_idModel extends Model
{
    Public function Admin(){
        return $this->belongsTo('App\IctAdmin_id');
    }

    
}
