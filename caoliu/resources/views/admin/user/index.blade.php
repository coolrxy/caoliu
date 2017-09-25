@extends('admin.layout')
@section('title', '管理员列表')
@section('header')
    @parent
@endsection
@section('sidebar')
    @parent
@endsection
@if(session()->get('user_level')==0)
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                管理员列表

            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">管理员列表</h3>
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
                            <form action="{{url('admin/user')}}" method="get">
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <div class="form-group">

                                            <select name="status" class="form-control">
                                                <option value="0">全部</option>
                                                <option value="1">商品管理员</option>
                                                <option value="2">订单管理员</option>
                                                <option value="3">用户管理员</option>
                                                <option value="4">无敌的管理员</option>
                                            </select>
                                        </div>
                                    </div>
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
                                    <th>ID</th>
                                    <th>用户名</th>
                                    <th>等级</th>
                                    <th>权限</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->admin_id }}</td>
                                    <td>{{ $item->admin_name }}</td>
                                    <td>@switch($item->admin_level)
                                            @case(0)
                                                T1级管理员
                                            @break
                                            @case(1)
                                                T2级管理员
                                            @break
                                        @endswitch
                                    </td>
                                    <td>@switch($item->admin_status)
                                            @case(4)
                                                无敌的管理员
                                            @break
                                            @case(1)
                                                商品管理员
                                            @break
                                            @case(2)
                                                订单管理员
                                            @break
                                            @case(3)
                                                用户管理员
                                            @break
                                        @endswitch
                                    </td>
                                    <td>
                                        @if($item->admin_level != 0)
                                        <a href="{{ url('admin/user/'.$item->admin_id.'/edit') }}">修改</a> <a href="javascript:;" onclick="delUser({{ $item->admin_id }})">删除</a></td>
                                        @endif
                                </tr>
                                @endforeach
                            </table>
                            {{ $data->appends(['status'=>$condition1,'keywords'=>$condition2])->links() }}
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
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