<!DOCTYPE html>
<html lang="zh">
<head>
    <title>{{ config('app.name') }} | 登录页面</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/gb/networks/themes/img/gbin1.ico') }}">
    <link href="{{ asset('/style/css/gb.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('/style/css/lib.min.css') }}" rel="stylesheet" media="screen">


</head>
<body class="sitehome">



<script src="{{ asset('/style/js/sea.js') }}"></script>

<nav class="nav-common navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">




        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="codereplayermenu">




        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>


<div class="container register">
    <div class="row" style="margin:10px 0 50px;">

        <div class="col-xs-12 col-sm-5 col-md-5">
            <h1></h1>
            <img class="img-responsive center-block" src="{{ asset('/style/images/mobilelogo.png')}}" />
        </div>
        <div class="col-xs-12 col-sm-1 col-md-1"></div>
        <div class="col-xs-12 col-sm-5 col-md-5">
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
            <form role="form" id="regform" action="{{ url('admin/dologin') }}" method="post">
                {{ csrf_field() }}
                <div class="page-header">
                    <h2 class="text-center text-warning">
                         管理员登录
                    </h2>
                </div>
                <div class="channel-type">



                </div>
                <div class="clearfix"></div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><span class="mdi-action-account-circle"></span></span>
                    <input type="text" id="fullname" name="admin_name" class="form-control validate[required,custom[onlyChineseLetterNumber],minSize[4],maxSize[18]" placeholder="用户名" value="{{ old('admin_name') }}">
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><span class="mdi-hardware-keyboard"></span></span>
                    <input type="password" id="pwd" name="admin_password" class="form-control validate[required,minSize[6]]" placeholder="登录密码">
                </div>




                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><span class="mdi-action-settings-cell"></span></span>
                    <input type="text" id="phone-captcha" name="code" class="form-control" placeholder="输入验证码"/>
                    <span class="input-group-btn">

                        <a onclick="javascript:re_captcha();">
							<img src="{{ URL('/code/captcha/1') }}" id="127ddf0de5a04167a9e427d883690ff6">
						</a>

					</span>
                </div>






                <hr/>

                <button type="submit" class="btn btn-primary ladda-button pull-right" id="registerbutton" title="立刻注册" data-style="expand-right">
					<span class="ladda-label">
						<span class="glyphicon glyphicon-log-in"></span> &nbsp; 立刻登录
					</span>
                </button>

                <div class="hidden">
                    <ul id="userlist"></ul>
                    <ul id="userfunctiontaglist"></ul>
                </div>

            </form>


        </div>

    </div>
</div>







<script type='text/javascript'>
    var gbin1_sessionid = '1A62986F8520438360C4216DF886832A',
        gbin1_userid = '0';

    /* Mapping onlineuser object to javascript object */
    var global_onlineuser = {
        uid:0,
        fullname:'null',
        avatar:'avatar.jpg',
        background:'',
        roleid: '0',
        sitename: '',
        selfintro: '',
        lastlogondate: '2017-09-07 14:41:00',
        lastlogondateforreminder: '0000-00-00 00:00:00',
        deleted: 0
    }, global_contextPath = '/gb';
</script>

<!-- DWR -->
<script type='text/javascript' src="{{ asset('/style/js/identityService.js')}}"></script>
<script type='text/javascript' src="{{ asset('/style/js/engine.js')}}"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="{{ asset('/style/js/html5shiv.min.js')}}"></script>
<script src="{{ asset('/style/js/respond.min.js')}}"></script>
<![endif]-->
<script type="text/javascript">
    function re_captcha() {
        $url = "{{ URL('/code/captcha') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('127ddf0de5a04167a9e427d883690ff6').src = $url;
    }
</script>
@section('js')
    <script type="text/javascript">
        $('.alertError').fadeOut(3000);
    </script>
@stop


</body>
</html>