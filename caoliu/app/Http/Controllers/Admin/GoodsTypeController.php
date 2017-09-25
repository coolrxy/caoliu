<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Goods_types;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GoodsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $condition2 = $request->input('keywords')?$request->input('keywords'):'';
        $condition1 = $request->input('goods_pid')?$request->input('goods_pid'):'10000';
        if($condition1 == '10000')
        {
            $data = Goods_types::where('goods_type_name','like','%'.$condition2.'%')->paginate(5);
        }else{
            $data = Goods_types::where([['goods_pid',$condition1],['goods_type_name','like','%'.$condition2.'%']])->paginate(5);
        }



        foreach ($data as $k => $item) {

            $re = Goods_types::where('goods_pid',$item['goods_type_id'])->get();
            //dd($re);
            if($re->count())
            {

                $item['count'] = 1; //显示删除按钮

            }else{
                $item['count'] = 0;//不显示删除按钮
            }

        }

//        $id = $request->input('goods_type_id')?$request->input('goods_type_id'):'';

        $type = Goods_types::where('goods_pid','0')->get();

//      dd($data);
        return view('admin.goods.type',['data'=>$data,'type'=>$type,'condition1'=>$condition1,'condition2'=>$condition2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
        $data = (new Goods_types)->tree();
//        $data = $this->getType();
        return view('admin.goods.add',['data'=>$data]);
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
        $data = $request->except('_token');
        if(!empty($data['goods_type_name'])){
            $goods_types = new Goods_types;
            $goods_types->goods_type_name = $data['goods_type_name'];
            $goods_types->goods_pid = $data['goods_pid'];
            $re = $goods_types->save();
            if($re)
            {
                return redirect('admin/goodsType/create')->with('errors','添加成功');
            }else{
                return redirect('admin/goodsType/create')->with('errors','添加失败');
            }
        }
        return redirect('admin/goodsType/create')->with('errors','名字不能为空');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $type = Goods_types::where('goods_pid','0')->get();
        $data = Goods_types::find($id);
        return view('admin.goods.edit',['data'=>$data,'type'=>$type]);
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
        $data = $request->except('_token','_method');
        $goods_types = Goods_types::find($id);

        if(!empty($data['goods_pid'])){
            $goods_types->goods_pid = $data['goods_pid'];
        }
        $goods_types->goods_type_name = $data['goods_type_name'];
        $re = $goods_types->save();
        if($re)
        {
            return redirect('admin/goodsType')->with('errors','修改成功');
//            return redirect()->route('admin/goodsType',['goods_type_id'=>$id]);
        }else{
            return back()->with('errors','修改失败');
        }

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
        $re = DB::transaction(function () use ($id){
            DB::table('goods_types')->where('goods_type_id',$id)->delete();
        });
        if($re){
            $data = [
                'state'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'state'=>1,
                'msg'=>'删除失败'
            ];
        }
    }
}
