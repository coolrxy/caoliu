@extends('admin.layout')
@section('title','管理员修改密码')
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


        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">

                <!-- right column -->
                <div class="col-md-offset-3 col-md-6">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">修改密码</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{ url('/admin/dopass') }}" method="post">

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
                                    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="admin_name" value="{{session()->get('user')}}" placeholder="请输入用户名">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3"  class="col-sm-2 control-label">旧密码</label>

                                    <div class="col-sm-10">
                                        <input type="password" name="admin_password" class="form-control" id="inputPassword3" placeholder="请输入旧密码">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">新密码</label>

                                    <div class="col-sm-10">
                                        <input type="password" name="newpassword" class="form-control" id="inputPassword3" placeholder="请输入新密码">
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