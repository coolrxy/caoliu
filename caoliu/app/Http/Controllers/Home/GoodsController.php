<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\goods_types;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

use Intervention\Image;

class GoodsController extends Controller
{
    //前端用户修改价格
    public function changeOrder()
    {
        $input = Input::except('_token');
        //input['cate_id'] 要修改的那条记录的id  input['cate_order'] 要修改成的排序值
        //更新价格
        $re = DB::table('data_goods')
            ->where('data_goods_id', $input['data_goods_id'])
            ->update(['goods_price' => $input['goods_price'] ]);
        // $re = $cate->save();
        if($re){
            $data = [
                'status'=>0,
                'msg'=>'修改成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'修改失败'
            ];
        }
        return $data;
    }



    //文件上传对应的控制器方法
    public function uploads()
    {

        $file = Input::file('file_upload');
        //判断文件是否有效
        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(base_path().'/public/uploads/goods',$newName);
            $filepath = 'uploads/goods/'.$newName;
            //返回文件的路径
//            Image\Image::make($filepath)->resize(400,400)->save(public_path($filepath));
            return  $filepath;
        }
    }

    /**
     * 查询个人账号发布的闲置
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查询已发布的商品
        $data = DB::table('goods')
            ->join('data_goods', 'goods.goods_id', '=', 'data_goods.goods_data_id')
            ->select('goods.goods_id','goods.goods_num','data_goods.data_goods_id','goods.goods_status', 'goods.goods_create_time', 'goods.goods_name','data_goods.goods_pic','data_goods.goods_price')
            ->where('users_goods_id',(session()->get('homeUser'))['users_id'])
            ->paginate(3);
        return view('home.my.page_sale',['data'=>$data]);
    }

    /**
     * 发布页面,将排序好的分类发送到页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //排序的分类
        $cate= (new goods_types)->tree();
        //添加发布页面
        return view('home.my.page_release',['cate'=>$cate]);

    }

    /**
     * 发布商品
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取页面的商品信息
        $input = $request->except('_token');

        //做表单验证
        $rule = [
            'goods_name'=>'required|max:32',
            'goods_describe'=>'required',
            'goods_price'=>'required|max:7',
            'goods_old_price'=>'required|max:7',
        ];
        $msg = [
            'goods_name.required'=>'商品标题不能为空',
            'goods_describe'=>'商品描述不能为空',
            'goods_price.max'=>'价格最大不能大于7位',
            'goods_price.required'=>'价格不能为空',
            'goods_describe.required'=>'商品描述不能为空',
            'goods_old_price.required'=>'原价不能为空',
            'goods_old_price.max'=>'原价最大只能填写7位',
        ];

        $validator = Validator::make($input,$rule,$msg);

        if ($validator->fails()) {
            return redirect('home/goods/create')
                ->withErrors($validator)
                ->withInput();
        }
        //生成发布商品时间
        $goods_create_time = date('Y-m-d H:i:s');
        $input['goods_create_time']=date('Y-m-d H:i:s');
        //生成订单编号
        $input['goods_num']=date('YmdHis').mt_rand(1000,9999);
        //拿取当前用户的id,通过session查询登录的用户id
        $input['users_goods_id']=(session()->get('homeUser'))['users_id'];
        //使用事务,写入数据库
        $flag = DB::transaction(function () use($input) {
            DB::table('goods')->insert(
                ['goods_type' => $input['goods_type'],'goods_name'=>$input['goods_name'], 'goods_status' => $input['goods_status'], 'goods_create_time' => $input['goods_create_time'], 'goods_num' => $input['goods_num'], 'users_goods_id' => $input['users_goods_id']]
            );
            $in = DB::table('goods')->orderBy('goods_id', 'desc')->limit(1)->get();
            $input['goods_data_id'] = $in[0]->goods_id;
            DB::table('data_goods')->insert(
                ['goods_data_id' => $input['goods_data_id'], 'goods_pic' => $input['goods_pic'], 'goods_describe' => $input['goods_describe'], 'goods_price' => $input['goods_price'], 'goods_old_price' => $input['goods_old_price']]
            );


        });


        if(!$flag){

            return redirect('home/goods')->with('errors','发布商品成功');
        }else{
            return back()->with('errors', '发布商品失败');
        }
    }

    /**
     * 加载填写物流单号页面
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //商品状态 0:上架 ,1:下架,2:发货中,3:取消发布
        //通过$id查询商品状态
        $data1 = DB::table('orders')->where('goods_id',$id)->get();
        $data = DB::table('goods')->where('goods_id',$id)->get();
//        dd($data1[0]->goods_id);
        if(!empty($data1[0]->goods_id))
        {
            return view('home.my.page_seed',['data'=>$data]);
        }else{
            return back();
        }
//        if($data[0]->goods_status == 2){
//            return back()->with('errors','已发货');
//        }else if($data[0]->goods_status == 0){
//        // dd($data[0]->goods_status);
//        return view('home.my.page_seed',['data'=>$data,'data1'=>$data1]);
//        }else{
//            return back();
//        }
    }
    //将物流写入
    //商品状态 0:上架 ,1:下架,2:发货中,3:取消发布
    public function seed(Request $request)
    {
        //获取页面的商品信息
        $input = $request->except('_token');
        //通过当前状态修改前台商品状态
        //添加事务
        if($input['goods_status']==0) {
           $data = DB::table('goods')->where('goods_id', $input['goods_id'])->update(['goods_status' => 2]);
           $data1= DB::table('orders')->where('goods_id', $input['goods_id'])->update(['orders_number'=>$input['orders_number']]);
            return redirect('home/goods');
        }else if($input['goods_status']==2){
            return back();
        }else if($input['goods_status']==3){

            return back();
         }
    }

    /**
     *前台用户修改价格页面
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $data =DB::table('data_goods')->where('data_goods_id',$id)->get();
        return view('home.my.page_price',['data'=>$data]);
    }

    /**
     * 修改价格
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->except('_token');
        //表单验证
        $rule = [
            'goods_price'=>'required|max:7',

        ];
        $msg = [
           'goods_price.required'=>'请输入价格',
            'goods_price.max'=>'价格最大不能大于7位',
        ];

        $validator = Validator::make($input,$rule,$msg);

        if ($validator->fails()) {
            return redirect('home/goods')
                ->withErrors($validator)
                ->withInput();
        }
//        修改价格,写入数据库
        $data = DB::table('data_goods')->where('data_goods_id',$id)->update(['goods_price'=>$input['goods_price']]);
        if($data){
            return redirect('home/goods')->with('errors','修改成功');
        }else{
            return redirect('home/goods')->with('errors','修改失败');
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

    }

    //取消发布的商品
    public function esc($id)
    {
        //查询当前商品状态
        $status = DB::table('goods')->select('goods_status')->where('goods_id',$id)->get();
        //判断商品状态如果不等于发货中,就可以取消订单
        if($status[0]->goods_status != 2)
        {
            $data = DB::table('goods')->where('goods_id', $id)->update(['goods_status' => 3]);
            return back();
        }else {
            return back();
        }

    }
}
