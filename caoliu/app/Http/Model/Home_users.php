<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Home_users extends Model
{
    //
    public $table = 'home_users';
    public $primaryKey = 'users_id';
    public $fillable = [
        'users_name','user_password',
    ];

    protected $hidden = [
        'users_password', 'remember_token',
    ];

    public function data_users()
    {
        return $this->hasOne('App\Http\Model\data_users','users_id');
    }

    public function data_users_evaluates()
    {
        return $this->hasMany('App\Http\Model\data_users_evaluates','evaluate_sender_id');
    }


}
