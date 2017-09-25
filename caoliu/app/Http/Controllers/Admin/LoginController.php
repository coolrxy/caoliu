<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin_data_users;
use App\Http\Model\Admin_users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    //引入登录页面
    public function login(){
        return view('admin.login.login',['title'=>'登录主页']);
    }
    //生成验证码方法
    public function captcha($tmp)
    {
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(123, 203, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 90, $height = 35, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        \Session::flash('code', $phrase);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
    }
    //  执行登录
    public function doLogin(Request $request)
    {
        //  做表单验证
        $this->validate($request,[
            'admin_name'=>'required|min:4|max:18',
            'admin_password'=>'required',
            'code'=>'required',
        ],[
            'admin_name.required'=>'用户名不能为空',
            'admin_name.min'=>'用户名不能少于4位',
            'admin_name.max'=>'用户名不能大于18位',
            'admin_password.required'=>'密码不能为空',
            'code.required'=>'验证码不能为空',
        ]);

        //  接收数据
        $data = $request->except('_token');

        if($data['code']!=session('code'))
        {
            return back()->with('errors','验证码错误')->withInput();
        }
        $user = Admin_users::where('admin_name',$data['admin_name'])->first();
        $data_user = Admin_users::find($user['admin_id'])->admin_data_users;

        if(!$user){
            return back()->with('errors','无此用户，请先注册')->withInput();
        }

//        $a = Crypt::encrypt(1234567890);
//        echo $a;
        if(Crypt::decrypt($user->admin_password) != $data['admin_password'])
        {
            return back()->with('errors','密码错误')->withInput();
        }

        session(['user'=>$user['admin_name']]);
        session(['user_level'=>$data_user['admin_level']]);
        session(['user_status'=>$data_user['admin_status']]);

        return redirect('/admin/index');

    }

    public function loginout(Request $request)
    {
        $request->session()->flush();
        return redirect('/admin/login');
    }

    public function pass()
    {
        return view('admin.login.repwd');
    }

    public function doPass(Request $request)
    {
//        $data = $request->all();

        //  表单验证
        $this->validate($request,[
            'admin_name'=>'required|min:4|max:18',
            'admin_password'=>'required|min:6|max:18',
            'newpassword'=>'required|different:admin_password',
        ],[
            'admin_name.required'=>'用户名不能为空',
            'admin_name.min'=>'用户名不能少于4位',
            'admin_name.max'=>'用户名不能大于18位',
            'admin_password.required'=>'旧密码不能为空',
            'admin_password.min'=>'密码不能少于6位',
            'admin_password.max'=>'密码不能大于18位',
            'newpassword.required'=>'新密码不能为空',
            'newpassword.different'=>'新旧密码相同',
        ]);
        $data = $request->except('_token');
        $user = Admin_users::where('admin_name',$data['admin_name'])->first();
        if(!$user){
            return back()->with('errors','无此用户，请先注册')->withInput();
        }
        if(Crypt::decrypt($user->admin_password) != $data['admin_password'])
        {
            return back()->with('errors','密码错误')->withInput();
        }
        $user->admin_password=Crypt::encrypt($data['newpassword']);
        $re = $user->save();

        if($re)
        {
            return back()->with('errors','修改成功');
        }else{
            return back()->with('errors','修改失败')->withInput();
        }
    }
}
