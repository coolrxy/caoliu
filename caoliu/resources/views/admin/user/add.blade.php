@extends('admin.layout')
@section('title','添加管理员')
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


        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">

                <!-- right column -->
                <div class="col-md-offset-3 col-md-6">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">用户添加</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{ url('admin/user') }}" method="post">

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
                                    <label for="inputEmail3" class="col-sm-2 control-label">管理员名</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="admin_name" value="{{old('admin_name')}}" placeholder="请输入用户名">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3"  class="col-sm-2 control-label">密码</label>

                                    <div class="col-sm-10">
                                        <input type="password" name="admin_password" class="form-control" id="inputPassword3" placeholder="请输入旧密码">
                                    </div>
                                </div>
                                   <div class="row">
                                        <div class="form-group col-md-offset-1 col-md-11">

                                        <label for="inputPassword3"  class="col-md-3 control-label">管理员等级</label>


                                    <div class="radio  col-md-offset-3">
                                        <label>
                                            <input type="radio" name="admin_level" id="optionsRadios2" value="1" checked>
                                            T2
                                        </label>
                                    </div>
                                </div>
                                   </div>
                                    <div class="row">
                                       <div class="form-group col-md-offset-1 col-md-11">
                                           <label for="inputPassword3"  class="col-md-3 control-label">管理员作用</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="admin_status" id="optionsRadios1" value="1" checked>
                                                商品管理员
                                            </label>
                                        </div>
                                        <div class="radio col-md-offset-3">
                                            <label>
                                                <input type="radio" name="admin_status" id="optionsRadios2" value="2">
                                                订单管理员
                                            </label>
                                        </div>
                                        <div class="radio col-md-offset-3">
                                            <label>
                                                <input type="radio" name="admin_status" id="optionsRadios2" value="3">
                                                用户管理员
                                            </label>
                                        </div>
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