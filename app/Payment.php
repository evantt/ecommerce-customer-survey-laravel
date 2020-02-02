<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['method'];

    public function respondents(){
        return $this->hasOne('App\Respondent');
    }
}
