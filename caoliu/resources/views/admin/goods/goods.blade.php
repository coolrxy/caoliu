@extends('admin.layout')
@section('title', '商品列表')
@section('header')
    @parent
@endsection
@section('sidebar')
    @parent
@endsection

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
                            <h3 class="box-title">商品列表</h3>
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
                            @if(!empty($data))
                            <form action="{{url('admin/goods')}}" method="get">
                                <div class="row">
                                    {{--<div class="col-md-3 ">--}}
                                        {{--<div class="form-group">--}}

                                            {{--<select name="goods_pid" class="form-control">--}}
                                                {{--<option value="10000">全部</option>--}}
                                                {{--@foreach($data as $item)--}}
                                                {{--<option value="{{ $item->goods_type }}">{{ $item->goods_type_name }}</option>--}}
                                                {{--@endforeach--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="keywords" placeholder="输入商品名称">
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
                                    <th>商品ID</th>
                                    <th>发布人</th>
                                    <th>商品添加时间</th>
                                    <th>商品编号</th>
                                    <th>商品名</th>
                                    <th>商品价格</th>
                                    <th>商品状态</th>
                                    <th>商品原价</th>
                                    <th>收藏次数</th>
                                    <th>商品图片</th>
                                    <th>详细信息</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->goods_id }}</td>
                                    <td>{{ $item->users_name }}</td>
                                    <td>{{ $item->goods_create_time }}</td>
                                    <td>{{ $item->goods_num }}</td>
                                    <td>{{ $item->goods_name }}</td>
                                    <td>{{ $item->goods_price }}</td>
                                    <td>@if(($item->goods_status)==0)上架中@elseif(($item->goods_status)==2)配送中@elseif(($item->goods_status)==1)下架@else 卖家取消发布 @endif</td>
                                    <td>{{ $item->goods_old_price }}</td>
                                    <td>{{ $item->goods_orders_num}}</td>
                                    <td><img width="100px" height="80px" src="{{asset($item->goods_pic)  }}"></td>
                                    <td>{{ $item->goods_describe }}</td>
                                    <td>
                                <!-- //商品状态 0:上架 ,1:下架,2:发货中,3:取消发布 -->
                                    @if($item->goods_status == 0)
                                        <a href="{{ url('admin/goods/'.$item->goods_id.'/edit') }}">下架(点击下架)</a>
                                    @elseif(($item->goods_status) == 1)
                                        <a href="{{ url('admin/goods/'.$item->goods_id) }}">上架(点击下架)</a>
                                    @else

                                    @endif
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            {{ $data->links() }}
                            @endif
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