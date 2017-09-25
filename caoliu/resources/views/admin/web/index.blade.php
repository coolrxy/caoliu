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
                ❀首页轮播图管理

            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">❀首页轮播图管理●【最多支持3条轮播图哦!】</h3>
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

                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
								
								
                                    <td align="center">轮播图排序</td>
                                    <td align="center">展示标签</td>
                                    <td align="center">此图简介</td>
                                    <td align="center">轮播图片</td>
                                    <td align="center">操作</td>
									
									
                                </tr>

                                @foreach($data as $item)

                                <tr>



                                    <td align="center">{{ $item->id }}</td>
                                    <td align="center">{{ $item->title }}</td>
                                    <td align="center">{{ $item->content }}</td>
                                    <td align="center"><img src="{{ $item->pic }}" width="300px" height="180px" /></td>

                                    <td align="center"><a href = "{{url('/admin/web_show_pic_edit/'.$item->id)}}">修改</a></td>


                                </tr>

                                @endforeach

                                </thead>
                                <tbody>

                            </table>

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