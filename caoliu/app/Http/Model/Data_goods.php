<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Data_goods extends Model
{
    //
    public $tables = 'data_goods';
    public $primaryKey = 'data_goods_id';
    public $fillable = [
        'goods_data_id','goods_pic','goods_describe','goods_price','goods_old_price',
    ];
    public $timestamps = false;
}
