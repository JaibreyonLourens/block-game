<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public function Users(){
       return $this->belongsTo('\App\User', 'user_id');
    }
}
