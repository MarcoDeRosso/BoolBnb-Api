<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
