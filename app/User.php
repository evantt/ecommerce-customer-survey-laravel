<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table = "users";

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'username', 'email', 'password', 'role_id', 'website', 'storename'
    // ];
    protected $fillable = ['first_name', 'last_name', 'phone_number', 'email', 'gender', 'birthdate', 'address', 'country_id', 'zip_code', 'occupation', 'survey_id', 'password', 'role'];

    // public function role(){
    //     return $this->belongsTo(Role::class, 'role_id');
    // }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function role_id($role)
    // {
    //     //dd();
    //     if($this->role->role == $role)
    //     {
    //         return true;
    //     }
    // }
}
