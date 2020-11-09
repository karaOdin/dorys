<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    protected $fillable = [
         'nom','prenom','Email','TEL','adresse',"adresse2",'date_congre'
    ];
    // public function Event()
    // {
    //     return $this->hasOne(Event::class,'event_id');
    // }
}
