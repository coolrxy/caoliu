@extends('admin.layout')
@section('title', '管理员列表')
@section('header')
    @parent
@endsection
@section('sidebar')
    @parent
@endsection
@if(session()->get('user_level')==0 || session()->get('user_status')==3)
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @foreach($data as $item)
            <h1>

                {{ $item->users_name }}用户详情表

            </h1>
            @endforeach
        </section>

        <!-- Main content -->
        <section class="content">
		
		
		<!-- 用户详情 -->
		
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">❀基本信息列表</h3>
                        </div>
						
                        <div class="box-body">
                            
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
								
                                    <td align="center">用户ID</td>
                                    <td align="center">用户名</td>
                                    <td align="center">用户昵称</td>
                                    <td align="center">用户邮箱</td>
                                    <td align="center">用户电话</td>
                                    <td align="center">用户信誉度</td>
                                    <td align="center">用户积分</td>
                                    <td align="center">用户头像</td>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td align="center">{{ $item->users_id }}</td>
                                    <td align="center">{{ $item->users_name }}</td>
                                    <td align="center">{{ $item->users_nickname }}</td>
                                    <td align="center">{{ $item->users_email }}</td>
                                    <td align="center">{{ $item->users_phone }}</td>
                                    <td align="center"><input type="text" onchange="changeOrder(this,{{ $item->users_id }})" name="users_credit[]" value="{{ $item->users_credit }}" /></td>
                                    <td align="center"><input type="text" onchange="changeOrders(this,{{ $item->users_id }})" name="users_integra[]" value="{{ $item->users_integra }}" /></td>
                                    <td align="center"><img src="{{ $item->users_pic }}" width="100px" /></td>
									
                                </tr>
                                @endforeach
                            </table>

                        </div>
                    </div>
                </div>
            </div>

			
			<!-- 用户收货地址表 -->
			
			
			<div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">❀用户收货地址表</h3>
                        </div>
						
                        <div class="box-body">
                            
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
								
                                    <td align="center">用户ID</td>
                                    <td align="center">收货人姓名</td>
                                    <td align="center">手机号码</td>
                                    <td align="center">所填省份</td>
                                    <td align="center">所填城市</td>
                                    <td align="center">所填乡镇</td>
                                    <td align="center">详细地址</td>
                                    
									
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($address as $item)
                                <tr>
								
                                    <td align="center">{{ $item->users_id }}</td>
                                    <td align="center">{{ $item->addres_name }}</td>
                                    <td align="center">{{ $item->addres_phone}}</td>
                                    <td align="center">{{ $item->addres_province}}</td>
                                    <td align="center">{{ $item->addres_city}}</td>
                                    <td align="center">{{ $item->addres_town}}</td>
                                    <td align="center">{{ $item->addres_details}}</td>
									
                                </tr>
                                @endforeach
                            </table>

                        </div>
                    </div>
                </div>
            </div>


			<!-- 用户评价表信息 -->
			
			
			<div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">❀此用户评价他人的信息</h3>
                        </div>
						
                        <div class="box-body">
                            
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
								
                                    <td align="center">评价表ID</td>
                                    <td align="center">被评价人</td>
                                    <td align="center">评价内容</td>
                                    <td align="center">评价时间</td>
                                    <td align="center">操作</td>

									
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($evaluate as $item)
                                <tr>
								
                                    <td align="center">{{ $item->evaluate_id }}</td>
                                    <td align="center">{{ $item->users_name}}</td>
                                    <td align="center">{{ $item->evaluate_content}}</td>
                                    <td align="center">{{ $item->evaluate_time}}</td>
                                    <td align="center"><a href = "{{url('/admin/evaluates_delete/'.$item->evaluate_id)}}">删除</a></td>

                                </tr>
                                @endforeach
                            </table>
                            {{ $evaluate->links() }}
                        </div>
                    </div>
                </div>
            </div>


			
			
			
        </section>
       
    </div>
@endsection
@else
    <div class="alertError alert alert-danger">
        <span>你没有这个权限</span>
    </div>
@endif
@section('footer')
    @parent
@endsection
@section('aside')
    @parent
@endsection
@section('js')
    <script type="text/javascript">
        $('.alertError').fadeOut(3000);
    </script>
@stop
<script>
    //    用户信誉度
    function changeOrder(obj,users_id){
//        获取当前文本框输入的排序值
        var users_credit = $(obj).val();


        $.post('{{url('admin/homeuser_ajax')}}',{'_token':'{{csrf_token()}}','users_id':users_id,'users_credit':users_credit},function(data){

            if(data.state == 0){

                layer.msg(data.msg, {icon: 5});

            }else{

                layer.msg(data.msg, {icon: 6});
            }
        })
    }



            //用户积分
    function changeOrders(obj,users_id){
//        获取当前文本框输入的排序值
        var users_integra = $(obj).val();


        $.post('{{url('admin/homeuser_ajax_users_integra')}}',{'_token':'{{csrf_token()}}','users_id':users_id,'users_integra':users_integra},function(data){

            if(data.state == 0){

                layer.msg(data.msg, {icon: 5});

            }else{

                layer.msg(data.msg, {icon: 6});
            }
        })
    }














</script>