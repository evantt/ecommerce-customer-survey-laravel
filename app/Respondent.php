<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    // //Table Name
    // protected $table = 'respondents';
    // //primary key
    // public $primaryKey = 'id';
    // //Time stamps
    // public $timestamps = true;
    protected $fillable = ['first_name', 'last_name', 'phone_number', 'email', 'gender', 'birthdate', 'address', 'country_id', 'zip_code', 'occupation', 'survey_id'];
    
    // public function surveys(){
    //     return $this->belongsTo('App\Survey');
    // }
    
    // public function countries(){
    //     return $this->belongsTo('App\Country');
    // }
}
