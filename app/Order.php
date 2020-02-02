<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['resp_id', 'product_id', 'shipment_id', 'payment_id'];

    public function respondents(){
        return $this->hasOne('App\Respondent');
    }
}
