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
    <link href="/home_template/my/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/home_template/my/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />

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

                    <!-- BEGIN CONTENT BODY -->

                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->


                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="p1age-content">

                                <div class="page-bar"  style="margin:0px;" >
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
                                <h3 class="page-title " style="margin:0px;"> <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-persona tooltips" data-original-title="Persona"></a>商品发布
                                    <small></small>

                                </h3>
                                <div class="alert alert-block alert-danger fade in" style="height:90px; width:1100px; margin:0px;">
                                  <button type="button" class="close" data-dismiss="alert"></button>
                                    <h4 class="alert-heading">请注意!</h4>
                                    <p>您在上载商品信息前应当仔细阅读<a>《禁止与限制发布物品规则》</a>并予以遵守。由
                                        于发布以下物品所引起的法律责任由相关用户完全承担与草榴无关。一旦本站发现有
                                        任何违反本规则的物品信息草榴有权立即予以删除,保留给予相关用户警告、冻结直
                                        至终止其帐户的权力。请各位用户自觉遵守。
                                    </p>
                                </div>


                            <div class="col-md-12"  style="padding:0px;">


                                <div id="er">
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
                                </div>



                                <form id="art_form" class="form-horizontal form-row-seperated" action="{{url('home/goods')}}" method="post" enctype="multipart/form-data"  >
                                    {{csrf_field()}}
                                    <div class="portlet">
                                       <div class="portlet-body">
                                            <div class="tabbable-bordered"  style="margin:4px;">

                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_general">
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label"><font><font>商品名称：
                                                                        </font></font><span class="required"><font><font>*</font></font></span>
                                                                </label>
                                                                <div class="col-md-6" >
                                                                    <input type="text" class="form-control" name="goods_name" placeholder=""> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label"><font><font>价格：
                                                                        </font></font><span class="required"><font><font>*</font></font></span>
                                                                </label>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="goods_price" placeholder=""> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label"><font><font>原价：
                                                                        </font></font><span class="required"><font><font>*</font></font></span>
                                                                </label>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="goods_old_price" placeholder=""> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label"><font><font>商品分类：
                                                                        </font></font><span class="required"><font><font>*</font></font></span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <select class="table-group-action-input form-control input-medium" name="goods_type">
                                                                        <option value="0"><font><font>选择...</font></font></option>
                                                                        @foreach($cate as $k=>$v)
                                                                            <option  value="{{$v->goods_type_id}}">{{$v->goods_type_name}}</option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label"><font><font>商品图片：
                                                                        </font></font><span class="required"><font><font>*</font></font></span>
                                                                </label>
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px; margin-left:15px;">
                                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                    <div>
                                                                        <span class="btn default btn-file" style=" margin-left:15px;">
                                                                            <input type="hidden" name="goods_pic" id="art_thumb">
                                                                            <span class="fileinput-new"> 选择图片 </span>
                                                                            <span class="fileinput-exists"> 选择图片 </span>
                                                                            <input type="file" id="file_upload" name="file_upload" multiple="true"> </span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label"><font><font>商品描述：
                                                                        </font></font><span class="required"><font><font>*</font></font></span>
                                                                </label>
                                                                <div class="col-md-6">
                                                                    <textarea class="form-control" name="goods_describe"></textarea>
                                                                    <span class="help-block"><font><font> 在产品列表中显示 </font></font></span>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="goods_status" value="0">

                                                            {{--<div class="form-group">--}}
                                                                {{--<label class="col-md-2 control-label"><font><font>状态：--}}
                                                                        {{--</font></font><span class="required"><font><font>*</font></font></span>--}}
                                                                {{--</label>--}}
                                                                {{--<div class="col-md-10">--}}
                                                                    {{--<select class="table-group-action-input form-control input-medium" name="product[status]">--}}
                                                                        {{--<option value=""><font><font>选择...</font></font></option>--}}
                                                                        {{--<option value="1"><font><font>发布时间</font></font></option>--}}
                                                                        {{--<option value="0"><font><font>不发布</font></font></option>--}}
                                                                    {{--</select>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            <div class="portlet-title">

                                                                <div class="actions btn-set" style="margin-left:340px;">


                                                                        <i class="fa fa-check-circle"></i><font><font> <input type="submit" value="保存并继续"></font></font>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
                                <script type="text/javascript">
//                                    $(function() {
//                                        $('#myModal').modal({
//                                            keyboard: true
//                                        })
//                                    });
                                    $(function () {
                                        $("#file_upload").change(function () {
                                            uploadImage();
                                        })
                                    })
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
                                        //console.log(strExtension);
                                        if (strExtension != 'jpg' && strExtension != 'gif'
                                            && strExtension != 'png' && strExtension != 'bmp') {
                                            alert("请选择图片文件");
                                            return;
                                        }
                                        var formData = new FormData($('#art_form')[0]);
                                        // console.log(formData);
                                        $.ajax({
                                            type: "POST",
                                            url: "/home/test",
                                            data: formData,
                                            contentType: false,
                                            processData: false,
                                            success: function(data) {
//                                                alert(111);
                                                console.log(data);
//                                                $('#img1').attr('src','/'+data);
                                                $('#art_thumb').val(data);

                                            },
                                            error: function(XMLHttpRequest, textStatus, errorThrown) {
                                                console.log(errorThrown);
                                                alert("上传失败，请检查网络后重试");
                                            }
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
        </div>
            </div>

        </div>
    </section>

    <script type="text/javascript">
        $('#er').fadeOut(3000);
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


    <script src="/home_template/my/assets/pages/scripts/ecommerce-products-edit.min.js" type="text/javascript"></script>
@endsection
