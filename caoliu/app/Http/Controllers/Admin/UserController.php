<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin_data_users;
use App\Http\Model\Admin_users;
use function foo\func;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //  获取所有的用户数据
        $condition1 = $request->input('status');
        $condition2 = $request->input('keywords')?$request->input('keywords'):'';
        if($condition1==0){
            $data = DB::table('admin_users')->leftJoin('admin_data_users','admin_id','=','data_admin_id')->select('admin_users.*','admin_data_users.admin_level','admin_data_users.admin_status')->where('admin_name','like','%'.$condition2.'%')->paginate(5);
        }else{
            $data = DB::table('admin_users')->leftJoin('admin_data_users','admin_id','=','data_admin_id')->select('admin_users.*','admin_data_users.admin_level','admin_data_users.admin_status')->where([['admin_status',$condition1],['admin_name','like','%'.$condition2.'%']])->paginate(5);
        }


        //  显示到表单
        return view('admin.user.index',['data'=>$data,'condition1'=>$condition1,'condition2'=>$condition2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  返回用户添加页面
        return view('admin.user.add',['title'=>'用户添加']);
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

        $admin_users = new Admin_users;
        $admin_users->admin_name = $request->admin_name;
        $admin_users->admin_password = Crypt::encrypt($request->admin_password);
        $re1 = $admin_users->save();
        if($re1)
        {
            $data = Admin_users::orderBy('admin_id','desc')->first();
            $admin_data_users = new Admin_data_users;
            $admin_data_users->data_admin_id = $data->admin_id;
            $admin_data_users->admin_level = $request->admin_level;
            $admin_data_users->admin_status = $request->admin_status;
            $re2 = $admin_data_users->save();
            if($re2)
            {
                return redirect('admin/user/create')->with('errors','添加成功');
            }else{
                return redirect('admin/user/create')->with('errors','添加详情表失败')->withInput();
            }
        }else{
            return redirect('admin/user/create')->with('errors','添加主表失败')->withInput();
        }

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
        $data = Admin_data_users::where('data_admin_id',$id)->first();
        $data['admin_name'] = Admin_users::where('admin_id',$id)->first()['admin_name'];
//        dd($data['admin_name']);
        return view('admin.user.edit',['data'=>$data]);
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
        $data = $request->except('_token','_method','admin_name');
        $admin_data_user = Admin_data_users::where('data_admin_id',$id)->first();
        $admin_data_user ->admin_status = $data['admin_status'];
        $re = $admin_data_user->save();
        if($re)
        {
            return redirect('admin/user')->with('errors','修改成功');
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
            DB::table('admin_users')->where('admin_id',$id)->delete();
            DB::table('admin_data_users')->where('data_admin_id',$id)->delete();

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
