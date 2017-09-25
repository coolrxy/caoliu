@extends('layout')

@section('header')
    @parent
@endsection
@section('content')



    <link href="/home_template/my/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/home_template/my/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/home_template/my/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/home_template/my/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="/home_template/my/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <link href="/home_template/my/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/home_template/my/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />

    <link href="/home_template/my/assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />

    <link href="/home_template/my/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/home_template/my/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/home_template/my/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />


    <script src="/home_template/my/assets/liandong/jquery-1.7.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/liandong/Area.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/liandong/AreaData_min.js" type="text/javascript"></script>


    <section id="container"  style="margin:0px;">
        <div class="row">
            <div class="col-md-2" style="margin:0px;">
                <div class="page-sidebar navbar-collapse collapse" style="height:965px;">

                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="20" style="padding-top:20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="sidebar-search-wrapper">

                            <div class="profile-usertitle" style="margin-top:5px;">
                                <div class="profile-usertitle-name">欢迎您!   小美女  </div>

                            </div>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
                        <li class="nav-item start active">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i><i class="fa fa-optin-monster"></i>
                                <span class="title">欢迎来到个人中心</span>
                                <span class="selected"></span>
                                <span class="arrow"></span>
                            </a>

                        </li>
                        <li class="heading">
                            <h3 class="uppercase">我的草榴</h3>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('home/my/page_user')}}" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">我的草榴</span>
                                <span class="arrow"></span>
                            </a>
                        </li>



                        <li class="heading">
                            <h3 class="uppercase">订单中心</h3>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('home/goods/create')}}" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">发布商品</span>
                                <span class="arrow"></span>
                            </a>

                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('home/my/page_buy')}}" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">我的订单</span>
                                <span class="arrow"></span>
                            </a>

                        </li>

                        <li class="nav-item  ">
                            <a href="{{url('home/goods')}}" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">我的闲置</span>
                                <span class="arrow"></span>
                            </a>

                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('home/my/page_buy')}}" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">我的闲置</span>
                                <span class="arrow"></span>
                            </a>

                        </li>
                        <li class="heading">
                            <h3 class="uppercase">评价管理</h3>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">我的评价</span>
                                <span class="arrow"></span>
                            </a>

                        </li>
                        <li class="nav-item  ">

                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">我的信用</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                        <li class="heading">
                            <h3 class="uppercase">详情设置</h3>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">个人详情</span>
                                <span class="arrow"></span>
                            </a>

                        </li>
                        <li class="nav-item  ">

                            <a href="{{url('home/my/page_account')}}" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">修改信息</span>
                                <span class="arrow"></span>
                            </a>
                        </li>

                        <li class="heading">
                            <h3 class="uppercase">帮助关于</h3>
                        </li>

                        <li class="nav-item  ">

                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">关于信誉</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">

                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">关于信誉</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">

                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">您的意见</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">

                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">关于我们</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>

            </div>
            <div class="col-md-10" style="padding:0px; ">
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content" style="margin:0px; padding:0px;">

                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>User</span>
                            </li>
                        </ul>

                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"><a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-stumbleupon tooltips" data-original-title="Stumbleupon" aria-describedby="tooltip748815"></a>修改您的信息
                        <small></small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row" >
                        <div class="col-md-12" style="height: 670px; margin:0px;">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet ">
                                    <!-- SIDEBAR USERPIC -->

                                        @if(!empty($data[0]->users_pic))
                                        <div class="profile-userpic"><img src="/home_template/my/timg/1.jpg" class="img-responsive" alt=""> </div>
                                        @endif
                                        @if(empty($data[0]->users_pic))
                                        <div class="profile-userpic"><img src="{{ '/'.$data[0]['data_users']->users_pic}}" class="img-responsive" alt=""> </div>
                                        @endif
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> 欢迎您!   {{$data[0]->users_name}}  </div>
                                        <div class="profile-usertitle-job"> 草榴会员 </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class="profile-userbuttons">
                                        <button type="button" class="btn btn-circle green btn-sm">关注</button>
                                        <button type="button" class="btn btn-circle red btn-sm">私信</button>
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li class="active">
                                                <a href="">
                                                    <i class="icon-home"></i> 修改您的个人信息 </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                <div class="portlet light ">
                                    <!-- STAT -->
                                    <div class="row list-separated profile-stat">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 37 </div>
                                            <div class="uppercase profile-stat-text"> 消息 </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 51 </div>
                                            <div class="uppercase profile-stat-text"> 购物 </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 61 </div>
                                            <div class="uppercase profile-stat-text"> 待评价 </div>
                                        </div>
                                    </div>
                                    <!-- END STAT -->
                                    <div>
                                        <h4 class="profile-desc-title">我的联系方式</h4>

                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-globe"></i>
                                            <a href="http://www.keenthemes.com">www.草榴.com</a>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-twitter"></i>
                                            <a href="http://www.twitter.com/keenthemes/">11823135@qq.com</a>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-facebook"></i>
                                            <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET MAIN -->

                                <!-- PORTLET MAIN -->

                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">用户资料详情</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">个人信息</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab">修改头像</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_3" data-toggle="tab">更改密码</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_5" data-toggle="tab">收货地址</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_4" data-toggle="tab">隐私设置</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->

                                                    <div class="tab-pane active" id="tab_1_1">

                                                        <form role="form" method="POST"  action="{{url('home/userAccount/'. $data[0]->users_id)}}">
                                                            <input type="hidden" name="_method" value="put">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label class="control-label">您的昵称</label>
                                                                <input type="text" placeholder="{{ $data[0]['data_users']->users_nickname }} " value="{{ $data[0]['data_users']->users_nickname }} " name="users_nickname"   class="form-control"></div>
                                                            <div class="form-group">
                                                                <label class="control-label">您的性别</label><br>

                                                                <select id="growl_align" class="form-control input-small input-inline">
                                                                    <option value="left"><font><font>男</font></font></option>
                                                                    <option value="right"><font><font>女</font></font></option>
                                                                </select>
                                                            </div>
                                                            {{--@foreach ($data as $v)--}}
                                                             <div class="form-group">
                                                                <label class="control-label">联系邮箱</label>
                                                                <input type="text" name="users_email"  placeholder="{{ $data[0]['data_users']->users_email }}" value=" {{ $data[0]['data_users']->users_email }} " class="form-control"> </div>
                                                            {{--@endforeach--}}
                                                            <div class="form-group">
                                                                <label class="control-label">微博账号</label>
                                                                <input type="text"  class="form-control"> </div>

                                                            <div class="form-group">
                                                                <label class="control-label">您的电话</label>
                                                                <input type="text"  name="users_phone"  value="{{ $data[0]->users_phone }}" class="form-control"> </div>

                                                            <div class="form-group">
                                                                <label class="control-label">个人简介</label>
                                                                <textarea class="form-control" rows="3" placeholder="说点什么吧!!!"></textarea>
                                                            </div>

                                                            <div class="margiv-top-10">
                                                                <button   data-toggle="modal" >保存更改</button>

                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <p> 一个好的头像可以是您更加受关注.但是请注意,不要上传暴力,广告,性暗示头像. </p>
                                                        <form action="{{url('home/userAccount')}}" method="post" id="art_form" role="form" enctype="multipart/form-data">
                                                            {{csrf_field()}}

                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                    <div>
                                                                        <input type="hidden" id="art_thumb" value="" name="users_pic">
                                                                        <input type="hidden" id="users_id" value="{{ $data[0]->users_id }}" name="users_id">
                                                                        <span class="fileinput-new"> 选择图片 </span>
                                                                        <span class="fileinput-exists"> 选择图片 </span>
                                                                        <input type="file" id="file_upload" name="file_upload" multiple="true">

                                                                    </div>
                                                                </div>
                                                                <div class="clearfix margin-top-10">
                                                                    <span class="label label-danger">注意! </span>
                                                                    <span>您上传的图片大小不得超过3MB! </span>
                                                                </div>

                                                            <div class="margin-top-10">
                                                                <input type="submit" value="提交">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_3">

                                                        <form method="post"  action="{{url('home/dopass/'. $data[0]->users_id)}}">
                                                            {{ csrf_field()}}
                                                            <div class="form-group">
                                                                @if (count($errors) > 0)
                                                                <div class="mark">
                                                                <ul>
                                                                @if(is_object($errors))
                                                                @foreach ($errors->all() as $error)
                                                                <li style="color:red">{{ $error }}</li>
                                                                @endforeach
                                                                @else
                                                                <li style="color:red">{{ $errors }}</li>
                                                                @endif
                                                                </ul>
                                                                </div>
                                                                @endif
                                                                <label class="control-label">原密码</label>
                                                                <input  name="users_oldpassword"  type="password" class="form-control"> </div>
                                                            <div class="form-group">
                                                                <label  class="control-label">新的密码</label>
                                                                <input type="password"  name="users_passsword" class="form-control"> </div>
                                                            <div class="form-group">
                                                                <label  class="control-label">重复新的密码</label>
                                                                <input type="password" name="users_password"  class="form-control"> </div>
                                                            <div class="margin-top-10">


                                                                <input type="submit" value="提交">
                                                                <input type="button" class="back" onclick="history.go(-1)" value="返回">

                                                                <button  style="display:none;" id="cfl" class="" data-toggle="modal" data-target="#myModal"></button>
                                                            </div>

                                                        </form>
                                                    </div>




























                                                    {{--@if (count($errors) > 0)--}}

                                                        {{--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
                                                            {{--<div class="modal-dialog">--}}
                                                                {{--<div class="modal-content">--}}
                                                                    {{--<div class="modal-header">--}}
                                                                        {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                                                                        {{--<h4 class="modal-title" id="myModalLabel">草榴二手交易网提示:</h4>--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="modal-body">--}}
                                                                        {{--@if (count($errors) > 0)--}}
                                                                            {{--<div class="mark">--}}
                                                                                {{--<ul>--}}
                                                                                    {{--@if(is_object($errors))--}}
                                                                                        {{--@foreach ($errors->all() as $error)--}}
                                                                                            {{--<li style="color:red">{{ $error }}</li>--}}
                                                                                        {{--@endforeach--}}
                                                                                    {{--@else--}}
                                                                                        {{--<li style="color:red">{{ $errors }}</li>--}}
                                                                                    {{--@endif--}}
                                                                                {{--</ul>--}}
                                                                            {{--</div>--}}
                                                                        {{--@endif--}}

                                                                        {{--按下 ESC 按钮退出。</div>--}}
                                                                    {{--<div class="modal-footer">--}}
                                                                        {{--<a href="/home/userAccount/{{$data[0]->users_id}}/edit#table_1_3'"> <button type="button" class="btn btn-primary" data-dismiss="modal">我知道了</button></a>--}}
                                                                    {{--</div>--}}
                                                                {{--</div><!-- /.modal-content -->--}}
                                                            {{--</div><!-- /.modal-dialog -->--}}
                                                        {{--</div>--}}
                                                   {{--@endif--}}
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_5">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab_1_11">
                                                                <div class="portlet-body">

                                                                    <table class="table table-striped table-bordered table-advance table-hover">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>
                                                                                <i class="fa fa-briefcase"></i><font><font> 收货人姓名 </font></font></th>
                                                                            <th class="hidden-xs">
                                                                                <i class="fa fa-question"></i><font><font> 电话 </font></font></th>
                                                                            <th>
                                                                                <i class="fa fa-bookmark"></i><font><font> 地址 </font></font></th>
                                                                            <th>
                                                                            </th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                        <tr>
                                                                            <td>
                                                                                <a href="javascript:;"><font><font> Pixel有限公司 </font></font></a>
                                                                            </td>
                                                                            <td class="hidden-xs"><font><font> 服务器硬件购买 </font></font></td>
                                                                            <td><font><font>52560.10 $
                                                                                    </font></font><span class="label label-success label-sm"><font><font>已是默认</font></font></span>
                                                                            </td>
                                                                            <td>
                                                                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"><font><font> 设为默认 </font></font></a>
                                                                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"><font><font> 修改地址 </font></font></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="javascript:;"><font><font> 智慧之家 </font></font></a>
                                                                            </td>
                                                                            <td class="hidden-xs"><font><font> 办公家具采购 </font></font></td>
                                                                            <td><font><font>啊啊啊啊啊啊啊啊啊啊啊啊啊</td>
                                                                            <td>
                                                                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"><font><font> 设为默认 </font></font></a>
                                                                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"><font><font> 修改地址 </font></font></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="javascript:;"><font><font> FoodMaster有限公司 </font></font></a>
                                                                            </td>
                                                                            <td class="hidden-xs"><font><font> 公司晚餐餐饮 </font></font></td>
                                                                            <td><font><font>1啊宿舍所所所所所所所所所所所所所所所所所所所所所
                                                                            </td>
                                                                            <td>
                                                                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"><font><font> 设为默认 </font></font></a>
                                                                                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"><font><font> 修改地址 </font></font></a>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="portlet light form-fit bordered">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="icon-social-dribbble font-green"></i>
                                                                    <span class="caption-subject font-green bold uppercase"><font><font>添加新的地址</font></font></span>
                                                                </div>

                                                            </div>
                                                            <div class="portlet-body form">
                                                                <!-- BEGIN FORM-->

                                                                    <div class="form-body">
                                                                        <div class="form-actions" style="padding:0px;">
                                                                            <div class="row">
                                                                                <form method="post" action="{{url('home/userAccount')}}" class="form-horizontal">
                                                                                    {{ csrf_field() }}
                                                                                    <div class="form-body">
                                                                                        <div class="form-group">
                                                                                            <label class="col-md-2 control-label"><font><font>收货姓名</font></font></label>
                                                                                            <div class="col-md-4">
                                                                                                <input type="text" name="addres_name"  class="form-control" placeholder="请输入收货人姓名">
                                                                                            </div>
                                                                                            <label class="col-md-2 control-label"><font><font>手机号码</font></font></label>
                                                                                            <div class="col-md-4">
                                                                                                <input type="text" name="addres_phone"  class="form-control" placeholder="请输入手机号码">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="col-md-2 control-label"><font><font>收货地址</font></font></label>
                                                                                            <div class="col-md-10">
                                                                                                <div width:400px;>
                                                                                                    <select id="seachprov" name="addres_province" onChange="changeComplexProvince(this.value, sub_array, 'seachcity', 'seachdistrict');"></select>&nbsp;&nbsp;
                                                                                                    <select id="seachcity" name="addres_city" onChange="changeCity(this.value,'seachdistrict','seachdistrict');"></select>&nbsp;&nbsp;
                                                                                                    <span id="seachdistrict_div"><select id="seachdistrict" name="addres_town"></select></span>
                                                                                                </div>
                                                                                            </div>
                                                                                            </div>
                                                                                            <label class="col-md-2 control-label"><font><font>详细地址</font></font></label>
                                                                                            <div class="col-md-7">
                                                                                                <textarea class="form-control" name="addres_details" rows="3"></textarea>
                                                                                            </div>
                                                                                        <div class="form-group">

                                                                                            <div class="col-md-3 " style="margin-left:350px; margin-top:10px;">
                                                                                                <input type="submit" onClick="showAreaID()"  value="提交保存" />

                                                                                            </div>

                                                                                        </div>

                                                                                    </div>

                                                                                </form>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- PRIVACY SETTINGS TAB -->
                                                    <div class="tab-pane" id="tab_1_4">
                                                        <form action="#">
                                                            <table class="table table-light table-hover">
                                                                <tbody><tr>
                                                                    <td> 允许您的好友查看您的个人信息(包括邮箱,微博ID,手机号码) </td>
                                                                    <td>
                                                                        <div class="mt-radio-inline">
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios1" value="option1"> 允许
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios1" value="option2" checked="">禁止
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 允许网站收集您的浏览信息,为您推荐您或许喜欢的商品 </td>
                                                                    <td>
                                                                        <div class="mt-radio-inline">
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios11" value="option1"> 允许
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios11" value="option2" checked=""> 禁止
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 允许陌生人向我发送私信消息 </td>
                                                                    <td>
                                                                        <div class="mt-radio-inline">
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios21" value="option1"> 允许
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios21" value="option2" checked=""> 禁止
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>允许网站管理员向您发送网站公告与站内信息</td>
                                                                    <td>
                                                                        <div class="mt-radio-inline">
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios31" value="option1"> Yes
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="mt-radio">
                                                                                <input type="radio" name="optionsRadios31" value="option2" checked=""> No
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody></table>
                                                            <!--end profile-settings-->

                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn red"> 保存设置</a>
                                                                <a href="javascript:;" class="btn default"> 取消 </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PRIVACY SETTINGS TAB -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                </div>
    </section>
    </div>
    </div>

    <script type="text/javascript">



        $(function () {
            $("#file_upload").change(function () {
                uploadImage();
            })
        });
        function uploadImage() {
//  判断是否有选择上传文件
            var imgPath = $("#file_upload").val();
            console.log(imgPath);
            if (imgPath == "") {
                alert("请选择上传图片！");
                return;
            }
            //判断上传文件的后缀名
            var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
            if (strExtension != 'jpg' && strExtension != 'gif'
                && strExtension != 'png' && strExtension != 'bmp') {
                alert("请选择图片文件");
                return;
            }
            var formData = new FormData($('#art_form')[0]);
            $.ajax({
                type: "POST",
                url: "/home/upload",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {

                    $('#img1').attr('src','/'+data);
                    $('#art_thumb').val(data);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("上传失败，请检查网络后重试");
                }
            });
        }







        $(function (){
            initComplexArea('seachprov', 'seachcity', 'seachdistrict', area_array, sub_array, '44', '0', '0');
        });

        //得到地区码
        function getAreaID(){
            var area = 0;
            if($("#seachdistrict").val() != "0"){
                area = $("#seachdistrict").val();
            }else if ($("#seachcity").val() != "0"){
                area = $("#seachcity").val();
            }else{
                area = $("#seachprov").val();
            }
            return area;
        }

        function showAreaID() {
            //地区码
            var areaID = getAreaID();
            //地区名
            var areaName = getAreaNamebyID(areaID) ;
            alert("您选择的地区码：" + areaID + "      地区名：" + areaName);
        }

        //根据地区码查询地区名
        function getAreaNamebyID(areaID){
            var areaName = "";
            if(areaID.length == 2){
                areaName = area_array[areaID];
            }else if(areaID.length == 4){
                var index1 = areaID.substring(0, 2);
                areaName = area_array[index1] + " " + sub_array[index1][areaID];
            }else if(areaID.length == 6){
                var index1 = areaID.substring(0, 2);
                var index2 = areaID.substring(0, 4);
                areaName = area_array[index1] + " " + sub_array[index1][index2] + " " + sub_arr[index2][areaID];
            }
            return areaName;
        }

//        $(function() {
//            $('#myModal').modal({
//                keyboard: true
//            })
        });


    </script>

    <!-- BEGIN CORE PLUGINS -->
    <script src="/home_template/my/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/pages/scripts/profile.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/pages/scripts/timeline.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
@endsection
