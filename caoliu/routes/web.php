<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.login.login');
});


Route::get('/admin/login','Admin\LoginController@login');
Route::get('/code/captcha/{tmp}','Admin\LoginController@captcha');

//  登录处理逻辑对应的路由
Route::post('admin/dologin','Admin\LoginController@doLogin');

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'Login'],function (){
    Route::get('index','IndexController@index');
    Route::get('loginout','LoginController@loginout');
    Route::get('pass','LoginController@pass');
    Route::post('dopass','LoginController@doPass');

    //  管理员模块
    Route::resource('user','UserController');

    //  商品模块
    Route::resource('goodsType','GoodsTypeController');
    Route::resource('goods','GoodsController');

    Route::get('goods/show/{id}','GoodsController@show');




    //  商品模块
    Route::resource('goodsType','GoodsTypeController');

    //用户列表
    Route::get('homeuser','HomeuserController@index');
    //修改
    Route::get('homeuser_edit/{id}','HomeuserController@edit');
    //执行更新
    Route::post('homeuser_doedit/{id}','HomeuserController@doedit');
    //更详细的个人信息页
    Route::get('homeuser_my/{id}','HomeuserController@my');
    //删除用户的评价
    Route::get('evaluates_delete/{id}','HomeuserController@evaluates_delete');

    //ajax修改users_credit
    Route::post('homeuser_ajax','HomeuserController@changeOrder');
    //ajax修改users_integra
    Route::post('homeuser_ajax_users_integra','HomeuserController@ajax_users_integra');
    //ajax修改图片
    Route::post('homeuser_users_edit_pic','HomeuserController@users_edit_pic');

    //轮播图
    Route::get('homeweb','HomeuserController@homeweb');
//跳向轮播图修改页面
    Route::get('web_show_pic_edit/{id}','HomeuserController@web_show_pic_edit');
//轮播图信息修改操作
    Route::post('web_show_pic_update/{id}','HomeuserController@web_show_pic_update');

});

//  前台登录处理逻辑对应路由
Route::get('/home/login','Home\LoginController@login');
Route::post('home/dologin', 'Home\LoginController@dologin');
Route::get('home/index','Home\AcgController@index');
Route::group(['prefix'=>'home','namespace'=>'Home','middleware'=>'HomeLogin'],function (){

    Route::get('loginout','LoginController@loginout');
    //  前台用户控制器
    Route::resource('userAccount','UserController');

    //  修改密码
    Route::post('dopass/{id}','UserController@dopass');

    //  上传头像
    Route::post('upload','UserController@upload');


    //goods页面

    Route::resource('goods','GoodsController');

    Route::post('/test','GoodsController@uploads');

});
//详情页
Route::get('home/more', 'Home\AcgController@more');

//列表页
Route::get('home/lists', 'Home\AcgController@lists');

//取消发布商品
Route::get('home/good_es/{id}','Home\GoodsController@esc');

//前台用户修改自己发布商品的价格
Route::post('home/goods/changeorder','Home\GoodsController@changeorder');
//物流单号
Route::post('home/goods/seed','Home\GoodsController@seed');