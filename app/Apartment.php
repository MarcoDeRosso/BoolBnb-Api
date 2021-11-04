<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    //accesso diretto da apartments a services(many to many)
    protected $with = ['services'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function statistics(){
        return $this->hasMany(Statistic::class);
    }
    public function messages(){
        return $this->hasMany(Message::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    public function services(){
        return $this->belongsToMany(Service::class);
    }
}
