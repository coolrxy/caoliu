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

    <section id="container"  style="margin:0px;">
        <div class="row">
            <div class="col-md-2">
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

                            <a href="{{url('home/userAccount/'.(session()->get('homeUser'))['users_id'].'/edit')}}" class="nav-link nav-toggle">
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
            <div class="col-md-10" style="background-color:#F1F1F1;">
                <div class="page-content-wrapper" style="height:965px; ">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="p1age-content" >

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
                        <h3 class="page-title"> <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-persona tooltips" data-original-title="Persona"></a>个人信息详情
                            <small></small>
                        </h3>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-121">
                                <!-- BEGIN PROFILE SIDEBAR -->
                                <div class="profile-sidebar">
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light profile-sidebar-portlet ">
                                        <!-- SIDEBAR USERPIC -->
                                        <div class="profile-userpic">
                                            <img src="/home_template/images/44.jpg" class="img-responsive" alt=""> </div>
                                        <!-- END SIDEBAR USERPIC -->
                                        <!-- SIDEBAR USER TITLE -->
                                        <div class="profile-usertitle" style="margin-top:36px;">
                                            <div class="profile-usertitle-name"> 欢迎您!   小美女  </div>
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
                                                        <i class="icon-home"></i> 个人信息详情 </a>
                                                </li>

                                            </ul>
                                            <ul class="nav">
                                                <li class="active">
                                                    <a href="">
                                                        <i class="icon-home"></i> 个人信息详情 </a>
                                                </li>

                                            </ul>

                                        </div>

                                        <!-- END MENU -->
                                    </div>
                                    <!-- END PORTLET MAIN -->
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light " >
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
                                        <div style="margin-top:28px;">
                                            <h4 class="profile-desc-title">我的联系方式</h4>
                                            <span class="profile-desc-text"> 您的信息不会泄露,只有经过您允许的好友才可以看到此信息 只有经过您允许的好友才可以看到此信息只有经过您允许的好友才可以看到此信息</span>
                                            <div class="margin-top-20 profile-desc-link">
                                                <i class="fa fa-globe"></i>
                                                <a href="http://www.keenthemes.com" >www.草榴.com</a>
                                            </div>
                                            <div class="margin-top-20 profile-desc-link">
                                                <i class="fa fa-twitter"></i>
                                                <a href="http://www.twitter.com/keenthemes/">11823135@qq.com</a>
                                            </div>
                                            <div class="margin-top-20 profile-desc-link">
                                                <i class="fa fa-facebook"></i>
                                                <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                                            </div>
                                            <div class="margin-top-20 profile-desc-link">
                                                <i class="fa fa-facebook"></i>
                                                <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END PORTLET MAIN -->
                                </div>
                                <!-- END BEGIN PROFILE SIDEBAR -->
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- BEGIN PORTLET -->
                                            <div class="portlet light ">
                                                <div class="portlet-title">
                                                    <div class="caption caption-md">
                                                        <i class="icon-bar-chart theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">您的近期活动</span>
                                                        <span class="caption-helper hide">weekly stats...</span>
                                                    </div>
                                                    <div class="actions">
                                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                            <label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
                                                                <input type="radio" name="options" class="toggle" id="option1">今天</label>
                                                            <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                                                <input type="radio" name="options" class="toggle" id="option2">本周</label>
                                                            <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                                                <input type="radio" name="options" class="toggle" id="option2">本月</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="row number-stats margin-bottom-30">
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="stat-left">
                                                                <div class="stat-chart">
                                                                    <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                    <div id="sparkline_bar"></div>
                                                                </div>
                                                                <div class="stat-number">
                                                                    <div class="title"> 收入金额 </div>
                                                                    <div class="number"> 2460 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="stat-right">
                                                                <div class="stat-chart">
                                                                    <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                    <div id="sparkline_bar2"></div>
                                                                </div>
                                                                <div class="stat-number">
                                                                    <div class="title"> 支出金额 </div>
                                                                    <div class="number"> 719 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-scrollable table-scrollable-borderless">
                                                        <table class="table table-hover table-light">
                                                            <thead>
                                                            <tr class="uppercase">
                                                                <th colspan="2"> 账户 </th>
                                                                <th> 交易金额 </th>
                                                                <th> 交易状态 </th>
                                                                <th> 时间 </th>
                                                                <th> 评价 </th>
                                                            </tr>
                                                            </thead>
                                                            <tr>
                                                                <td class="fit">
                                                                    <img class="user-pic" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                                                <td>
                                                                    <a href="javascript:;" class="primary-link">京</a>
                                                                </td>
                                                                <td> 111 </td>
                                                                <td> 支出 </td>
                                                                <td> 2017-3-1 </td>
                                                                <td>
                                                                    <span class="bold theme-font">好评</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fit">
                                                                    <img class="user-pic" src="../assets/pages/media/users/avatar5.jpg"> </td>
                                                                <td>
                                                                    <a href="javascript:;" class="primary-link">黑人</a>
                                                                </td>
                                                                <td> 560 </td>
                                                                <td> 支出 </td>
                                                                <td> 2017-3-11 </td>
                                                                <td>
                                                                    <span class="bold theme-font">好评</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fit">
                                                                    <img class="user-pic" src="../assets/pages/media/users/avatar6.jpg"> </td>
                                                                <td>
                                                                    <a href="javascript:;" class="primary-link">贤侄</a>
                                                                </td>
                                                                <td> 1345 </td>
                                                                <td> 收入 </td>
                                                                <td> 2017-6-1 </td>
                                                                <td>
                                                                    <span class="bold theme-font">中评</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fit">
                                                                    <img class="user-pic" src="../assets/pages/media/users/avatar7.jpg"> </td>
                                                                <td>
                                                                    <a href="javascript:;" class="primary-link">老王</a>
                                                                </td>
                                                                <td> 645 </td>
                                                                <td> 收入 </td>
                                                                <td> 2017-7-3 </td>
                                                                <td>
                                                                    <span class="bold theme-font">差评</span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END PORTLET -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- BEGIN PORTLET -->
                                            <div class="portlet light ">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">消息提醒</span>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#tab_1_1" data-toggle="tab"> 系统消息 </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_1_2" data-toggle="tab"> 用户消息 </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="portlet-body">
                                                    <!--BEGIN TABS-->
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab_1_1">
                                                            <div class="scroller" style="height: 320px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                                <ul class="feeds">
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊
                                                                                        <span class="label label-sm label-info"> Take action
                                                                                        <i class="fa fa-share"></i>
                                                                                    </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> Just now </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-sm label-success">
                                                                                            <i class="fa fa-bell-o"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col2">
                                                                                <div class="date"> 20 mins </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-danger">
                                                                                        <i class="fa fa-bolt"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 24 mins </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-info">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 30 mins </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 40 mins </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-warning">
                                                                                        <i class="fa fa-plus"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 1.5 hours </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊
                                                                                        <span class="label label-sm label-default "> Overdue </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 2 hours </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-default">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 3 hours </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-warning">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 5 hours </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-info">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 18 hours </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-default">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 21 hours </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-info">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 22 hours </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-default">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 21 hours </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-info">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 22 hours </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-default">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 21 hours </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-info">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc">啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 22 hours </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-default">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 21 hours </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-info">
                                                                                        <i class="fa fa-bullhorn"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 22 hours </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab_1_2">
                                                            <div class="scroller" style="height: 337px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                                <ul class="feeds">
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-sm label-success">
                                                                                            <i class="fa fa-bell-o"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col2">
                                                                                <div class="date"> Just now </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-sm label-success">
                                                                                            <i class="fa fa-bell-o"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col2">
                                                                                <div class="date"> 10 mins </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-danger">
                                                                                        <i class="fa fa-bolt"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊
                                                                                        <span class="label label-sm label-danger "> Take action
                                                                                        <i class="fa fa-share"></i>
                                                                                    </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 24 mins </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-sm label-success">
                                                                                            <i class="fa fa-bell-o"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col2">
                                                                                <div class="date"> Just now </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-sm label-success">
                                                                                            <i class="fa fa-bell-o"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col2">
                                                                                <div class="date"> Just now </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-sm label-success">
                                                                                            <i class="fa fa-bell-o"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col2">
                                                                                <div class="date"> Just now </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-sm label-success">
                                                                                            <i class="fa fa-bell-o"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col2">
                                                                                <div class="date"> Just now </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-sm label-success">
                                                                                            <i class="fa fa-bell-o"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col2">
                                                                                <div class="date"> Just now </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-sm label-success">
                                                                                            <i class="fa fa-bell-o"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col2">
                                                                                <div class="date"> Just now </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-sm label-success">
                                                                                            <i class="fa fa-bell-o"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc"> 啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊 </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col2">
                                                                                <div class="date"> Just now </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--END TABS-->
                                                </div>
                                            </div>
                                            <!-- END PORTLET -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- BEGIN PORTLET -->
                                            <div class="portlet light ">
                                                <div class="portlet-title">
                                                    <div class="caption caption-md">
                                                        <i class="icon-bar-chart theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Customer Support</span>
                                                        <span class="caption-helper">45 pending</span>
                                                    </div>
                                                    <div class="inputs">
                                                        <div class="portlet-input input-inline input-small ">
                                                            <div class="input-icon right">
                                                                <i class="icon-magnifier"></i>
                                                                <input type="text" class="form-control form-control-solid" placeholder="search..."> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                        <div class="general-item-list">
                                                            <div class="item">
                                                                <div class="item-head">
                                                                    <div class="item-details">
                                                                        <img class="item-pic" src="">
                                                                        <a href="" class="item-name primary-link">Nick Larson</a>
                                                                        <span class="item-label">3 hrs ago</span>
                                                                    </div>
                                                                    <span class="item-status">
                                                                    <span class="badge badge-empty badge-success"></span> Open</span>
                                                                </div>
                                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="item-head">
                                                                    <div class="item-details">
                                                                        <img class="item-pic" src="../assets/pages/media/users/avatar3.jpg">
                                                                        <a href="" class="item-name primary-link">Mark</a>
                                                                        <span class="item-label">5 hrs ago</span>
                                                                    </div>
                                                                    <span class="item-status">
                                                                    <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                                </div>
                                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet. </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="item-head">
                                                                    <div class="item-details">
                                                                        <img class="item-pic" src="">
                                                                        <a href="" class="item-name primary-link">Nick Larson</a>
                                                                        <span class="item-label">8 hrs ago</span>
                                                                    </div>
                                                                    <span class="item-status">
                                                                    <span class="badge badge-empty badge-primary"></span> Closed</span>
                                                                </div>
                                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="item-head">
                                                                    <div class="item-details">
                                                                        <img class="item-pic" src="../assets/pages/media/users/avatar7.jpg">
                                                                        <a href="" class="item-name primary-link">Nick Larson</a>
                                                                        <span class="item-label">12 hrs ago</span>
                                                                    </div>
                                                                    <span class="item-status">
                                                                    <span class="badge badge-empty badge-danger"></span> Pending</span>
                                                                </div>
                                                                <div class="item-body"> Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="item-head">
                                                                    <div class="item-details">
                                                                        <img class="item-pic" src="../assets/pages/media/users/avatar9.jpg">
                                                                        <a href="" class="item-name primary-link">Richard Stone</a>
                                                                        <span class="item-label">2 days ago</span>
                                                                    </div>
                                                                    <span class="item-status">
                                                                    <span class="badge badge-empty badge-danger"></span> Open</span>
                                                                </div>
                                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat. </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="item-head">
                                                                    <div class="item-details">
                                                                        <img class="item-pic" src="../assets/pages/media/users/avatar8.jpg">
                                                                        <a href="" class="item-name primary-link">Dan</a>
                                                                        <span class="item-label">3 days ago</span>
                                                                    </div>
                                                                    <span class="item-status">
                                                                    <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                                </div>
                                                                <div class="item-body"> Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="item-head">
                                                                    <div class="item-details">
                                                                        <img class="item-pic" src="../assets/pages/media/users/avatar2.jpg">
                                                                        <a href="" class="item-name primary-link">Larry</a>
                                                                        <span class="item-label">4 hrs ago</span>
                                                                    </div>
                                                                    <span class="item-status">
                                                                    <span class="badge badge-empty badge-success"></span> Open</span>
                                                                </div>
                                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END PORTLET -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- BEGIN PORTLET -->
                                            <div class="portlet light  tasks-widget">
                                                <div class="portlet-title">
                                                    <div class="caption caption-md">
                                                        <i class="icon-bar-chart theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Tasks</span>
                                                        <span class="caption-helper">16 pending</span>
                                                    </div>
                                                    <div class="inputs">
                                                        <div class="portlet-input input-small input-inline">
                                                            <div class="input-icon right">
                                                                <i class="icon-magnifier"></i>
                                                                <input type="text" class="form-control form-control-solid" placeholder="search..."> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="task-content">
                                                        <div class="scroller" style="height: 282px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                            <!-- START TASK LIST -->
                                                            <ul class="task-list">
                                                                <li>
                                                                    <div class="task-checkbox">
                                                                        <input type="hidden" value="1" name="test" />
                                                                        <input type="checkbox" class="liChild" value="2" name="test" /> </div>
                                                                    <div class="task-title">
                                                                        <span class="task-title-sp"> Present 2013 Year IPO Statistics at Board Meeting </span>
                                                                        <span class="label label-sm label-success">Company</span>
                                                                        <span class="task-bell">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </span>
                                                                    </div>
                                                                    <div class="task-config">
                                                                        <div class="task-config-btn btn-group">
                                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                <i class="fa fa-cog"></i>
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="task-checkbox">
                                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                                    <div class="task-title">
                                                                        <span class="task-title-sp"> Hold An Interview for Marketing Manager Position </span>
                                                                        <span class="label label-sm label-danger">Marketing</span>
                                                                    </div>
                                                                    <div class="task-config">
                                                                        <div class="task-config-btn btn-group">
                                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                <i class="fa fa-cog"></i>
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="task-checkbox">
                                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                                    <div class="task-title">
                                                                        <span class="task-title-sp"> AirAsia Intranet System Project Internal Meeting </span>
                                                                        <span class="label label-sm label-success">AirAsia</span>
                                                                        <span class="task-bell">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </span>
                                                                    </div>
                                                                    <div class="task-config">
                                                                        <div class="task-config-btn btn-group">
                                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                <i class="fa fa-cog"></i>
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="task-checkbox">
                                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                                    <div class="task-title">
                                                                        <span class="task-title-sp"> Technical Management Meeting </span>
                                                                        <span class="label label-sm label-warning">Company</span>
                                                                    </div>
                                                                    <div class="task-config">
                                                                        <div class="task-config-btn btn-group">
                                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                <i class="fa fa-cog"></i>
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="task-checkbox">
                                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                                    <div class="task-title">
                                                                        <span class="task-title-sp"> Kick-off Company CRM Mobile App Development </span>
                                                                        <span class="label label-sm label-info">Internal Products</span>
                                                                    </div>
                                                                    <div class="task-config">
                                                                        <div class="task-config-btn btn-group">
                                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                <i class="fa fa-cog"></i>
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="task-checkbox">
                                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                                    <div class="task-title">
                                                                        <span class="task-title-sp"> Prepare Commercial Offer For SmartVision Website Rewamp </span>
                                                                        <span class="label label-sm label-danger">SmartVision</span>
                                                                    </div>
                                                                    <div class="task-config">
                                                                        <div class="task-config-btn btn-group">
                                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                <i class="fa fa-cog"></i>
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="task-checkbox">
                                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                                    <div class="task-title">
                                                                        <span class="task-title-sp"> Sign-Off The Comercial Agreement With AutoSmart </span>
                                                                        <span class="label label-sm label-default">AutoSmart</span>
                                                                        <span class="task-bell">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </span>
                                                                    </div>
                                                                    <div class="task-config">
                                                                        <div class="task-config-btn btn-group">
                                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                <i class="fa fa-cog"></i>
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="task-checkbox">
                                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                                    <div class="task-title">
                                                                        <span class="task-title-sp"> Company Staff Meeting </span>
                                                                        <span class="label label-sm label-success">Cruise</span>
                                                                        <span class="task-bell">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </span>
                                                                    </div>
                                                                    <div class="task-config">
                                                                        <div class="task-config-btn btn-group">
                                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                <i class="fa fa-cog"></i>
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="last-line">
                                                                    <div class="task-checkbox">
                                                                        <input type="checkbox" class="liChild" value="" /> </div>
                                                                    <div class="task-title">
                                                                        <span class="task-title-sp"> KeenThemes Investment Discussion </span>
                                                                        <span class="label label-sm label-warning">KeenThemes </span>
                                                                    </div>
                                                                    <div class="task-config">
                                                                        <div class="task-config-btn btn-group">
                                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                <i class="fa fa-cog"></i>
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </a>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <!-- END START TASK LIST -->
                                                        </div>
                                                    </div>
                                                    <div class="task-footer">
                                                        <div class="btn-arrow-link pull-right">
                                                            <a href="javascript:;">See All Tasks</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END PORTLET -->
                                        </div>
                                    </div>
                                    <div class="row">

                                        <!-- END CONTENT -->
                                        <!-- BEGIN QUICK SIDEBAR -->
                                        <a href="javascript:;" class="page-quick-sidebar-toggler">
                                            <i class="icon-login"></i>
                                        </a>
                                        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                                            <div class="page-quick-sidebar">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                                            <span class="badge badge-danger">2</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                                                            <span class="badge badge-success">7</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                                    <i class="icon-bell"></i> Alerts </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                                    <i class="icon-info"></i> Notifications </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                                    <i class="icon-speech"></i> Activities </a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li>
                                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                                    <i class="icon-settings"></i> Settings </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                                                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                                            <h3 class="list-heading">Staff</h3>
                                                            <ul class="media-list list-items">
                                                                <li class="media">
                                                                    <div class="media-status">
                                                                        <span class="badge badge-success">8</span>
                                                                    </div>
                                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading">Bob Nilson</h4>
                                                                        <div class="media-heading-sub"> Project Manager </div>
                                                                    </div>
                                                                </li>
                                                                <li class="media">
                                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading">Nick Larson</h4>
                                                                        <div class="media-heading-sub"> Art Director </div>
                                                                    </div>
                                                                </li>
                                                                <li class="media">
                                                                    <div class="media-status">
                                                                        <span class="badge badge-danger">3</span>
                                                                    </div>
                                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading">Deon Hubert</h4>
                                                                        <div class="media-heading-sub"> CTO </div>
                                                                    </div>
                                                                </li>
                                                                <li class="media">
                                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading">Ella Wong</h4>
                                                                        <div class="media-heading-sub"> CEO </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <h3 class="list-heading">Customers</h3>
                                                            <ul class="media-list list-items">
                                                                <li class="media">
                                                                    <div class="media-status">
                                                                        <span class="badge badge-warning">2</span>
                                                                    </div>
                                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading">Lara Kunis</h4>
                                                                        <div class="media-heading-sub"> CEO, Loop Inc </div>
                                                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                                                    </div>
                                                                </li>
                                                                <li class="media">
                                                                    <div class="media-status">
                                                                        <span class="label label-sm label-success">new</span>
                                                                    </div>
                                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                                                        <div class="media-heading-sub"> Project Manager,
                                                                            <br> SmartBizz PTL </div>
                                                                    </div>
                                                                </li>
                                                                <li class="media">
                                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading">Lisa Stone</h4>
                                                                        <div class="media-heading-sub"> CTO, Keort Inc </div>
                                                                        <div class="media-heading-small"> Last seen 13:10 PM </div>
                                                                    </div>
                                                                </li>
                                                                <li class="media">
                                                                    <div class="media-status">
                                                                        <span class="badge badge-success">7</span>
                                                                    </div>
                                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading">Deon Portalatin</h4>
                                                                        <div class="media-heading-sub"> CFO, H&D LTD </div>
                                                                    </div>
                                                                </li>
                                                                <li class="media">
                                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading">Irina Savikova</h4>
                                                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                                                    </div>
                                                                </li>
                                                                <li class="media">
                                                                    <div class="media-status">
                                                                        <span class="badge badge-danger">4</span>
                                                                    </div>
                                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading">Maria Gomez</h4>
                                                                        <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="page-quick-sidebar-item">
                                                            <div class="page-quick-sidebar-chat-user">
                                                                <div class="page-quick-sidebar-nav">
                                                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                                                        <i class="icon-arrow-left"></i>Back</a>
                                                                </div>
                                                                <div class="page-quick-sidebar-chat-user-messages">
                                                                    <div class="post out">
                                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                                        <div class="message">
                                                                            <span class="arrow"></span>
                                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                                            <span class="datetime">20:15</span>
                                                                            <span class="body"> When could you send me the report ? </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post in">
                                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                                        <div class="message">
                                                                            <span class="arrow"></span>
                                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                                            <span class="datetime">20:15</span>
                                                                            <span class="body"> Its almost done. I will be sending it shortly </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post out">
                                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                                        <div class="message">
                                                                            <span class="arrow"></span>
                                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                                            <span class="datetime">20:15</span>
                                                                            <span class="body"> Alright. Thanks! :) </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post in">
                                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                                        <div class="message">
                                                                            <span class="arrow"></span>
                                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                                            <span class="datetime">20:16</span>
                                                                            <span class="body"> You are most welcome. Sorry for the delay. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post out">
                                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                                        <div class="message">
                                                                            <span class="arrow"></span>
                                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                                            <span class="datetime">20:17</span>
                                                                            <span class="body"> No probs. Just take your time :) </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post in">
                                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                                        <div class="message">
                                                                            <span class="arrow"></span>
                                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                                            <span class="datetime">20:40</span>
                                                                            <span class="body"> Alright. I just emailed it to you. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post out">
                                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                                        <div class="message">
                                                                            <span class="arrow"></span>
                                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                                            <span class="datetime">20:17</span>
                                                                            <span class="body"> Great! Thanks. Will check it right away. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post in">
                                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                                        <div class="message">
                                                                            <span class="arrow"></span>
                                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                                            <span class="datetime">20:40</span>
                                                                            <span class="body"> Please let me know if you have any comment. </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post out">
                                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                                        <div class="message">
                                                                            <span class="arrow"></span>
                                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                                            <span class="datetime">20:17</span>
                                                                            <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="page-quick-sidebar-chat-user-form">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                                                        <div class="input-group-btn">
                                                                            <button type="button" class="btn green">
                                                                                <i class="icon-paper-clip"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                                                        <div class="page-quick-sidebar-alerts-list">
                                                            <h3 class="list-heading">General</h3>
                                                            <ul class="feeds list-items">
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-info">
                                                                                    <i class="fa fa-check"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> You have 4 pending tasks.
                                                                                    <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-success">
                                                                                        <i class="fa fa-bar-chart-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 20 mins </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-danger">
                                                                                    <i class="fa fa-user"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 24 mins </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-info">
                                                                                    <i class="fa fa-shopping-cart"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received with
                                                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 30 mins </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-user"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 24 mins </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-info">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                                                    <span class="label label-sm label-warning"> Overdue </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 2 hours </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-default">
                                                                                        <i class="fa fa-briefcase"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 20 mins </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <h3 class="list-heading">System</h3>
                                                            <ul class="feeds list-items">
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-info">
                                                                                    <i class="fa fa-check"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> You have 4 pending tasks.
                                                                                    <span class="label label-sm label-warning "> Take action
                                                            <i class="fa fa-share"></i>
                                                        </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-danger">
                                                                                        <i class="fa fa-bar-chart-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 20 mins </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-default">
                                                                                    <i class="fa fa-user"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 24 mins </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-info">
                                                                                    <i class="fa fa-shopping-cart"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received with
                                                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 30 mins </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-user"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 24 mins </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-warning">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                                                    <span class="label label-sm label-default "> Overdue </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 2 hours </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-sm label-info">
                                                                                        <i class="fa fa-briefcase"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 20 mins </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                                                        <div class="page-quick-sidebar-settings-list">
                                                            <h3 class="list-heading">General Settings</h3>
                                                            <ul class="list-items borderless">
                                                                <li> Enable Notifications
                                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                                <li> Allow Tracking
                                                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                                <li> Log Errors
                                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                                <li> Auto Sumbit Issues
                                                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                                <li> Enable SMS Alerts
                                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                            </ul>
                                                            <h3 class="list-heading">System Settings</h3>
                                                            <ul class="list-items borderless">
                                                                <li> Security Level
                                                                    <select class="form-control input-inline input-sm input-small">
                                                                        <option value="1">Normal</option>
                                                                        <option value="2" selected>Medium</option>
                                                                        <option value="e">High</option>
                                                                    </select>
                                                                </li>
                                                                <li> Failed Email Attempts
                                                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                                                <li> Secondary SMTP Port
                                                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                                                <li> Notify On System Error
                                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                                <li> Notify On SMTP Error
                                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                            </ul>
                                                            <div class="inner-content">
                                                                <button class="btn btn-success">
                                                                    <i class="icon-settings"></i> Save Changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END QUICK SIDEBAR -->
                                    </div>
                                    <!-- END CONTAINER -->

    </section>
            </div>
        </div>



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