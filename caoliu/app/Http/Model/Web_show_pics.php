<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Web_show_pics extends Model
{
    //
    public $tables = 'web_show_pics';

    public $primaryKey = 'id';

    public $fillable = [
        'title','content','pic'
    ];

    protected $guarded = [];
    public $timestamps = false;
}
