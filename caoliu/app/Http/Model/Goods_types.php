<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Goods_types extends Model
{
    //
    public $tables = 'goods_type';
    public $primaryKey = 'goods_type_id';
    public $fillable = [
        'goods_pid','goods_type_name',
    ];
    public $timestamps = false;
    //  获取格式化后的数据
    public function tree()
    {
        $data = $this->orderBy('goods_type_id','asc')->get();
        //  自定义一个格式化数据的方法，返回可直接用的数据
        return $this->getTree($data);
    }

    public function getTree($data)
    {
        //  定义一个空数组，存放格式化后的数据
        $arr = array();
        foreach($data as $k=>$v)
        {
            //  将当前返回的一级类放入当前的数组中
            if ($v['goods_pid'] == 0)
            {
                $data[$k]['goods_type_names'] = '|——|'.$data[$k]['goods_type_name'].'|——|';
                $arr[] = $data[$k];
                //  当前一级类下面的二级类
                foreach($data as $kk => $vv)
                {
                    if ($v['goods_type_id'] == $vv['goods_pid']){
                        $data[$kk]['goods_type_names'] = '|——|——|'.$data[$kk]['goods_type_name'];
                        $arr[] = $data[$kk];
                    }

                }
            }
        }

        return $arr;
    }
}
