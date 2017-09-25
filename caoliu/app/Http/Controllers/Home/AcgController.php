<?php

namespace App\Http\Controllers\home;

use App\Http\Model\Data_users;
use App\Http\Model\Web_show_pics;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcgController extends Controller
{

    //首页
    public function index(Request $request){

        $users = Data_users::all();
//        dd($users);

        $show_pic = Web_show_pics::limit(3);

        //session(['nickname'=>'花名尊11']);

        return view('home.index',compact('users','show_pic'));

    }


    //详情页
    public function more(){

        return view('home.more');

    }





    //列表页
    public function lists(Request $request){

        $input =  $request->input('keywords')?$request->input('keywords'):'';

        //$goods=Goods::where('goods_name','like','%'.$input.'%')->get();

        //dd($goods[0]['goods_id']);

        //return view('home.lists',['goods'=>$goods]);

        dd(111);


    }








}



