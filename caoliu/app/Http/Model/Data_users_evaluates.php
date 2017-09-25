<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Evaluate extends Model
{
    //
    public $tables = 'data_users_evaluates';

    public $primaryKey = 'evaluate_id';

    public $fillable = ['evaluate_content','evaluate_sender_id','evaluate_embracer_id','evaluate_time'];

    protected $guarded = [];

    public $timestamps = false;



}
