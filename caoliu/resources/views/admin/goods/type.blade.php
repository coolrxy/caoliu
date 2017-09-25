@extends('admin.layout')
@section('title', '分类列表')
@section('header')
    @parent
@endsection
@section('sidebar')
    @parent
@endsection
@if(session()->get('user_status')==1 || session()->get('user_level')==0)
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                分类列表

            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">分类列表</h3>
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
                            <form action="{{url('admin/goodsType')}}" method="get">
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <div class="form-group">

                                            <select name="goods_pid" class="form-control">
                                                <option value="10000">全部</option>
                                                @foreach($type as $item)
                                                <option value="{{ $item->goods_type_id }}">{{ $item->goods_type_name }}</option>
                                                @endforeach
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
                                    <th>类别名</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->goods_type_id }}</td>
                                    <td>{{ $item->goods_type_name }}</td>
                                    <td>

                                        <a href="{{ url('admin/goodsType/'.$item->goods_type_id.'/edit') }}">修改</a> @if($item->count==0)<a href="javascript:;" onclick="delUser({{ $item->goods_type_id }})">删除</a>@endif</td>

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
            $.post('{{ url('admin/goodsType') }}/'+id,{'_token':'{{ csrf_token() }}','_method':'delete'},function (data) {
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