@extends('admin.layout')
@section('title','商品类别添加')
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


        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">

                <!-- right column -->
                <div class="col-md-offset-3 col-md-6">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">商品类别添加</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{ url('admin/goodsType') }}" method="post">

                            {{ csrf_field() }}
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
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">上级类别</label>
                                    <div class="row">



                                        <div class="col-md-5">
                                            <select class="form-control" name="goods_pid">
                                                <option value="0">顶级分类</option>
                                                @foreach($data as $item)
                                                <option value="{{ $item->goods_type_id }}">{{ $item->goods_type_names }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>




                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3"  class="col-sm-2 control-label">类别名</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="goods_type_name" class="form-control" id="inputPassword3" placeholder="请输入类别名">
                                    </div>
                                </div>


                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">

                                <button type="submit" class="btn btn-info pull-right">添加</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                    <!-- /.box -->
                    <!-- general form elements disabled -->

                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
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