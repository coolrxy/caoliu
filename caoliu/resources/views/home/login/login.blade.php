<!DOCTYPE html>
<html>

	<head lang="en">
		<meta charset="UTF-8">
		<title>登录前台</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Cache-Control" content="no-siteapp" />
    <script src="{{asset('/home_template/login/assets/js/jquery.min.js')}}"></script>
		<link rel="stylesheet" href="{{asset('/home_template/login/assets/css/amazeui.css')}}" />
		<link href="{{asset('/home_template/login/css/dlstyle.css')}}" rel="stylesheet" type="text/css">
    <style type="text/css">
       .span{
          height:20px;
          display:block;
       }
    </style>
	</head>

	<body>

		<div class="login-boxtitle">
			<!-- <a href="{{url('/')}}"><img alt="logo" src="{{url('home_template/login/images/big.jpg')}}" /></a> -->
		</div>

		<div class="login-banner">
			<div class="login-main">
				<div class="login-banner-bg"><span></span><img src="{{url('home_template/login/images/big.jpg')}}" /></div>
				<div class="login-box">
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
							<h3 class="title">登录商城</h3>

							<div class="clear"></div>
						
						<div class="login-form">
						  <form action="{{url('home/dologin')}}" method="post">
              {{csrf_field()}}
							   <div class="user-name">
								    <label for="user"><i class="am-icon-user"></i></label>
								    <input type="text" name="users_name" id="user" placeholder="手机/用户名">
                 </div>
                 <div class="user-pass">
								    <label for="password"><i class="am-icon-lock"></i></label>
								    <input type="password" name="users_password" id="password" placeholder="请输入密码">
                 </div>
                 <div class="col-xs-8">

              </div>
                 <div class="am-cf">
                  <input id="denglu" type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm">
                </div>
              </form>

           </div>
            
            <div class="login-links">
				<label for="remember-me"><input type="checkbox" name="remember" value="remember">记住我</label>
								<a href="{{url('home/editpass')}}" class="am-fr">忘记密码</a>
								<a href="{{url('home/add')}}" class="zcnext am-fr am-btn-default">注册</a>
								<br />
            </div>

						<div class="partner">		
								<h3>合作账号</h3>
							<div class="am-btn-group">
								<li><a href="#"><i class="am-icon-qq am-icon-sm"></i><span>QQ登录</span></a></li>
								<li><a href="#"><i class="am-icon-weibo am-icon-sm"></i><span>微博登录</span> </a></li>
								<li><a href="#"><i class="am-icon-weixin am-icon-sm"></i><span>微信登录</span> </a></li>
							</div>
						</div>	

				</div>
			</div>
		</div>

	</body>

</html>