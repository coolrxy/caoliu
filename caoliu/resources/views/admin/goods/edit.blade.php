@extends('admin.layout')
@section('title','修改列表')
@section('header')
    @parent
@endsection
@section('sidebar')
    @parent
@endsection
@if(session()->get('user_level')==0||session()->get('user_sataus')==1)
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
                            <h3 class="box-title">类别修改</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{ url('admin/goodsType/'.$data->goods_type_id) }}" method="post">

                            {{ csrf_field() }}
                            {{--{{ method_field('put') }}--}}
                            <input type="hidden" name="_method" value="put">
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
                                    @if($data->goods_pid!=0)
                                    <div class="row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">一级类别</label>
                                        <div class="form-group col-md-5">


                                            <select name="goods_pid" class="form-control">

                                                @foreach($type as $item)
                                                    <option @if($item->goods_type_id==$data['goods_pid']) selected="selected" @endif value="{{ $item->goods_type_id }}">{{ $item->goods_type_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="row">
                                        <label for="inputEmail3" class="col-sm-2 control-label">类别名称</label>
                                        <div class="form-group col-md-10">
                                            <div>
                                                <input type="text" class="form-control" id="inputEmail3" name="goods_type_name" value="{{ $data['goods_type_name'] }}" >
                                            </div>
                                        </div>
                                    </div>


                           </div>
                            <!-- /.box-body -->
                            <div class="box-footer">

                                <button type="submit" class="btn btn-info pull-right">修改</button>
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