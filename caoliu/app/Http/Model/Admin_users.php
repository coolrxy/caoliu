<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Admin_users extends Model
{
    //
    public $tables = 'admin_users';

    public $primaryKey = 'admin_id';

    public $fillable = [
        'admin_name','admin_password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

    public function admin_data_users()
    {
        return $this->hasOne('App\Http\Model\Admin_data_users','data_admin_id');
    }
}
