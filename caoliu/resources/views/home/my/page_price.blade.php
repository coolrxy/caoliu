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


    <link href="/home_template/my/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/home_template/my/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/home_template/my/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="/home_template/my/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />


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
                        <h3 class="page-title"> <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-persona tooltips" data-original-title="Persona"></a>修改价格
                            <small></small>
                        </h3>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Begin: life time stats -->
                                <div class="portlet light portlet-fit portlet-datatable bordered">

                                    <div class="portlet-body">
                                        <div class="tabbable-line">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1">

                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="portlet grey-cascade box">
                                                                <div class="portlet-title">
                                                                    <div class="caption">
                                                                        <i class="fa fa-cogs"></i><font><font>订单时间:2017-09-06 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单ID:54780737637153411  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;卖家:任贤侄</font></font></div>
                                                                    <div class="actions">
                                                                        <a href="javascript:;" class="btn btn-default btn-sm">
                                                                            <i class="fa fa-pencil"></i><font><font> 删除订单 </font></font></a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($data as $items)
                                                <form action="{{url('home/goods/'.($items->data_goods_id))}}" method="post">
                                                    {{method_field('put')}}
                                                    {{csrf_field()}}
                                                    价格:<input type="number" name="goods_price" value="{{$items->goods_price}}" ><br/></br>
                                                    <input type="hidden" name="data_goods_id" value="{{$items->data_goods_id}}"/>
                                                    <input type="submit" value="确认修改" >

                                                </form>
                                                @endforeach



                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content" style="width:800px;height:650px;">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                    &times;
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel">
                                                                    订单详情
                                                                </h4>
                                                            </div>
                                                            <div class="modal-body" style="padding:0px;">
                                                                <div class="portlet-body" style="width:800px;height:30px; padding:0px;">
                                                                    <div class="mt-element-step">
                                                                        <div class="row step-thin">
                                                                            <div class="col-lg-4 bg-grey mt-step-col">
                                                                                <div class="mt-step-number first bg-white font-grey">1</div>
                                                                                <div class="mt-step-title uppercase font-grey-cascade">已拍下</div>
                                                                                <div class="mt-step-content font-grey-cascade">物品已经拍下,还未付款哦</div>
                                                                            </div>
                                                                            <div class="col-lg-4 bg-grey mt-step-col active">
                                                                                <div class="mt-step-number bg-white font-grey">2</div>
                                                                                <div class="mt-step-title uppercase font-grey-cascade">已付款</div>
                                                                                <div class="mt-step-content font-grey-cascade">完成付款,等待卖家发货.</div>
                                                                            </div>
                                                                            <div class="col-lg-4 bg-grey mt-step-col">
                                                                                <div class="mt-step-number bg-white font-grey">3</div>
                                                                                <div class="mt-step-title uppercase font-grey-cascade">已发货</div>
                                                                                <div class="mt-step-content font-grey-cascade">卖家发货啦!注意物流信息哦!</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4" style="width:800px; padding-top:5px; padding:0px;">
                                                                    <div class="portlet mt-element-ribbon light portlet-fit bordered" style="margin:0px;">
                                                                        <div class="ribbon ribbon-right ribbon-shadow ribbon-round ribbon-border-dash-hor ribbon-color-danger uppercase"><font><font>重要信息! </font></font></div>
                                                                        <div class="portlet-title">
                                                                            <div class="caption">
                                                                                <span class="caption-subject font-green bold uppercase">请查看订单详情信息状态</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="portlet-body">*&nbsp;当前订单状态：卖家已发货   &nbsp;&nbsp;&nbsp;交易结束时间: 2天11小时44分32秒<br>
                                                                            *&nbsp;如果期间您没有"确认收货"，也没有"申请退款"，以上宝贝将自动确认收货，支付宝将把货款支付给卖家。<br>
                                                                            *&nbsp;如果您已收到货，且对商品满意，您可以<a href="javascript:;" style="margin-top:0px;" class="btn dark btn-sm btn-outline sbold uppercase">
                                                                                <i class="fa fa-share"></i>&nbsp;确认收货 &nbsp;</a>打款给卖家.<br>
                                                                            *&nbsp;如果还未收到货，请注意自动打款时间，您可以<a>延长收货时间</a>或<a>申请退款</a>.</div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6" style="width:800px; height:200px; margin-top:10px; padding-top:0px; padding:0px;">
                                                                    <div class="mt-element-ribbon bg-grey-steel">
                                                                        <div class="ribbon ribbon-shadow ribbon-color-success uppercase"><font><font>物流信息详情</font></font></div>
                                                                        <p class="ribbon-content">
                                                                            发货方式：	快递<br>
                                                                            物流公司：	中通快递<br>
                                                                            运单号码：	452605763010<br>
                                                                            物流跟踪：<br>
                                                                            2017-09-06 20:37:17东莞桥头 的 纳美逊 已揽件<br>
                                                                            2017-09-06 21:37:33快件已从 东莞桥头 发出<br>
                                                                            2017-09-07 00:45:06快件到达 东莞中心<br>
                                                                            2017-09-08 23:08:51快件已从 北京 发出<br>
                                                                            2017-09-09 08:04:09北京昌平二部中通 的 邓明 正在派件,请保持电话畅通哦!<br>
                                                                            2017-09-11 15:43:00快件已签收，签收人:拍照签收:拍照签收,感谢您使用中通快递，期待再次为您服务！  <br>
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div style="padding-top:520px; padding-left:330px;">
                                                                <button type="button" class="btn btn-default active"   data-dismiss="modal"  data-toggle="button" aria-pressed="true"><font><font> 我知道了 </font></font></button>
                                                            </div>
                                                        </div>

                                                    </div><!-- /.modal -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: life time stats -->
                            </div>
                        </div>
            </div>
        </div>
            </div>

        </div>
    </section>









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
    <script src="/home_template/my/assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>


    <script src="/home_template/my/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
@endsection