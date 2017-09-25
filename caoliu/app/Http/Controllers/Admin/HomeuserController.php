<?php

namespace App\Http\Controllers\Admin;


use App\User;
use App\Http\Model\Home_users;
use App\Http\Model\Data_users;
use App\Http\Model\data_users_evaluates;
use App\Http\Model\web_show_pics;




use Illuminate\Database\Eloquent\Model;



use function foo\func;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class HomeuserController extends Controller
{


    //浏览
    public function index(Request $request)
    {


        //搜索的关键字
        $input =  $request->input('keywords')?$request->input('keywords'):'';

        $data = DB::table('home_users')->leftJoin('data_users','home_users.users_id','=','data_users.users_id')->select('home_users.*','data_users.users_nickname','data_users.users_pic')->where('users_name','like','%'.$input.'%')->paginate(5);

        return view('admin.homeuser.index',compact('data'));


    }


    //修改
    public function edit($id)
    {

        $data = DB::table('home_users')->join('data_users', 'home_users.users_id', '=', 'data_users.users_id')->select('home_users.*','data_users.*')->where('home_users.users_id',$id)->first();

        return view('admin.homeuser.edit',compact('data'));


    }

    //更新
    public function doedit(Request $request, $id)
    {

        //获取数据
        $datas = $request->except('_token');


        //执行两表更新
        $users = DB::table('home_users')->join('data_users', 'home_users.users_id', '=', 'data_users.users_id')->where('home_users.users_id',$id)->update(['home_users.users_name' => $datas['users_name'],'data_users.users_nickname' => $datas['users_nickname'],'data_users.users_pic' => $datas['users_pic']]);


        //返回列表页的数据
        $data = DB::table('home_users')->leftJoin('data_users','home_users.users_id','=','data_users.users_id')->select('home_users.*','data_users.users_nickname','data_users.users_pic')->paginate(5);


        return back()->with('errors','成功！');

    }



    //个人全部信息
    public function my(Request $request, $id)
    {

        //用户详情
        $data = DB::table('home_users')->leftJoin('data_users','home_users.users_id','=','data_users.users_id')->select('home_users.*','data_users.*')->where('home_users.users_id',$id)->get();

        //用户收货地址
        $address = DB::table('data_users_address')->select('data_users_address.*')->where('users_id',$id)->get();

        //用户评论表
        $evaluate = DB::table('data_users_evaluates')->leftJoin('home_users','data_users_evaluates.evaluate_embracer_id','=','home_users.users_id')->select('data_users_evaluates.*','home_users.users_name')->where('data_users_evaluates.evaluate_sender_id',$id)->paginate(5);

        return view('admin.homeuser.my',compact('data','address','evaluate'));

    }

    //用户信誉度的Ajax修改
    public function changeOrder()
    {

        $input = Input::except('_token');

        //input['cate_id'] 要修改的那条记录的id  input['cate_order'] 要修改成的排序值
        $datas = Data_users::find($input['users_id']);

        $datas->users_credit = $input['users_credit'];

        $re = $datas ->save();


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



    //用户积极分的Ajax修改
    public function ajax_users_integra()
    {

        $input = Input::except('_token');

        $datas = Data_users::find($input['users_id']);

        $datas->users_integra = $input['users_integra'];

        $re = $datas ->save();

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



    //用户评论删除
    public function evaluates_delete($id)
    {

        $evaluates = data_users_evaluates::find($id);

        $re = $evaluates->delete();

        if($re){
            return back()->with('errors','修改成功！');
        }else{
            return back()->with('errors','修改失败！');
        }

    }




    //Ajax用户头像修改
    public function users_edit_pic()
    {

        //获取上传的文件对象
        $file = Input::file('file_upload');

        //判断文件是否有效
        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(public_path().'/uploads',$newName);
            $filepath = '/uploads/'.$newName;

            return  $filepath;

        }

    }











    //轮播图展示页面
    public function homeweb()
    {

        $data = Web_show_pics::all();


        return view('admin.web.index',compact('data'));


    }
    //轮播图修改页面
    public function web_show_pic_edit($id)
    {


        $data = Web_show_pics::find($id);

        return view('admin.web.edit',compact('data'));


    }

    //Ajax轮播图执行修改
    public function web_show_pic_doedit($id)
    {


        //获取上传的文件对象
        $file = Input::file('file_upload');


        //判断文件是否有效
        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(public_path().'/uploads',$newName);
            $filepath = '/uploads/'.$newName;
            //返回文件的路径

            return  $filepath;


        }

    }


    //更新轮播图全部信息
    public function web_show_pic_update(Request $request, $id)
    {

        //获取数据
        $datas = $request->except('_token','file_upload');

        $data = DB::table('web_show_pics')->where('id',$id)->update(['title' => $datas['title'],'content' => $datas['content'],'pic' => $datas['pic']]);

        return back()->with('errors','成功！');

    }







}
