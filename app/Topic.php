<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
    'title','content'
];
    public function User(){
    return $this->belongsTo('App\User');
    }

}
