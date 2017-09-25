<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Data_users;
use App\Http\Model\Home_users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home.my.page_user');
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
        $input = $request->except('_token');
//        dd($input['users_id']);
        $rule = [
            'users_pic'=>'required',
        ];
        $msg = [
            'users_pic.required'=>'图片必须上传',
        ];

        $user = Data_users::find($input['users_id'])->first();
        //if()
        $user->users_pic = $input['users_pic'];
        $re=$user->save();

        //        如果修改成功
        if($re){
//           跳转到列表页
            return back()->with('errors','修改成功');
        }else {
            return back()->with('errors', '修改失败');
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
        //
        //
        $data = Home_users::find($id)->with('data_users')->get();
//        dd($data);
        return view('home.my.page_account',['data'=>$data]);
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
        $input = $request->except('_token','_method');
        //dd($input);
        $user = Data_users::find($id)->first();
        //if()
        $user->users_phone = $input['users_phone'];
        $user->users_nickname = $input['users_nickname'];
        $re=$user->save();
//

////        如果修改成功
        if($re){
////            跳转到列表页
            return back()->with('errors','修改成功');
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
    }
    public function doPass(Request $request, $id){
        //1.接受前台传过来的数据
        $input=$request->all();

        $rule = [
            'users_oldpassword'=>'required|between:5,18',
            'users_passsword'=>'required|between:5,18',
            'users_password'=>'required|same:users_passsword',
        ];
        $msg = [
            'users_oldpassword.required'=>'原密码必须输入',
            'users_oldpassword.between'=>'原密码必须在5-18位',
            'users_passsword.required'=>'新密码必须输入',
            'users_passsword.between'=>'密码必须在5-18位',
            'users_password.required'=>'确认密码必须输入',
            'users_password.same'=>'确认密码必须跟新密码一致',
        ];

        $validator = Validator::make($input, $rule,$msg);
        //如果验证失败

        if ($validator->fails())
            return redirect('home/userAccount/'.$id.'/edit#tab_1_3')
                ->withErrors($validator)
                ->withInput();


//        3 验证原密码是否正确
        $pass = $request->session()->get('homeUser')->users_password;
        if($input['users_oldpassword'] !=  Crypt::decrypt($pass)){
            return back()->with('errors','原密码输入错误');
        }
       // dd($pass['users_password']);
//        4
        $pass = Home_users::find($id);
        $pass->users_password= Crypt::encrypt($input['users_passsword']);
        $re = $pass->save();

//        5 跳转到密码修改页面
        if($re){
            return back()->with('errors','修改成功！');
        }else{
            return back()->with('errors','修改失败！');
        }

//
    }
    public function upload()
    {
        //获取上传的文件对象
        $file = Input::file('file_upload');
        //dd($file);
        //判断文件是否有效
        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(base_path().'/public/uploads/users',$newName);
            $filepath = 'uploads/users/'.$newName;
            //返回文件的路径
            return  $filepath;
        }
    }
}
