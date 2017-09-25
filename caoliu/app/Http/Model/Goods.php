<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //
    public $tables = 'goods';
    public $primaryKey 'goods_id';
    public $fillable = [
        'goods_status','goods_create_time','goods_update_time','goods_num','users_goods_id','goods_name','goods_type',
    ];
    public $timestamps = false;

    public function data_goods()
    {
        return $this->hasOne('App\Http\Model\Data_goods','goods_data_id');
    }
    public function goods_types()
    {
        return $this->hasOne('App\Http\Model\goods_types','goods_type_id','goods_type');
    }



}
