<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = ['service', 'cost', 'time'];

    public function respondents(){
        return $this->hasOne('App\Respondent');
    }
}
