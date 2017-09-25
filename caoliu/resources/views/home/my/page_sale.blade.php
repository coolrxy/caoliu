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
                        <h3 class="page-title"> <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-persona tooltips" data-original-title="Persona"></a>我的闲置
                            <small></small>
                        </h3>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                            
                               @if (count($errors) > 0)
                                <div class="alertError alert alert-danger">
                                    <ul>
                                        @if(is_object($errors))
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        @else
                                            <li>{{ $errors }}</li>
                                        @endif
                                    </ul>
                                </div>
                               @endif
                                             <script>
                                              $('.alertError').fadeOut(3000);
                                             </script>     
                                <!-- Begin: life time stats -->
                                <div class="portlet light portlet-fit portlet-datatable bordered">

                                    <div class="portlet-body">
                                        <div id="ers2" class="tabbable-line">
                                    
                                            <ul class="nav nav-tabs nav-tabs-lg">
                                                
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1">

                                                    <div class="row">

                                                                <div class="portlet-body" style="padding:0px;">
                                                                    <div class="table-responsive">

                                                                        <table class="table table-hover table-bordered table-striped" style="margin:0px;">
                                                                            <thead>
                                                                                <tr>
                                                                                    <td>商品编号</td>
                                                                                    <td>商品上架时间</td>
                                                                                    <td>商品图片</td>
                                                                                    <td>商品名称</td>
                                                                                    <td>商品价格</td>
                                                                                    <td>修改</td>
                                                                                    <td>发货操作</td>
                                                                                    <td>上下架</td>
                                                                                </tr>
                                                                            </thead>
                                                                            <thead>
                                                                            @foreach($data as $items)
                                         <tr>  <input type="hidden" name="data_goods_id" value="{{$items->data_goods_id}}}">
                                                                                <th style="width:170px; ">{{$items->goods_num}}</th>
                                                                                <th style="width:170px; ">{{$items->goods_create_time}}</th>
                                                                                <th >
                                                                                    <div style="padding:0px; width:60px; height:80px;"> <img src="/{{$items->goods_pic}}" alt=""></div></th>
                                                                                <th style="width:270px;  ">{{$items->goods_name}}</th>
                                      <th style="width:170px;  "><input type='number' onchange="changerPrice(this,{{$items->data_goods_id}})" name='goods_price' value="{{$items->goods_price}}"></th>
                                                                                <td   style="width:100px;">
                                                                                   <a  style="margin-top:30px;" href="{{url('home/goods/'.$items->data_goods_id.'/edit')}}"   class="btn dark btn-sm btn-outline sbold uppercase">
                                                                                        <i class="fa fa-share" ></i><font><font> 修改价格 </font></font></a>
                                                                                </td>
                                             @if(($items->goods_status)==2) <td     style="width:100px;"> <a    style="margin-top:30px;" value="{{$items->goods_status}}" name="goods_status"  class="btn dark btn-sm btn-outline sbold uppercase">
                                                     <i class="fa fa-share" ></i><font><font>   发货中   </font></font></a>
                                             </td>发货中 @elseif(($items->goods_status)==3)
                                                <td     style="width:100px;"> <a  style="margin-top:30px;" value="{{$items->goods_status}}" name="goods_status"  class="btn dark btn-sm btn-outline sbold uppercase">
                                                                                        <i class="fa fa-share" ></i><font><font>  已取消   </font></font></a>
                                                </td> @else <td     style="width:100px;"> <a  href="{{url('home/goods/'.$items->goods_id)}}"  style="margin-top:30px;" value="{{$items->goods_status}}" name="goods_status"  class="btn dark btn-sm btn-outline sbold uppercase">
                                                     <i class="fa fa-share" ></i><font><font>   发货   </font></font></a>
                                             </td>@endif
                                                                                <td   style="width:100px;">
                                                                                        <a  href="{{url('home/good_es/'.$items->goods_id)}}" value="{{$items->goods_status}}" name="goods_status"  style="margin-top:30px;"    class="btn dark btn-sm btn-outline sbold uppercase">
                                                                                            <i class="fa fa-share" ></i><font><font> @if(($items->goods_status)==3)已取消发布 @else 取消发布 @endif </font></font></a>
                                                                                </td>

                                                                            </tr>
                                                                            @endforeach
                                                                            </thead>

                                                                        </table>
                                                                        {{ $data->links() }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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



    <script >
        function changerPrice(obj,data_goods_id){
             // 获取当前文本框输入的排序值
            var goods_price = $(obj).val();
            console.log(data_goods_id);
            $.post('{{url('home/goods/changeorder')}}',{'_token':'{{csrf_token()}}','data_goods_id':data_goods_id,'goods_price':goods_price},function(data){
                //var obj = JSON.parse(data);
                if(data.state == 0){
                    location.href = location.href;
                    layer.msg(data.msg, {icon: 5});

                }else{
                    location.href = location.href;
                    layer.msg(data.msg, {icon: 6});
                }
            })
        } 
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
    <script src="/home_template/my/assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>


    <script src="/home_template/my/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="/home_template/my/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
@endsection