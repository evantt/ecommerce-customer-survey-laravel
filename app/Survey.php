<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = ['name'];

    public function respondents(){
        return $this->hasOne('App\Respondent');
    }
}
