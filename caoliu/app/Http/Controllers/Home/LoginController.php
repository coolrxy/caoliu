<?php

namespace App\Http\Controllers\Home;


use App\Http\Model\Home_users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('home.login.login');
    }

    //  后台登录执行界面
    public function dologin(Request $request)
    {
        ;
        // 1 接收表单提交的数据
        $input = $request->except('_token');

        $rule = [
            "users_name" => "required|between:6,18",
            "users_password" => "required|between:6,18",
        ];

        $msg = [
            "users_name.required" => "用户名必须输入",
            "users_name.between" => "用户名必须在6-18位",
            "users_password.required" => "密码必须输入",
            "users_password.between" => "密码必须在6-18位",           ];

        $validator = Validator::make($input, $rule, $msg);

        // 如果验证失败
        if($validator->fails()){
            return redirect('home/login')
                ->withErrors($validator)
                ->withInput();
        }

        // 3 做逻辑处理 用户名 密码 验证码
        $res =Home_users::where('users_name', $input['users_name'])->first();
        if(!$res){
            return back()->with('errors', '无此用户,请先去注册');
        }

        // 判断密码是否正确
        if(Crypt::decrypt($res->users_password) != $input['users_password']){
            return back()->with('errors', '密码错误');
        }

        session(['homeUser'=>$res]);

        return redirect('/home/index')->with(['info'=>'登陆成功']);
//        if( Auth::attempt(array('users_name' => $input['users_name'], 'users_password' => $input['users_password']),$input['remember'])) {
//            session(['homeUser'=>$res]);
//            return redirect('/home/index')->with(['info'=>'登陆成功']);
//        }else{
//
//            return Redirect::back()->with('errors',$validator)->withInput();;
//        }

    }

    public function loginout(Request $request)
    {
        $request->session()->flush();
        return redirect('/home/index');
    }



}
