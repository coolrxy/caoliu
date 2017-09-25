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
            <h1>
                前台用户列表

            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">❀前台用户列表</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
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
                            <form action="{{url('admin/homeuser')}}" method="get">
                                <div class="row">
								
                                    <div class="col-md-3 "> </div>
									
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="keywords" placeholder="关键字">
                                        </div>
                                    </div>
									
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">搜索</button>
                                    </div>
									
                                </div>
                            </form>

                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
								
								
                                    <td align="center">ID</td>
                                    <td align="center">用户名</td>
                                    <td align="center">用户昵称</td>
                                    <td align="center">用户头像</td>
                                    <td align="center">操作</td>
									
									
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                <tr>
								
								
								
                                    <td align="center" height="100px">{{ $item->users_id }}</td>
                                    <td align="center"><a href="/admin/homeuser_my/{{ $item->users_id }}">{{ $item->users_name }}</a></td>
                                    <td align="center">{{ $item->users_nickname }}</td>
                                    <td align="center"><img src="{{ $item->users_pic }}" width="100px" height="100px" /></td>
									
                                    <td align="center"><a href = "{{url('/admin/homeuser_edit/'.$item->users_id)}}">修改</a></td>
                                    
                                    
                                </tr>
                                @endforeach
                            </table>
							{{ $data->links() }}
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

    function delUser(id){
        //询问框
        layer.confirm('您确定要删除么？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.post('{{ url('admin/user') }}/'+id,{'_token':'{{ csrf_token() }}','_method':'delete'},function (data) {
                if(data.state == 0){
                    layer.msg(data.msg, {icon: 6});
                    location.href = location.href;
                }else{
                    layer.msg(data.msg, {icon: 5});
                    location.href = location.href;
                }
            })
        }, function(){
            layer.msg('aaa', {icon: 6});
        });
    }
</script>