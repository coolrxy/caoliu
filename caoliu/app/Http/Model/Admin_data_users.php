<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Admin_data_users extends Model
{
    //
    public $tables = 'admin_data_users';
    public $primaryKey = 'admin_data_users_id';
    public $fillable = [
        'data_admin_id','admin_level','admin_status',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;
}
