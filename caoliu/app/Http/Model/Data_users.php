<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Data_users extends Model
{
    //
    public $table = 'data_users';
    public $primaryKey = 'data_users_id';
    public $fillable = [
        'users_email','users_phone','users_pic','users_credit','users_integra','users_nickname','users_problem_1','users_answer_1','users_problem_2','users_answer_2','users_problem_3','users_answer_3','users_id'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function home_users()
    {
        return $this->belongsTo('App\Http\Model\Home_users','users_id');
    }
}
