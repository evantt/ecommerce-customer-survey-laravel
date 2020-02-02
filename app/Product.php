<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category', 'name', 'qty', 'price'];

    public function respondents(){
        return $this->hasOne('App\Respondent');
    }
}
