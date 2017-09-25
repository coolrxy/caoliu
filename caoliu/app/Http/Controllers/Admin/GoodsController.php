<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = '';
        if(session()->get('user_status')==1 || session()->get('user_level')==0){
            //显示商品管理表单
            $condition1 = $request->input('status');
            $condition = $request->input('keywords')?$request->input('keywords'):'';
//        $data = DB::table('goods')->where('goods_name','like','%'.$condition2.'%')->paginate(5);
            $data = DB::table('goods')->join('data_goods','goods.goods_id','=','data_goods.goods_data_id')->join('home_users','goods.users_goods_id','=','home_users.users_id')->select('home_users.users_name','goods.goods_id','goods.goods_orders_num','goods.goods_num','goods.goods_create_time','goods.goods_status','goods.users_goods_id','goods.goods_name','data_goods.goods_pic','data_goods.goods_describe','data_goods.goods_price','data_goods.goods_old_price')->where('goods_name','like','%'.$condition.'%')->paginate(5);
            return view('admin.goods.goods',['data'=>$data]);
        }else{
            return view('admin.goods.goods',['errors'=>'没有权限','data'=>$data]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //商品状态 0:上架 ,1:下架,2:发货中,3:取消发布
        $tb = DB::table('goods')->where('goods_id', $id)->update(['goods_status' => 1]);
        if($tb){
            return back()->with('errors','修改成功');
        }else{
            return back()->with('errors','修改失败');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function show($id)
    {
        //0是下架 1是下架
//        dd($id);

        $tb = DB::table('goods')->where('goods_id', $id)->update(['goods_status' => 0]);
        if($tb){
            return back()->with('errors','修改成功');
        }else{
            return back()->with('errors','修改失败');
        }
    }

}
