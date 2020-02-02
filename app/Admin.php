<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admins";

    protected $fillable = ['username', 'email', 'storename', 'website', 'role'];
    
    // public function role(){
    //     return $this->belongsTo(Role::class, 'role_id');
    // }
}
